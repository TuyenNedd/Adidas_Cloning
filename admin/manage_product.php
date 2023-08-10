<?php
require('top.inc.php');
$productname = '';
$price = '';
$quantity = '';
$title = '';
$description = '';
$image = '';
$categories='';
$msg = '';
if (isset($_GET['id']) && $_GET['id'] != '') {
    $image_required = '';
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "select * from product where id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $productname = $row['productname'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $title = $row['title'];
        $description = $row['description'];
        $image = $row['image'];
        $categories = $row['categories'];
    } else {
        header('location:product.php');
        die();
    }
}


if (isset($_POST['submit'])) {
    $productname = get_safe_value($con, $_POST['productname']);
    $price = get_safe_value($con, $_POST['price']);
    $quantity = get_safe_value($con, $_POST['quantity']);
    $title = get_safe_value($con, $_POST['title']);
    $description = get_safe_value($con, $_POST['description']);
    //$image=get_safe_value($con,$_POST['image']);
    $image = $_FILES['image']['name'];
    $linkup = "imgproduct/";
    move_uploaded_file($_FILES['image']['tmp_name'], $linkup . $image);
    $categories = get_safe_value($con, $_POST['categories']);



    //$id=get_safe_value($con,$_GET['id']);
    $res = mysqli_query($con, "select * from product where id='?'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $getData = mysqli_fetch_assoc($res);
            if ($id == $getData['id']) {
            } else {
                $msg = "PRODUCT ALREADY EXIST";
            }
        } else {
            $msg = "PRODUCT ALREADY EXIST";
        }
    }


    if ($msg == '') {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $update_sql = "update product set productname='$productname',price='$price',quantity='$quantity',title='$title',description='$description',image='$image',categories='$categories where id='$id'";
            mysqli_query($con, $update_sql);
        } else {
            mysqli_query($con, "insert into product(productname,quantity,price,title,description,image,categories) values('$productname','$quantity','$price','$title','$description','$image','$categories')");
        }
        header('location:product.php');
        die();
    }
    //$connect = mysqli_connect('localhost', 'root', '', 'du_an1');

    //if (isset($_POST['submit'])) {
    // $productname = get_safe_value($con, $_POST['productname']);
    //$quantity = get_safe_value($con, $_POST['quantity']);
    //$title = get_safe_value($con, $_POST['title']);
    // $price = get_safe_value($con, $_POST['price']);
    // $description = get_safe_value($con, $_POST['description']);
    //$categories = get_safe_value($con, $_POST['categories']);

    //  $res = mysqli_query($con, "INSERT INTO product(productname,price,quantity,title,description,image,categories) values('$productname','$price','$quantity','$description','$title','$categories')");

    //= mysqli_query($con, "select * from product ");

    //}
}
?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>PRODUCT FORM</strong><small> </small></div>
                    <form method="post" enctype="multipart/form-data">

                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="product" class=" form-control-label">Product</label>
                                <input type="text" name="productname" placeholder="Product name" id="productname" class="form-control" value="<?php echo $productname ?>" required>
                                <label for="" class=" form-control-label">Price</label>
                                <input type="text" name="price" id="price" placeholder="Price" class="form-control" value="<?php echo $price ?>" required>
                                <label for="" class=" form-control-label">Quantity</label>
                                <input type="text" name="quantity" id="quantity" placeholder="Quantity" class="form-control" value="<?php echo $quantity ?>" required>
                                <label for="" class=" form-control-label">Title</label>
                                <input type="text" name="title" id="title" placeholder="Title" class="form-control" value="<?php echo $title ?>" required>
                                <label for="" class=" form-control-label">Description</label>
                                <input type="text" name="description" id="description" placeholder="Description" class="form-control" value="<?php echo $description ?>" required>
                                <label for="" class=" form-control-label">Image</label><br>
                                <input type="file" name="image" id="image" value="image"><br>

                                

                                    <br><label for="" class=" form-control-label">Categories</label>
                                      <br>  
                                    <input type="radio" name="categories" id="type" value="man" >  Man
                                    <input type="radio" name="categories" id="type" value="woman">  Woman
                                    <input type="radio" name="categories" id="type" value="kid">  Kid
                                    <input type="radio" name="categories" id="type" value="bonus">  Bonus

                                
                                
                                

                                <!-- <select class="form-control" name="categories" id="categories" value="categories" required>
                                        <option value="1"  selected>SELECT CATEGORIES</option>

                                        <option value="1" >MAN</option>
                                        <option value="2" >WOMAN</option>
                                        <option value="3" >KID</option>
                                    </select> -->
                                <!-- <input type="checkbox" name="man" id="man" value="man">MAN
                                    <input type="checkbox" name="woman" id="woman" value="woman">WOMAN
                                    <input type="checkbox" name="kid" id="kid" value="kid">KID -->




                            </div>
                            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">SUBMIT</span>
                            </button>
                            <div class="field_error"></div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
require('footer.inc.php');
?>