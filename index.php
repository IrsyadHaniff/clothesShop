<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- css icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--css-->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>
  <body>
    <!--Navbar area-->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">ClothesShop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-three-dots-vertical"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
          <a class="nav-link active" href="index.php">Home</a>
          <a class="nav-link" href="#produk_unggul">Unggulan</a>
          <a class="nav-link" href="#produk">Produk</a>
          <a class="nav-link" href="#profil">Profile</a>
          <i class="bi bi-cart-check"></i>
          </div>
        </div>
      </div>
    </nav>
    <!--Navbar end-->

    <main class="flex-shrink-0 container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Start Main -->
          <div class="app">
            <!-- Start Banner -->
            <header class="banner">
              <div class="container">
                <div class="row">
                  <div class="col-lg-7 col-md-7 col-12">
                    <p>Selamat Datang!</p>
                    <h1>Semua yang unik dan langka tersedia disini.</h1>
                    <a href="/produk" class="btn btn-primary">Produk Unggulan</a>
                  </div>
                </div>
              </div>
            </header>
            <!-- End Banner -->
            <section>
                <h1 class="section_title">Partner Brand</h1>
                <div class="logo-container">
                    <div id="logo" class="logo">
                        <img src="img/gucci.png" alt="logo-partner" srcset="">
                        <img src="img/rolex.png" alt="logo-partner" srcset="">
                        <img src="img/kenzo.png" alt="logo-partner" srcset="">
                        <img src="img/lacoste.png" alt="logo-partner" srcset="">
                        <img src="img/lv.png" alt="logo-partner" srcset="">
                        <img src="img/bsi.png" alt="logo-partner" srcset="">
                    </div>
                </div>
            </section>
            <!-- Start Products -->
            <section class="products" id="produk_unggul">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-12">
                    <h1 class="section_title">Produk <span>Unggulan</span></h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-12">
                    <div class="card_product">
                        <img class="card_product_img" src="img/produk/baju1.jpg" alt="Gambar" />
                        <div class="card_product_info">
                          <h1 x-text="items[0].name">Baju Expo</h1>
                          <h3 x-text="Rp. ${items[0].price}">Rp. 40000</h3>
                          <a href="#produk_unggul" @click.prevent="addToCart(items[0])">
                            <i class="bi bi-cart4"></i>
                          </a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                    <div class="card_product">
                        <img class="card_product_img" src="img/produk/baju1.jpg" alt="Gambar" />
                        <div class="card_product_info">
                          <h1 x-text="items[0].name">Baju Expo</h1>
                          <h3 x-text="Rp. ${items[0].price}">Rp. 40000</h3>
                          <a href="#produk_unggul" @click.prevent="addToCart(items[0])">
                            <i class="bi bi-cart4"></i>
                          </a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                    <div class="card_product">
                        <img class="card_product_img" src="img/produk/baju1.jpg" alt="Gambar" />
                        <div class="card_product_info">
                          <h1 x-text="items[0].name">Baju Expo</h1>
                          <h3 x-text="Rp. ${items[0].price}">Rp. 40000</h3>
                          <a href="#produk_unggul" @click.prevent="addToCart(items[0])">
                            <i class="bi bi-cart4"></i>
                          </a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                    <div class="card_product">
                        <img class="card_product_img" src="img/produk/baju1.jpg" alt="Gambar" />
                        <div class="card_product_info">
                          <h1 x-text="items[0].name">Baju Expo</h1>
                          <h3 x-text="Rp. ${items[0].price}">Rp. 40000</h3>
                          <a href="#produk_unggul" @click.prevent="addToCart(items[0])">
                            <i class="bi bi-cart4"></i>
                          </a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                    <div class="card_product">
                        <img class="card_product_img" src="img/produk/baju1.jpg" alt="Gambar" />
                        <div class="card_product_info">
                          <h1 x-text="items[0].name">Baju Expo</h1>
                          <h3 x-text="Rp. ${items[0].price}">Rp. 40000</h3>
                          <a href="#produk_unggul" @click.prevent="addToCart(items[0])">
                            <i class="bi bi-cart4"></i>
                          </a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                    <div class="card_product">
                        <img class="card_product_img" src="img/produk/baju1.jpg" alt="Gambar" />
                        <div class="card_product_info">
                          <h1 x-text="items[0].name">Baju Expo</h1>
                          <h3 x-text="Rp. ${items[0].price}">Rp. 40000</h3>
                          <a href="#produk_unggul" @click.prevent="addToCart(items[0])">
                            <i class="bi bi-cart4"></i>
                          </a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                    <div class="card_product">
                        <img class="card_product_img" src="img/produk/baju1.jpg" alt="Gambar" />
                        <div class="card_product_info">
                          <h1 x-text="items[0].name">Baju Expo</h1>
                          <h3 x-text="Rp. ${items[0].price}">Rp. 40000</h3>
                          <a href="#produk_unggul" @click.prevent="addToCart(items[0])">
                            <i class="bi bi-cart4"></i>
                          </a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                    <div class="card_product">
                        <img class="card_product_img" src="img/produk/baju1.jpg" alt="Gambar" />
                        <div class="card_product_info">
                          <h1 x-text="items[0].name">Baju Expo</h1>
                          <h3 x-text="Rp. ${items[0].price}">Rp. 40000</h3>
                          <a href="#produk_unggul" @click.prevent="addToCart(items[0])">
                            <i class="bi bi-cart4"></i>
                          </a>
                        </div>
                    </div>
                  </div>
                  <div id="additional-products" class="row"></div>
                  <div class="col-lg-12 col-md-12 col-12">
                    <div class="btn-bot" id="produk">
                      <a class="btn btn-primary" id="load-more" href="#">Semua produk</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Products -->
          </div>
          <!-- End Main-->

          <!-- Footer -->
          <footer class="footer" id="profil">
            <div class="container">
              <div class="row">
                <!-- profil -->
                <div class="col-md-6 biodata">
                  <h2>Profil</h2>
                  <p>ClothesShop menyediakan berbagai produk fashion unik dan langka yang berkualitas tinggi. Kami berkomitmen untuk memberikan pengalaman belanja terbaik kepada pelanggan kami.</p>
                </div>
                <!-- Hubungi Kami  -->
                <div class="col-md-6 contact">
                  <h2>Hubungi Kami</h2>
                  <div class="social-icons">
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="https://wa.me/62881025217141"><i class="bi bi-whatsapp"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-envelope-at"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </footer>

          <a href="#" class="to-top">
          <i class="bi bi-arrow-up-circle"></i>
          </a>

        </div>
      </div>
    </main>

    <div id="popup" class="popup-overlay">
  <div class="popup-content">
    <span class="close-btn">&times;</span>
    <p>Masukkan jumlah item:</p>
    <div class="quantity-control">
      <button id="decrease" class="quantity-btn">-</button>
      <span id="quantity">1</span>
      <button id="increase" class="quantity-btn">+</button>
    </div>
    <button id="process-btn" class="process-btn">Proses</button>
  </div>
</div>

<!-- Sidebar keranjang -->
<div id="cart-sidebar" class="cart-sidebar" x-data="shoppingCart">
  <div class="sidebar-header">
    <h2>Total Barang</h2>
    <span @click="closeSidebar" class="close-sidebar">&times;</span>
  </div>
  <div id="cart-items" class="cart-items">
    <template x-for="(item, index) in cart" :key="index">
      <div class="cart-item">
        <img :src="item.image" :alt="item.name">
        <div>
          <p x-text="item.name"></p>
          <p x-text="${item.quantity} x Rp. ${item.price}"></p>
        </div>
        <div>
          <span @click="removeFromCart(index)" class="trash-icon">&times;</span>
        </div>
      </div>
    </template>
  </div>
  <div class="cart-total">
    <h3>Total Harga: <span x-text="Rp. ${totalPrice}"></span></h3>
  </div>
</div>




    <!--js slider to start-->
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <script src="js/index.js"></script>
    <script src="js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>