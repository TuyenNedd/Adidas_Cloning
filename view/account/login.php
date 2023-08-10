<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>adidas</title>
  <link rel="shortcut icon" href="../img/icon-adidas-logo.svg" />

  <link rel="stylesheet" type="text/css" href="../css/index.min.css" />

  <!-- Link Remixi Icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <!--End Link Remixi Icon -->
</head>

<body>
  <main>
    <section id="header">
      <div class="header container">
        <div class="nav-bar">
          <div class="brand">
            <a href="../../index.php" data-after="Home">
              <div class="logo">
                <img src="../img/icon-adidas-logo.svg" />
              </div>
            </a>
          </div>
          <div class="nav-list">
            <div class="hamburger">
              <div class="bar"></div>
            </div>
            <ul>
              <li class="stand">
                <a href="" data-after="Men">MEN</a>
              </li>
              <li>
                <a href="" data-after="Women">WOMEN</a>
              </li>
              <li><a href="" data-after="Kids">KIDS</a></li>
              <li><a href="" data-after="Sports">SPORTS</a></li>
              <li><a href="" data-after="Brands">BRANDS</a></li>
              <li><a href="" data-after="Release date">RELEASE DATES</a></li>
              <li><a href="" data-after="Outlet">OUTLET</a></li>
            </ul>
          </div>
        </div>

        <div class="function">
          <div class="box">
            <input type="checkbox" id="check" />
            <div class="search-box">
              <input type="text" placeholder="Search" />
              <label for="check" class="icon">
                <i class="fas fa-search"></i>
              </label>
            </div>
          </div>
          <div class="user">
            <div class="user-login fnc-content">
              <button type="button">
                <a href="#"><i class="ri-user-line"></i></a>
              </button>
            </div>
            <div class="heart-like fnc-content">
              <button type="button">
                <a href="#"><i class="ri-heart-2-line"></i></a>
              </button>
            </div>
            <div class="shopping-cart fnc-content">
              <button type="button">
                <a href="#"><i class="ri-shopping-bag-line"></i></a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="account_login">

      <?php
      include('signin.php');
      include('signup.php');
      ?>


    </section>
  </main>

  <!-- --------------------Footer------------------------- -->
  <footer class="footer">
    <div class="footer-interactive">
      <div class="footer_newsletter">
        <div class="wrapper row">
          <div class="left_content">
            <h4 class="heading_letter">BECOME A MEMBER & GET 15% OFF</h4>
          </div>
          <div class="right_content">
            <div>
              <button type="button" class="suff">
                <a href="./login.php">SIGN UP FOR FREE
                  <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                  <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="loop" colors="primary:#fff" state="intro" style="width: 30px; height: 30px; margin-left: 15px">
                  </lord-icon>
                </a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_top">
      <div class="footer_container">
        <div class="footer_main">
          <ul class="footer_group">
            <li class="footer_link headline">
              <a href="" class="footer_link-item">PRODUCTS</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Shoes</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Clothing</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Accessories</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">New Arrivals</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Release Date</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Top Seller</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">adidas Exclusive</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Outlet</a>
            </li>
          </ul>
          <ul class="footer_group">
            <li class="footer_link headline">
              <a href="" class="footer_link-item">SPORTS</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Running</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Golf</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Gym & Training</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Football</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Basketball</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Tennis</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Outdoor</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Swimming</a>
            </li>
          </ul>
          <ul class="footer_group">
            <li class="footer_link headline">
              <a href="" class="footer_link-item">COLLECTIONS</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">IVY PARK</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Pharrell Williams</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Ultraboost</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Pureboost</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Predator</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">X</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Copa</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Continental 80</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Superstar</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Stan Smith</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">nmd</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">ZX</a>
            </li>
          </ul>
          <ul class="footer_group">
            <li class="footer_link headline">
              <a href="" class="footer_link-item">COMPANY INFO</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">About Us</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Careers</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Press</a>
            </li>
          </ul>
          <ul class="footer_group">
            <li class="footer_link headline">
              <a href="" class="footer_link-item">SUPPORT</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Help & Customer</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Service</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Store Locator</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Size Charts</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Payment</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Delivery</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Returns & Refunds</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Promotions</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">Sitemap</a>
            </li>
          </ul>
          <ul class="footer_group">
            <li class="footer_link headline">
              <a href="" class="footer_link-item">FOLLOW US</a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">
                <ion-icon name="logo-tiktok"></ion-icon>
              </a>
            </li>
            <li class="footer_link">
              <a href="" class="footer_link-item">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <div class="footer_container">
        <ol class="footer_legal">
          <li class="legal_item">
            <a href="" class="legal_link">Privacy Policy</a>
          </li>
          <li class="legal_item">
            <a href="" class="legal_link">Terms and Conditions</a>
          </li>
          <li class="legal_item">
            <a href="" class="legal_link">Imprint</a>
          </li>
          <li class="legal_item last_item">
            <a href="" class="legal_link">© 2020 adidas Vietnam Company Limited</a>
          </li>
        </ol>
      </div>
    </div>
  </footer>
  <!-- --------------------End Footer--------------------- -->
  <script async src="../js/index.js"></script>
</body>

</html>