const logo = document.querySelector(".logo").cloneNode(true);
document.querySelector(".logo-container").appendChild(logo);

// Fungsi untuk menambahkan event listener pada ikon keranjang (.bi-cart4)
function addCartIconListeners() {
  const cartIcons = document.querySelectorAll(".bi-cart4");
  cartIcons.forEach((icon) => {
    icon.addEventListener("click", openPopup);
  });
}

// Fungsi untuk menampilkan popup
function openPopup() {
  const popup = document.getElementById("popup");
  popup.style.display = "flex";
  quantity = 1; // Setel ulang jumlah ketika popup dibuka
  quantityDisplay.textContent = quantity;
}

// Inisialisasi untuk produk yang sudah ada
document.addEventListener("DOMContentLoaded", function () {
  // Mengambil elemen yang diperlukan
  const popup = document.getElementById("popup");
  const closeBtn = document.querySelector(".close-btn");
  const increaseBtn = document.getElementById("increase");
  const decreaseBtn = document.getElementById("decrease");
  const quantityDisplay = document.getElementById("quantity");
  const processBtn = document.getElementById("process-btn");

  let quantity = 1;

  // Menutup popup
  closeBtn.addEventListener("click", () => {
    popup.style.display = "none";
  });

  // Menambah jumlah item
  increaseBtn.addEventListener("click", () => {
    quantity++;
    quantityDisplay.textContent = quantity;
  });

  // Mengurangi jumlah item, minimum 1
  decreaseBtn.addEventListener("click", () => {
    if (quantity > 1) {
      quantity--;
      quantityDisplay.textContent = quantity;
    }
  });

  // Menutup popup ketika pengguna mengklik di luar konten popup
  window.addEventListener("click", (e) => {
    if (e.target === popup) {
      popup.style.display = "none";
    }
  });

  // Proses button untuk menampilkan alert jumlah item dan menutup popup
  processBtn.addEventListener("click", () => {
    alert(`Anda telah memasukkan ${quantity} item. Ke keranjang`);
    popup.style.display = "none"; // Menutup popup setelah diproses
  });

  // Tambahkan event listener pada ikon keranjang produk awal
  addCartIconListeners();
});

// Event untuk menambah produk baru
document.getElementById("load-more").addEventListener("click", function (event) {
  event.preventDefault(); // Menghindari reload halaman

  const additionalProducts = document.getElementById("additional-products");

  // Kartu produk tambahan
  const newProducts = `
      <div class="col-lg-3 col-md-6 col-12">
          <div class="card_product">
            <img class="card_product_img" src="img/baju_1.jpg" alt="Gambar" />
            <div class="card_product_info">
              <h1>Produk Baru 1</h1>
              <h3>Rp. 100.000</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <a href="#produk"><i class="bi bi-cart4"></i></a>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
          <div class="card_product">
            <img class="card_product_img" src="img/baju_1.jpg" alt="Gambar" />
            <div class="card_product_info">
              <h1>Produk Baru 1</h1>
              <h3>Rp. 100.000</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <a href="#produk"><i class="bi bi-cart4"></i></a>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
          <div class="card_product">
            <img class="card_product_img" src="img/baju_1.jpg" alt="Gambar" />
            <div class="card_product_info">
              <h1>Produk Baru 1</h1>
              <h3>Rp. 100.000</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <a href="#produk"><i class="bi bi-cart4"></i></a>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
          <div class="card_product">
            <img class="card_product_img" src="img/baju_1.jpg" alt="Gambar" />
            <div class="card_product_info">
              <h1>Produk Baru 1</h1>
              <h3>Rp. 100.000</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <a href="#produk"><i class="bi bi-cart4"></i></a>
            </div>
          </div>
      </div>
      <!-- Tambahkan lebih banyak produk sesuai kebutuhan -->
    `;

  // Tambahkan produk baru ke container additional-products
  additionalProducts.insertAdjacentHTML("beforeend", newProducts);

  // Tambahkan event listener pada ikon keranjang produk tambahan
  addCartIconListeners();
});

const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
});
