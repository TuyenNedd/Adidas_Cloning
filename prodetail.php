<?
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>adidas</title>
  <link rel="shortcut icon" href="image/icon-adidas-logo.svg" />

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://css.gg/arrow-long-right.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <title>Document</title>
  <link rel="stylesheet" href="./css/detaildemo.css" />
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
          <div class="shopping-cart fnc-content">
            <button type="button">
              <a href="viewcard.php"><i class="ri-shopping-bag-line"></i></a>
            </button>
          </div>
          <div class="heart-like fnc-content">
            <button type="button">
              <a href="viewcard.php"><i class="ri-heart-2-line"></i></a>
            </button>
          </div>


        </div>
      </div>

    </div>
  </section>

  <div class="container">
    <div class="nav">
      <div class="nav-header">
        <div class="nav-menu">
          <span class="nav-titler">
            <i class="fa-thin fa-angles-left"></i>

            <a href=""> Back </a>
          </span>

          <a href="">Home</a>
          <span>/ <a href=""> Men</a></span>
          <span>/ <a href=""> Shoes</a></span>
        </div>
        <?php
        // Include config file
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "du_an1";
        // Kết nối database tintuc
        $link = mysqli_connect($servername, $username, $password, $dbname);
        $idsp = $_GET["id"];
        $sql = "SELECT productname,price,description,title,image FROM product where id='$idsp'"; //nhớ get id rồi where id='$id'

        if ($result = mysqli_query($link, $sql)) {
          if (mysqli_num_rows($result) > 0) {
            // Fetch the records
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $count = 1;
            foreach ($rows as $row) { ?>
              <div class="full-item">
                <div class="nav-overlay">
                  <div class="nav-img">
                    <img src="admin/imgproduct/<?= $row["image"] ?>" alt="" />
                  </div>


                  <!-- <div class="all-content">
                <div class="nav-img-item">
                  <img src="image/item1.webp" alt="" />
                  <img src="image/item2.webp" alt="" />
                  <img src="image/item3.webp" alt="" />
                  <img src="image/item4.webp" alt="" />
                </div>
              </div> -->
                </div>
                <div class="fixed-body" style="position: relative;">
                  <div class="all-body">
                    <div class="content">
                      <span>Running</span>
                      <div class="pre-header">
                        <button>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </button>
                      </div>
                    </div>
                    <div class="titler-detail">
                      <span><? ?></span>
                    </div>
                    <div class="titler-detail-item">
                      <span style="font-weight: 600"><?= $row['price'] ?> $</span>
                      <span>Aluminium / Zero Metalic / Magic Beige</span>
                    </div>
                    <div class="size">
                      <span>Sizes</span>
                      <div class="size-item">
                        <button>6.5UK</button>
                        <button>8.UK</button>
                        <button>10UK</button>
                        <button>10.5UK</button>
                        <button>10.5UK</button>
                        <button>11UK</button>
                        <button>12UK</button>
                        <button>13UK</button>
                      </div>
                      <div class="sl">
                        <button class="apast" onclick="decrease()">&#x257A;</button>
                        <input class="in" type="text" id="text" value="1">
                        <button class="right" onclick="increase()">&#10010;</button>
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
                      <div class="add-bag">
                        <div class="add-to-bag">
                          <button type="button" class="add-to-bag-item">
                            <a class="open" onclick="openFile()">Checkout
                              <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                              <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="loop" colors="primary:#FFFFFF" state="intro" style="width: 30px; height: 30px; margin-left: 15px">
                              </lord-icon>
                            </a>
                          </button>
                        </div>
                      </div>

                      <div class="sale">
                        <a href="">Black Friday Sale!</a>
                        <div class="sale-item">
                          <a href="">Not the right size or colour? Visit our returns page for
                            details.</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
      <div class="high">
        <a onclick="high()" class="high_item_a">Highlights</a>
      </div>
      <div class="high-item-all">
        <div class="high-item-overlay">
          <div class="high-item">
            <h5>3D printed 4DFWD midsole</h5>
            <div class="high-item-detail">
              <p>
                Compress forward, reducing braking forces and transforming
                impact energy into forward motion. For a smooth transition and
                a unique running experience.
              </p>
            </div>
          </div>
          <div class="high-item">
            <h5>3D printed 4DFWD midsole</h5>
            <div class="high-item-detail">
              <p>
                Compress forward, reducing braking forces and transforming
                impact energy into forward motion. For a smooth transition and
                a unique running experience.
              </p>
            </div>
          </div>
          <div class="high-item">
            <h5>3D printed 4DFWD midsole</h5>
            <div class="high-item-detail">
              <p>
                Compress forward, reducing braking forces and transforming
                impact energy into forward motion. For a smooth transition and
                a unique running experience.
              </p>
            </div>
          </div>
          <div class="high-item">
            <h5>3D printed 4DFWD midsole</h5>
            <div class="high-item-detail">
              <p>
                Compress forward, reducing braking forces and transforming
                impact energy into forward motion. For a smooth transition and
                a unique running experience.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="describe">
        <a onclick="describe()">Decription</a>
      </div>

      <div class="describe-item">
        <div class="describe-item-ovelay">
          <div class="describe-item-tittler">
            <h5><?= $row['title'] ?>.</h5>

            <p>
              <?= $row['description'] ?>
            </p>
          </div>
          <div class="describe-item-img">
            <img src="admin/imgproduct/<?= $row['image'] ?>" alt="" />
          </div>
        </div>
      </div>

      <div class="modal-detail">
        <div class="modal-detail-ovelay">
          <div class="modal-detail-body">
            <div class="modal-detail-header">
              <?
              $sql = "SELECT * FROM product where id=$idsp";
              ?>
              <div class="modal-detail-bodyhead">
                <div class="modal-detail-head">
                  <h5>Successfully added to bag!</h5>
                  <a class="close" onclick="closeFile()"><i>&#x2715;</i></a>
                </div>
                <div class="modal-deail-item">
                  <img src="admin/imgproduct/<?= $row['image'] ?>" alt="" />
                  <div class="modal-detail-box">
                    <h5><?= $row['productname'] ?></h5>

                    <span style="font-weight: 600"> <?= $row['price'] ?> $ </span>
                    <span>Colour: Cloud White / Cloud White / Bliss Blue</span>
                    <span>Quantily:1</span>
                  </div>
                  <div class="modal-btn-all">
                    <span>Your bag</span>
                    <div class="row-btn">
                      <span>1 item</span>
                      <span>Total Product Cost: <span><?= $row['price'] * 1 ?> $</span></span>

                      <span>Total Delivery Cost: <span>FREE</span></span>
                    </div>
                    <div class="view-bag">
                      <div class="view-bag-total">
                        <span>Total: <span><?= $row['price'] * 1 ?> $</span></span>
                      </div>
                      <span>(inclusive of tax)</span>
                      <div class="view-bag-btn">
                        <button style="display: none;" type="button" class="suff">
                          <?php
                          $conn = mysqli_connect('localhost', 'root', '', 'du_an1');
                          if (isset($_SESSION['isUser'])) {
                            // $nameuser = $_SESSION['isUser'];
                          }

                          $productid = $idsp;
                          if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                            $username = $_SESSION['isUser'];
                            $productname = $_POST['productname'];
                            $productimg = $_POST['productimg'];
                            $price = $_POST['price'];
                            $quantity = 1;
                            $productid = $idsp;
                            $orderstatus=0;
                            // $idproduct = $_POST['idsproduct'];
                            // $ttien = $soluong * $price;
                            $sql = "INSERT INTO orders ( username,productname,productimg,price,quantity,productid,orderstatus)VALUES ( '$username','$productname','$productimg','$price','$quantity','$productid','$orderstatus')";

                            if ($conn->query($sql) === true) {
                              header("location:demo.php?id=$idpro");
                            } else {
                              echo "Lỗi";
                            }
                          } ?>

                          <div class="view-bag-btn">

                            <button  type="button" class="suff">

                              <form action="" method="POST" enctype="multipart/form-data">
                                <style>
                                  .dele {
                                    font-size: 0px;
                                    border: none;
                                  }
                                </style>
                                <a href=""><input type="submit" name="addtocart" value="Add To Card" />
                                  <?
                                  $sql = "SELECT image,price,productname FROM product where id=$idsp" ?>
                                  <input type="text" name="productid" id="" value="<?= $idsp ?>" class="dele">
                                  <input type="text" name="productimg" id="" value="<?= $row["image"] ?>" class="dele">
                                  <input type="text" name="price" id="" value="<?php echo $row['price'] ?>" class="dele">
                                  <input type="text" name="productname" id="" value="<?php echo $row['productname'] ?>" class="dele">
                                  <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                                  <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="loop" colors="primary:#fff" state="intro" style="
                                  width: 30px;
                                  height: 30px;
                                  margin-left: 15px;
                                ">
                                  </lord-icon>
                                </a>
                              </form>
                            </button>
                            <div class="check-outs">
                              <button type="button" class="check-out">
                                <a href="viewcard.php">Checkout
                                  <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                                  <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="loop" colors="primary:#0000" state="intro" style="
                                    width: 30px;
                                    height: 30px;
                                    margin-left: 15px;
                                  ">
                                  </lord-icon>
                                </a>
                              </button>
                            </div>
                          </div>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="hr">
                  <hr />
                </div>
                <div class="view-more">
                  <span>These will match perfectly</span>
                </div>
                <div class="view-more-item-bag">
                  <?php
                  // Include config file
                  $sql = "SELECT id,image,productname FROM product where categories='bonus' ";

                  if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                      // Fetch the records
                      $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                      $count = 0;

                      foreach ($rows as $row) { ?>
                        <div class="view-more-item">
                          <a href="prodetail.php?id=<?= $row['id'] ?>">
                            <img src="admin/imgproduct/<?= $row['image'] ?>" alt="" />
                            <?= $row['productname'] ?></a>
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
              </div>
            </div>
          </div>
        </div>
        <div class="comment">
          <a onclick="cmt()">Review(831)</a>
        </div>
        <?php
              $connect = mysqli_connect('localhost', 'root', '', 'du_an1');
              $idpro = $idsp;

              if (isset($_SESSION['isUser'])) {
                $nameuser = $_SESSION['isUser'];
              }
              // $username = $_SESSION['isUser'];
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $comment = $_POST['comment'];
                //$idpro = $_POST['idsp'];
                $datecmt = date('Y-m-d H:i:s');
                $nameuser = $_SESSION['isUser'];



                $sql = "INSERT INTO comment ( nameuser,comment,idproduct,datecmt)VALUES ( '$nameuser','$comment','$idpro','$datecmt')";


                if ($connect->query($sql) === true) {
                } else {
                  echo "Lỗi";
                }

                $connect->close();
              } ?>
        <form action="" method="post" enctype="multipart/form-data">
          <?

          ?>
          <!-- ? if (!empty($_SESSION['isUser'])) { ?> -->
          <!-- echo 'Welcome back ' . $_SESSION['isUser']; -->
          <div class="comment-item">
            <span><?= $nameuser ?>:</span>
            <input type="text" name="comment" id="comment" placeholder="   Comment to here .." />
            <div class="conment-icon">
              <input type="submit" name="idsp" id="isp" value="Comment" placeholder="" />
            </div>
          </div>
          <!-- < }else{} ?> -->


          <!-- <div class="comment-item">
          <label for="">Ten ng dùng:<?= $username ?></label>
          <input type="text" name="comment" id="comment" placeholder="lỏ vc !">
          <input type="submit" name="idsp" id="isp" value="<?= $idsp ?>" placeholder="<?= $idsp ?>">
           <button type="submit"><i class="material-icons" style="font-size:30px"><a href="demo.php?id=<?= $idsp ?>">send</a></i> </i>
        </div> -->
        </form>

        <div class="review-form-item">
          <?php
              // Include config file
              $connect = mysqli_connect('localhost', 'root', '', 'du_an1');
              $idpro = $idsp;
              $sql = "SELECT nameuser,comment,datecmt FROM comment where idproduct='$idpro' and status=0";


              if ($result = mysqli_query($connect, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                  // Fetch the records

                  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                  foreach ($rows as $row) { ?>


                <div class="review-form">
                  <span class="name-review"><?= ucfirst($row['nameuser']) ?>.
                  </span>
                  <span class="name-review-2">
                    <?= $row['comment'] ?>
                  </span>
                  <span class="name-review-2">
                    <?= $row['datecmt'] ?>
                  </span>

                </div>

              <?php
                  }
                } else { ?>
              <tr>
                <td class="text-center text-danger fw-bold" colspan="9">This product has no reviews yet</td>
              </tr>
          <?php
                }
              } else {
                echo "<script>alert('Oops!Cmt Something went wrong. Please try again later.');</script>";
              }
              // Close conection 
              mysqli_close($connect);
          ?>
        </div>

      </div>'

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

<div class="detail-slideshow">
  <span> YOU MAY ALSO LIKE </span>
</div>
<section id="swipPage" class="carouSwip">
  <div class="carousel">
    <div class="carousel_content">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <?php
          // Include config file              
          $connect = mysqli_connect('localhost', 'root', '', 'du_an1');

          $sql = "SELECT id,image,productname,price FROM product  ";

          if ($result = mysqli_query($connect, $sql)) {
            if (mysqli_num_rows($result) > 0) {
              // Fetch the records
              $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
              $count = 0;

              foreach ($rows as $row) { ?>
                <div class="swiper-slide s1">
                  <div class="card-image">
                    <div class="wallpaperWrapper">
                      <div class="wall_container">
                        <a class="hockeycard-link">
                          <img src="/admin/imgproduct/<?= $row['image'] ?>" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="teaser_content">
                    <span class="teaser_title">
                      <strong class="str_title"><?= $row['productname'] ?></strong>
                    </span>
                    <p class="summary_teaser">
                      Go Grinch or go home with these Forum Lows. <?= $row['price'] ?> $
                    </p>
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
          mysqli_close($connect);
          ?>
        </div>

        <button class="swiper-button-next">
          <span class="next_icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="12" fill="none">
              <path fill="#000" fill-rule="evenodd" d="M20.175 7H0V5h20.175l-3.293-3.293L18.296.293 24.003 6l-5.707 5.707-1.414-1.414L20.175 7Z" clip-rule="evenodd" />
            </svg>
          </span>
        </button>

        <button class="swiper-button-prev">
          <span class="prev_icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="12" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.825 6.99997H25V4.99997H4.825L8.118 1.70697L6.704 0.292969L0.997 5.99997L6.704 11.707L8.118 10.293L4.825 6.99997Z" fill="#000" />
            </svg>
          </span>
        </button>
        <!-- <div class="swiper-pagination"></div> -->
      </div>
    </div>
  </div>
</section>

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
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script src="js/index.js"></script>
<script src="js/swiper.js"></script>
<script src="js/header.js"></script>
</body>

</html>