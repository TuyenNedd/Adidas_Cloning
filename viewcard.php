<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="css/viewcard.css" />

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="index.php" data-after="Home">
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
  <div class="container">
    <div class="order-syn">
      <div class="view-titel">
        <div class="view-name-tittel">
          <h2>YOUR BAG</h2>
          <div class="view-span">
            <span>TOTAL</span><br />
            <span>Items in your bag are not reserved — check out now to make them
              yours.
            </span>
            <img src="image/hoooooo.jpg" alt="" />
            <div class="view-position">
              <h3>GET YOUR HOLIDAY GIFTS ON TIME</h3>
              <span>Order by 19 Dec to receive your orders by 24 Dec!</span>
            </div>
          </div>
        </div>
        <div class="view-card-item">
          <?php
          // Include config file
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "du_an1";
          // Kết nối database tintuc
          $link = mysqli_connect($servername, $username, $password, $dbname);
          if (isset($_SESSION['isUser'])) {
            $username = $_SESSION['isUser'];
          }

          $sql = "SELECT * FROM orders where username='$username'";


          if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
              // Fetch the records
              $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
              $count = 1;
              foreach ($rows as $row) { ?>
                <div class="view-card-all">
                  <div class="view-item-img">
                    <img src="/admin/imgproduct/<?= $row['productimg'] ?>" alt="" />
                  </div>
                  <div class="view-item-detail-all">
                    <div class="view-card-detail">
                      <span><?= ucfirst($row['productname']) ?></span>
                      <span id="price"><?= $row['price'] ?></span>
                    </div><br>
                    <div class="view-item-flex">
                      <span>CLOUD WHITE / VIVID RED / CLOUD WHITE</span>
                      <div class="view-card-line">
                        <span>Size:12uk</span>
                      </div>
                      <span>low in stock</span>
                      <div class="sl"><br>
                        <style>
                          strong {
                            color: green;
                            font-size: 14px;
                          }

                          b {
                            color: red;
                            font-size: 14px;
                          }
                        </style>
                        <?php
                        if ($row['orderstatus'] == 1) {
                          echo " <strong>Orders Delivering</strong>";
                        } else {
                          echo "<b>Orders are waiting</b> ";
                        }
                        ?>
                        <!-- <button class="apast" onclick="decrease()">&#x257A;</button>
                        <input class="in" type="text" id="quantity" value="<?= $row['quantity'] ?>">
                        <button class="right" onclick="increase()">&#10010;</button> -->
                      </div>
                      <script>
                        function increase() {
                          var a = 1;
                          var textBox = document.getElementById("text");
                          textBox.value++;
                        }

                        function decrease() {
                          var textBox = document.getElementById("text");
                          textBox.value--;
                        }
                      </script>
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
          ?>


        </div>

      </div>
      <?php
      $connect = mysqli_connect('localhost', 'root', '', 'du_an1');
      if (isset($_SESSION['isUser'])) {
        $username = $_SESSION['isUser'];
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $paystatus = $_POST['paystatus'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $orderstatus = 1;
        $datepay = date('Y-m-d H:i:s');
        $sql = "update orders set username='$username',phonenumber='$phonenumber',address='$address',email='$email',datepay='$datepay',paystatus='$paystatus',orderstatus='$orderstatus' where username='$username' and paystatus=0";


        if ($connect->query($sql) == true) {

          header("index.php");
        } else {
          echo "Lỗi";
        }

        $connect->close();
      } ?>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="check-out-item">
          <div class="add-bag">
            <div class="add-to-bag">
              <button type="submit" name="submit" class="add-to-bag-item">
                <a class="open" onclick="openFile()"> Checkout
                  <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                  <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="loop" colors="primary:#FFFFFF" state="intro" style="width: 30px; height: 30px; margin-left: 15px">
                  </lord-icon>
                </a>
              </button>
            </div>
          </div>
          <div class="order-sumary-all">
            <div class="order-sumary">
              <h3>ORDER SUMMARY</h3>

              <div class="order-sumary-flex">
                <span id="quantity"><? count($row['quantity']) ?> item</span>
                <? $price = $row['price'] ?>
                <span id="price"><?= $row['price'] ?></span>
              </div>
              <div class="order-sumary-flex-two">
                <span>DELIVERY</span>
                <span>FREE</span>
              </div>
              <div class="order-sumary-flex-three">
                <span>TOTAL</span>
                <span>
                  <script>
                    function sum() {
                      let a = document.getElementById("price").value;
                      let b = document.getElementById("quantity").value;
                      let sum = parseInt(a) + b;

                      document.getElementById('result').innerHTML = sum;
                    }
                  </script>
                </span>
              </div>
              <div class="order-sumary-flex-free">
                <span>(inclusive of tax :0₫)</span>
              </div>
            </div>
          </div>
          <!-- <div class="flash-sale">
            <input class="flash-sale-input" type="text" placeholder="  Enter your promo code !" />
          </div> -->
          <div class="information">
            <div class="information-title">
              <h3>SHIPPING ADDRESS</h3>
            </div>

            <div class="information-item">
              <div class="information-item-one">
                <form>
                  <span><input type="text" name="username" id="" placeholder=" Username" value="<?= $row['username'] ?>" required />Enter First and Middle name</span>
                </form>
                <span><input type="email" name="email" id="" placeholder=" Email" value="<?= $row['email'] ?>" required />Example:Microsort@gmail.com</span>
                <span><input type="text" name="phonenumber" id="" placeholder=" Number phone" value="<?= $row['phonenumber'] ?>" required />
                  Example: 0912345678</span>
              </div>

              <span><input type="text" id="" placeholder=" Street number/street name" name="address" value="<?= $row['address'] ?>" required />
                Example: 33 Le Duan street,...
              </span>
            </div>
            <div class="button-information">
              <div class="button-infomation-name">
                <h3>payments</h3>
              </div>
              <div class="button-information-pay">
                <span><input class="lager" type="radio" name="paystatus" id="paystatus" value="0" required />ㅤPayment on delivery</span>
                <span><input class="lager" type="radio" name="paystatus" id="paystatus" value="1" required />ㅤPayment via visa card</span>
              </div>
            </div>
          </div>
        </div>
      </form>

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
  <script src="js/header.js"></script>

</body>

</html>
<? mysqli_close($link);
?>