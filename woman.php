<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/men.css" />
   
<link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>
  <body>
  <section id="header">
      <div class="header container">
        <div class="nav-bar">
          <div class="brand">
            <a href="" data-after="Home">
              <div class="logo">
                <img src="view/img/icon-adidas-logo.svg" />
              </div>
            </a>
          </div>
          <div class="nav-list">
            <div class="hamburger">
              <div class="bar"></div>
            </div>
            <ul>
              <li class="stand">
                <a href="men.php" data-after="Men">MEN</a>
              </li>
              <li>
                <a href="woman.php" data-after="Women">WOMEN</a>
              </li>
              <li><a href="kid.php" data-after="Kids">KIDS</a></li>
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
                <a href="./view/account/login.php"><i class="ri-user-line"></i></a>
              </button>

              <?php
              session_start();
              include('config.php');
              if (isset($_POST['username'])) {
                $_SESSION['isUser'] = $_POST['username'];
                extract($_POST['username']);
              ?>

                <div class="user-info hid">
                  <span class="user-name">Welcome back
                    <?php if (!empty($_SESSION['isUser'])) {
                      echo $_SESSION['isUser'];
                    } ?> </span>
                  <a href="./view/account/profile.php"><button <? include('./view/account/profile.php'); ?> type="button" class="my-profile">My Profile</button></a>
                  <button type="button" class="exit">Logout</button>
                </div>

              <?php
              } else {

              ?>
                <!-- <div class="user-info">
                  <span class="user-name">
                    <?php if (!empty($_SESSION['isUser'])) {
                      echo 'Welcome back ' . $_SESSION['isUser'];
                    } ?> </span>
                  <a href="./view/account/profile.php"><button type="button" class="my-profile">My Profile</button></a>
                  <a href="./view/account/logout.php"><button type="button" class="exit">Logout</button></a>
                </div> -->

                <!-- <div class="user-info">
                  <span class="user-name">
                    <?php if (!empty($_SESSION['isUser'])) {
                      echo 'Welcome back ' . $_SESSION['isUser'];
                    } ?> </span>
                  <a href="./view/account/profile.php"><button type="button" class="my-profile">My Profile</button></a>
                  <a href="./view/account/logout.php"><button type="button" class="exit">Logout</button></a>
                </div> -->

                <?php
                if (!empty($_SESSION['isUser'])) {
                  echo '<div class="user-info"><span class="user-name">Welcome back ' . $_SESSION['isUser'] . '</span>' . '<a href="./view/account/profile.php"><button type="button" class="my-profile">My Profile</button></a>
                  <a href="./view/account/logout.php"><button type="button" class="exit">Logout</button></a>
                </div>';
                }
                ?>
              <?php } ?>


              <!-- <div class="user-info">
                <span class="user-name">Welcome back <?= $username ?></span>
                <button type="button" class="my-profile">My Profile</button>
                <button type="button" class="exit">Logout</button>
              </div> -->
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
    <div class="contener">
      <div class="header">
        <div class="titler">
          <span class="back">
            <i class="fa-thin fa-angles-left"></i>

            <a href=""> Back </a>
          </span>

          <a href="">Home</a>
          <span>/ <a href=""> Men</a></span>
          <span>/ <a href=""> Shoes</a></span>
          <div class="name">
            <span>MEN'S SHOES & SNEAKERS<span class="smal">[752]</span></span>
          </div>
        </div>
        <div class="all">
          <div class="all-flex">
            <a href="">All Men's Shoes</a>
            <a href="">Footbal</a>
            <a href="">Basekeball</a>
            <a href=""> Running</a>
            <a href="">Training</a>
            <a href="">Slides</a>
            <a href="">Original</a>
            <a href="">Tenis</a>
          </div>

          <div class="bnt">
            <button>
              <a onclick="openFilter()">Filter & Sort</a>
            </button>
          </div>
        </div>
        <div class="modal">
          <div class="modal_overlay">
            <div class="modal_body">
              <div class="modal__inner">
                <div class="modal__header">
                  <div class="modal__head">
                    <h5>Filter & Sort</h5>
                    <span
                      ><a onclick="closeFilter()" class="close"
                        >Clear All <i>&#x2715;</i></a
                      ></span
                    >
                  </div>

                  <hr class="hrr" />

                  <div class="applied">
                    <span>Applied filters</span>
                    <div class="app_find">
                      <span><i>&#x2715;</i> <a href=""> Men</a></span>
                      <span><i>&#x2715;</i> <a href=""> Clothing</a></span>
                      <span><i>&#x2715;</i> <a href=""> Shoes</a></span>
                    </div>
                  </div>
                  <hr class="hrr" />

                  <div class="sort">
                    <ul>
                      <li>
                        <a class="by">Sort By</a>

                        <ul class="sort_item">
                          <li><a href="">Price (low - high)</a></li>
                          <li><a href=""> Newest</a></li>
                          <li><a href=""> Price (high - low)</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="division">
                    <ul>
                      <li>
                        <a class="division_click">DIVISION</a>

                        <ul class="sort_item-divi">
                          <li>
                            <input class="check" type="checkbox" />Clothing
                            <i>[752]</i>
                          </li>
                          <li>
                            <input class="check" type="checkbox" />Shoes
                            <i>[759]</i>
                          </li>
                          <li>
                            <input
                              class="check"
                              type="checkbox"
                              name=""
                              id=""
                            />Accessories<i>[348]</i>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="sport">
                    <ul>
                      <li>
                        <a class="sport_click">SPORT</a>

                        <ul class="sort_item-sport">
                          <li>
                            <input class="check" type="checkbox" />Lifestyle
                            <i>[864]</i>
                          </li>
                          <li>
                            <input class="check" type="checkbox" />Running
                            <i>[759]</i>
                          </li>
                          <li>
                            <input
                              class="check"
                              type="checkbox"
                              name=""
                              id=""
                            />Golf<i>[348]</i>
                          </li>
                          <li>
                            <input class="check" type="checkbox" />Training
                            <i>[864]</i>
                          </li>
                          <li>
                            <input class="check" type="checkbox" />Basketball
                            <i>[864]</i>
                          </li>
                          <li>
                            <input class="check" type="checkbox" />Tennis
                            <i>[864]</i>
                          </li>
                          <li>
                            <input class="check" type="checkbox" />Skateboarding
                            <i>[864]</i>
                          </li>
                          <li>
                            <input class="check" type="checkbox" />Others<i
                              >[864]</i
                            >
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="product">
                    <ul>
                      <li>
                        <a class="product_click">Product Type</a>

                        <ul class="sort_item-type">
                          <li>
                            <input class="check" type="checkbox" />Sneakers
                            <i>[864]</i>
                          </li>
                          <li>
                            <input class="check" type="checkbox" />Football
                            Boots
                            <i>[59]</i>
                          </li>
                          <li>
                            <input
                              class="check"
                              type="checkbox"
                              name=""
                              id=""
                            />Slides & Flip Flops<i>[248]</i>
                          </li>
                          <li>
                            <input class="check" type="checkbox" />Other Sports
                            Shoes
                            <i>[864]</i>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="brand">
                    <ul>
                      <li>
                        <a class="brand_click">brand</a>

                        <ul class="sort_item-brand">
                          <li>
                            <input class="check" type="checkbox" />Performance
                            <i>[564]</i>
                          </li>
                          <li>
                            <input class="check" type="checkbox" />Originals
                            <i>[59]</i>
                          </li>
                          <li>
                            <input
                              class="check"
                              type="checkbox"
                              name=""
                              id=""
                            />Sportswear<i>[248]</i>
                          </li>
                          <li>
                            <input class="check" type="checkbox" />Sport
                            Inspired
                            <i>[224]</i>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="color">
                    <ul>
                      <li>
                        <a class="color_click">Color</a>
                        <ul class="checkb">
                          <li>
                            <input class="" type="checkbox" />
                          </li>
                          <li>
                            <input class="" type="checkbox" />
                          </li>
                          <li>
                            <input class="" type="checkbox" />
                          </li>
                          <li>
                            <input class="" type="checkbox" />
                          </li>
                          <li>
                            <input class="" type="checkbox" />
                          </li>
                          <li>
                            <input class="" type="checkbox" />
                          </li>
                          <li>
                            <input class="" type="checkbox" />
                          </li>
                          <li>
                            <input class="" type="checkbox" />
                          </li>
                          <li>
                            <input class="" type="checkbox" />
                          </li>
                          <li>
                            <input class="" type="checkbox" />
                          </li>
                          <li>
                            <input class="" type="checkbox" />
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="collection">
                    <ul>
                      <li>
                        <a class="collection_click">Collection</a>

                        <ul class="sort_item-collec">
                          <li>
                            <span>Originals</span>
                            <i>[564]</i>
                          </li>
                          <li>
                            <span>Ultraboost</span>
                            <i>[59]</i>
                          </li>
                          <li><span> Sportswear</span><i>[248]</i></li>
                          <li>
                            <span>Ultraboost</span>
                            <i>[224]</i>
                          </li>
                          <li><span>Superstar</span><i>[52]</i></li>
                          <li><span>Retropy</span><i>[150]</i></li>
                          <li><span>Supernova</span><i>[230]</i></li>
                          <li><span>Swift</span><i>[30]</i></li>
                          <li><span>Campus</span><i>[30]</i></li>
                          <li><span>Alpha</span><i>[230]</i></li>
                          <li><span>Rebelcross</span><i>[230]</i></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="panel">
                    <button>Apply (786)</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item-all">
          
        <?php
      // Include config file
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "du_an1";
      // Kết nối database tintuc
      $link = mysqli_connect($servername, $username, $password, $dbname);
      $sql = "SELECT id,productname,price,description,image FROM product where categories='woman'";

      if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          // Fetch the records
          $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
          $count = 1;
          foreach ($rows as $row) { ?>
          
            <div class="box_item">
              <a href="prodetail.php?id=<?= $row["id"] ?>">
                <img src="admin/imgproduct/<?= $row["image"] ?>" alt="">
              </a>
              <div class="item-hov">
              </div>
              <div class="money">
                <?= $row["price"] ?>
              </div>
              <div class="box-item-text">
                <a href="">
                  <?= $row["productname"] ?>
                </a>
                <div class="box-item-gray">
                  <a href="" ><?= $row["description"] ?></a>
                  <a href="">2 colours <span>new</span></a>
                </div>


              </div>

            </div>
          <?php
          }
        } else { ?>
          <tr>
            <td class="text-center text-danger fw-bold" colspan="9">* No Record Found *</td>
          </tr>
      <?php
        }
      } else {
        echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
      }
      // Close conection 
      mysqli_close($link);
      ?>
        </div>
        <div class="list">
          <h5>Our clothing and shoe categories</h5>
          <div class="list-item">
            <div class="list-item-row">
              <ul>
                <li>  <span>mens adidas</span></li>
                <li><span>mens backpacks</span></li>
                <li><span>mens bags</span></li>
                <li><span>mens black shoes</span></li>
                <li><span>mens clothing</span></li>
                <li><span>mens football shoes</span></li>
               </ul>
            </div>
            <div class="list-item-row">
              <ul>
                <li>  <span>mens adidas</span></li>
                <li><span>mens backpacks</span></li>
                <li><span>mens bags</span></li>
                <li><span>mens black shoes</span></li>
                <li><span>mens clothing</span></li>
                <li><span>mens football shoes</span></li>
               </ul>
            </div>
            <div class="list-item-row">
              <ul>
                <li>  <span>mens adidas</span></li>
                <li><span>mens backpacks</span></li>
                <li><span>mens bags</span></li>
                <li><span>mens black shoes</span></li>
                <li><span>mens clothing</span></li>
                <li><span>mens football shoes</span></li>
               </ul>
            </div>
            <div class="list-item-row">
              <ul>
                <li>  <span>mens adidas</span></li>
                <li><span>mens backpacks</span></li>
                <li><span>mens bags</span></li>
                <li><span>mens black shoes</span></li>
                <li><span>mens clothing</span></li>
                <li><span>mens football shoes</span></li>
               </ul>
            </div>
            <div class="list-item-row">
              <ul>
                <li>  <span>mens adidas</span></li>
                <li><span>mens backpacks</span></li>
                <li><span>mens bags</span></li>
                <li><span>mens black shoes</span></li>
                <li><span>mens clothing</span></li>
                <li><span>mens football shoes</span></li>
               </ul>
            </div>
            <div class="list-item-row">
              <ul>
                <li>  <span>mens adidas</span></li>
                <li><span>mens backpacks</span></li>
                <li><span>mens bags</span></li>
                <li><span>mens black shoes</span></li>
                <li><span>mens clothing</span></li>
                <li><span>mens football shoes</span></li>
               </ul>
            </div>
            

          
          </div>
        </div>
      </div>
    </div>
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
    <script src="./js/index.js"></script>
    <script src="js/header.js"></script>
  </body>
</html>
