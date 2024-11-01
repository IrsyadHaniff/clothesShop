document.addEventListener("DOMContentLoaded", function () {
  let cart = [];
  let totalPrice = 0;

  function addToCart(itemName, itemPrice, itemImage, quantity) {
    const existingItemIndex = cart.findIndex((item) => item.name === itemName);

    if (existingItemIndex !== -1) {
      cart[existingItemIndex].quantity += quantity;
    } else {
      cart.push({
        name: itemName,
        price: itemPrice,
        image: itemImage,
        quantity: quantity,
      });
    }
    updateCart();
  }

  function updateCart() {
    const cartItemsContainer = document.getElementById("cart-items");
    const totalPriceDisplay = document.getElementById("total-price");

    cartItemsContainer.innerHTML = "";
    totalPrice = 0;

    cart.forEach((item, index) => {
      const itemTotalPrice = item.price * item.quantity;
      totalPrice += itemTotalPrice;

      const cartItemHTML = `
        <div class="cart-item">
          <img src="${item.image}" alt="${item.name}">
          <div>
            <p>${item.name}</p>
            <p>${item.quantity} x Rp. ${item.price}</p>
          </div>
          <div>
            <span class="trash-icon" data-index="${index}">&times;</span>
          </div>
        </div>
        `;
      cartItemsContainer.insertAdjacentHTML("beforeend", cartItemHTML);
    });

    totalPriceDisplay.textContent = `Rp. ${totalPrice}`;
    attachRemoveItemListeners();
  }

  function openSidebar() {
    const sidebar = document.getElementById("cart-sidebar");
    sidebar.classList.add("active");
  }

  function closeSidebar() {
    const sidebar = document.getElementById("cart-sidebar");
    sidebar.classList.remove("active");
  }

  function attachRemoveItemListeners() {
    const trashIcons = document.querySelectorAll(".trash-icon");

    trashIcons.forEach((icon) => {
      icon.addEventListener("click", (e) => {
        const itemIndex = e.target.getAttribute("data-index");
        cart.splice(itemIndex, 1);
        updateCart();
      });
    });
  }

  document.querySelectorAll(".bi-cart4").forEach((icon) => {
    icon.addEventListener("click", () => {
      const itemName = icon.closest(".card_product_info").querySelector("h1").textContent;
      const itemPriceText = icon.closest(".card_product_info").querySelector("h3").textContent;
      const itemPrice = parseInt(itemPriceText.replace(/\D/g, ""));
      const itemImage = icon.closest(".card_product").querySelector("img").getAttribute("src");

      openPopup(itemName, itemPrice, itemImage);
    });
  });

  document.querySelector(".bi-cart-check").addEventListener("click", openSidebar);
  document.querySelector(".close-sidebar").addEventListener("click", closeSidebar);

  function openPopup(itemName, itemPrice, itemImage) {
    const popup = document.getElementById("popup");
    popup.style.display = "flex";
    let quantity = 1;

    document.getElementById("quantity").textContent = quantity;

    document.getElementById("process-btn").onclick = function () {
      addToCart(itemName, itemPrice, itemImage, quantity);
      popup.style.display = "none";
    };

    document.getElementById("increase").onclick = function () {
      quantity++;
      document.getElementById("quantity").textContent = quantity;
    };

    document.getElementById("decrease").onclick = function () {
      if (quantity > 1) {
        quantity--;
        document.getElementById("quantity").textContent = quantity;
      }
    };
  }

  document.addEventListener("alpine:init", () => {
    Alpine.data("shoppingCart", () => ({
      items: [
        { id: 1, name: "Baju Expo", image: "img/produk/baju1.jpg", price: 40000 },
        { id: 2, name: "Baju Safari", image: "img/produk/baju2.jpg", price: 50000 },
      ],
      cart: [],
      totalPrice: 0,

      addToCart(item, quantity = 1) {
        const existingItem = this.cart.find((cartItem) => cartItem.id === item.id);
        if (existingItem) {
          existingItem.quantity += quantity;
        } else {
          this.cart.push({ ...item, quantity });
        }
        this.updateTotalPrice();
      },

      removeFromCart(index) {
        this.cart.splice(index, 1);
        this.updateTotalPrice();
      },

      updateTotalPrice() {
        this.totalPrice = this.cart.reduce((total, item) => total + item.price * item.quantity, 0);
      },

      openSidebar() {
        document.getElementById("cart-sidebar").classList.add("active");
      },

      closeSidebar() {
        document.getElementById("cart-sidebar").classList.remove("active");
      },
    }));
  });
});
