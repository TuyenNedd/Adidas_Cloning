<?

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://css.gg/arrow-long-right.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <title>Document</title>
  <link rel="stylesheet" href="/css/detail.css" />
</head>

<body>
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
                    <img src="image/<?= $row["image"] ?>" alt="" />
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

                    <span><?= $row["productname"] ?></span>
                  </div>
                  <div class="titler-detail-item">
                    <span style="font-weight: 600"><?= $row["price"] ?></span>
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
                    <div class="add-bag">
                      <div class="add-to-bag">
                        <button type="button" class="add-to-bag-item">
                          <a class="open" onclick="openFile()">Checkout
                            <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="loop" colors="primary:#FFFFFF" state="intro" style="
                            width: 30px;
                            height: 30px;
                            margin-left: 15px;
                          ">
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
            <h5><?= $row["title"] ?></h5>

            <p>
              <?= $row["description"] ?>
            </p>
          </div>
          <div class="describe-item-img">
            <img src="image/<?= $row["image"] ?>" alt="" />
          </div>
        </div>
      </div>

      <div class="modal-detail">
        <div class="modal-detail-ovelay">
          <div class="modal-detail-body">
            <div class="modal-detail-header">
              <div class="modal-detail-bodyhead">
                <?
                $idsp = $_GET["id"];
                $sql = "SELECT image,productname,price,description,title,image FROM product where id='$idsp'"; //nhớ get id rồi where id='$id'

                ?>
                <div class="modal-detail-head">
                  <h5>Successfully added to bag!</h5>
                  <a class="close" onclick="closeFile()"><i>&#x2715;</i></a>
                </div>
                <div class="modal-deail-item">
                  <img src="/image/<?= $row["image"] ?>" alt="" />
                  <div class="modal-detail-box">
                    <style>

                    </style>
                    <h5><?= $row["productname"] ?></h5>

                    <span style="font-weight: 600"> <?= $row["price"] ?> </span>
                    <span>Colour: Cloud White / Cloud White / Bliss Blue</span>
                    <span>Quantily:1</span>
                  </div>
                  <div class="modal-btn-all">
                    <span>Your bag</span>
                    <div class="row-btn">
                      <span>1 item</span>
                      <span>Total Product Cost: <span><?= $row["price"] ?></span></span>

                      <span>Total Delivery Cost: <span>FREE</span></span>
                    </div>
                    <div class="view-bag">
                      <div class="view-bag-total">
                        <span>Total: <span><?= $row["price"] * 1 ?></span></span>
                      </div>
                      <span>(inclusive of tax)</span>
                      <?php
                      $conn = mysqli_connect('localhost', 'root', '', 'du_an1');
                      // $sql = "SELECT price,quantity FROM product";
                      $idproduct = $idsp;
                      if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                        // $id = $_POST['id'];
                        $username = 'trungngu';
                        // $img = $_POST['img'];
                        $productname = $_POST['productname'];
                        $productimg = $_POST['productimg'];
                        $price = $_POST['price'];
                        $productid = $idsp;
                        // $idproduct = $_POST['idsproduct'];
                        // $ttien = $soluong * $price;
                        $sql = "INSERT INTO orders ( username,productname,productimg,price,productid)VALUES ( '$username','$productname','$productimg','$price','$productid')";

                        if ($conn->query($sql) === true) {
                          header("location:demo.php?id=$idpro");
                        } else {
                          echo "Lỗi";
                        }
                        $conn->close();
                      } ?>

                      <div class="view-bag-btn">

                        <button type="button" class="suff">
                          <style>
                            .dele {
                              font-size: 0px;
                            }
                          </style>
                          <form action="men.php" method="post" enctype="multipart/form-data">
                            <input type="submit" name="addtocart" id="" value="Add to cart">
                            <input type="text" name="productid" id="" value="<?= $idsp ?>" class="dele" disabled>
                            <input type="text" name="productimg" id="" value="<?= $row["image"] ?>" class="dele" disabled>
                            <input type="text" name="price" id="" value="<?php echo $row['price'] ?>" class="dele" disabled>
                            <input type="text" name="productname" id="" value="<?php echo $row['productname'] ?>" class="dele" disabled>

                            <a href="">View Bag
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
                            <a href="#">Checkout
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
                    </div>
                  </div>
                </div>
              </div>
              <div class="hr">
                <hr />
              </div>
              <div class="view-more">
                <span>Top Sale</span>
              </div>
              <div class="view-more-item-bag">
                <?php
                // Include config file
                $iditem = 996;
                $sql = "SELECT image,productname FROM product where categories='bonus' ";

                if ($result = mysqli_query($link, $sql)) {
                  if (mysqli_num_rows($result) > 0) {
                    // Fetch the records
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $count = 0;

                    foreach ($rows as $row) { ?>

                      <div class="view-more-item">
                        <a href="demo.php?id=<?= $idsp ?>">
                          <img src="image/<?= $row["image"] ?>" alt="" /></a>
                        <a href=""><?= $row["productname"] ?></a>
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
                <!-- <div class="view-more-item">
                  <a href="">
                    <img src="image/5f9eeba77f3a4ac59cf1aca60117e80a_9366.webp" alt="" /></a>
                  <a href=""> Low-Cut Socks 3 Pairs</a>
                </div>
                <div class="view-more-item">
                  <a href="">
                    <img src="image/5f9eeba77f3a4ac59cf1aca60117e80a_9366.webp" alt="" /></a>
                  <a href=""> Low-Cut Socks 3 Pairs</a>
                </div>
                <div class="view-more-item">
                  <a href="">
                    <img src="image/5f9eeba77f3a4ac59cf1aca60117e80a_9366.webp" alt="" /></a>
                  <a href=""> Low-Cut Socks 3 Pairs</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="comment">
        <a onclick="cmt()">Review(831)</a>


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

<div class="row mb">
  <?php
  $connect = mysqli_connect('localhost', 'root', '', 'du_an1');
  $idpro = $idsp;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameuser = 'trungngu';
    $comment = $_POST['comment'];
    $idpro = $_POST['idsp'];
    $datecmt = date('Y-m-d H:i:s');


    $sql = "INSERT INTO comment ( nameuser,comment,idproduct,datecmt)VALUES ( '$nameuser','$comment','$idpro','$datecmt')";


    if ($connect->query($sql) === true) {

      header("location:demo.php?id=$idpro");
    } else {
      echo "Lỗi";
    }

    $connect->close();
  } ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

    <div class="comment-item">
      <!-- </a> -->
      <label for="">Ten ng dùng:<?= $username ?></label>
      <input type="text" name="comment" id="comment" placeholder="lỏ vc !">
      <input type="submit" name="idsp" id="isp" value="<?= $idpro ?>" placeholder="<?= $idpro ?>" <i class="material-icons" style="font-size:30px"><a href="demo.php?id=<?= $idsp ?>">send</a></i>>
      <!-- <button type="submit"><i class="material-icons" style="font-size:30px"><a href="demo.php?id=<?= $idsp ?>">send</a></i> </i> -->
      </button>
    </div>
  </form>
  <div class="boxcontent2 comment ">
    <table>
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

            <div class="box-item-text">
              <b><br>
                <div class="review-form-item">
                  <div class="review-form">
                    <span class="name-review"><?= $row['nameuser'] ?>
                    </span>
                    <span class="name-review-2">
                      <?= $row['comment'] ?>
                    </span>
                    <span class="name-review-2">
                      <?= $row['datecmt'] ?>
                    </span>
                  </div>

                </div>
              </b>

            </div>

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
</table>
</div>


    </div>
  </div>
  <script src="js/index.js"></script>
</body>

</html>