
	<?php
    require('top.inc.php');
    isAdmin();



    if (isset($_GET['type']) && $_GET['type'] != '') {
        $type = get_safe_value($con, $_GET['type']);
        if ($type == 'paystatus') {
            $operation = get_safe_value($con, $_GET['operation']);
            $id = get_safe_value($con, $_GET['id']);
            if ($operation == 'unpaid') {
                $paystatus = '1';
            } else {
                $paystatus = '1';
            }
            $update_paystatus_sql = "update orders set paystatus='$paystatus' where id='$id'";
            mysqli_query($con, $update_paystatus_sql);
        }
        if ($type == 'orderstatus') {
            $operation = get_safe_value($con, $_GET['operation']);
            $id = get_safe_value($con, $_GET['id']);
            if ($operation == 'delivering') {
                $orderstatus = '1';
            } else {
                $orderstatus = '1';
            }
            $update_orderstatus_sql = "update orders set orderstatus='$orderstatus' where id='$id'";
            mysqli_query($con, $update_orderstatus_sql);
        }
        if ($type == 'delete') {
            $id = get_safe_value($con, $_GET['id']);
            $delete_sql = "delete from orders where id='$id'";
            mysqli_query($con, $delete_sql);
        }
    }
    $sql = "SELECT * from orders ";
    $res = mysqli_query($con, $sql);
    ?>
	<div class="content pb-0">
	    <div class="orders">
	        <div class="row">
	            <div class="col-xl-12">
	                <div class="card">
	                    <div class="card-body">
	                        <h4 class="box-title">ORDER </h4>

	                    </div>
	                    <div class="card-body--">
	                        <div class="table-stats order-table ov-h">
	                            <table class="table ">
	                                <thead>
	                                    <tr>
	                                        <th>ID</th>
	                                        <th>User Name</th>
	                                        <th>Product Name</th>
	                                        <th>Price</th>
	                                        <th>Quantity</th>
	                                        <th>Total</th>
	                                        <th>Address</th>
	                                        <th>Email</th>
	                                        <th>PhoneNumber</th>
	                                        <th>Status</th>
	                                    </tr>
	                                </thead>
	                                <tbody>

	                                    <?php
                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($res)) { ?>
	                                        <tr>
	                                            <td><?php echo $row['id'] ?></td>
	                                            <td><?php echo $row['username'] ?></td>
	                                            <td><?php echo $row['productname'] ?></td>
	                                            <td><?php echo $row['price'] ?></td>
	                                            <td><?php echo $row['quantity'] ?></td>
	                                            <td><?php echo $total = $row['price'] * $row['quantity'] ?></td>
												<td><?php echo $row['address'] ?></td>
												<td><?php echo $row['email'] ?></td>
												<td><?php echo $row['phonenumber'] ?></td>


	                                            <td>
	                                                <?php
                                                    //$row['paymethod']>=
                                                    //
                                                    if ($row['paystatus'] == 1) {
                                                        echo "<span class='badge badge-complete'><a href='?type=paystatus&operation=paid&id=" . $row['id'] . "'><b>Paid</b></a></span>&nbsp;";
                                                    } else {
                                                        echo "<span class='badge badge-pending'><a href='?type=paystatus&operation=unpaid&id=" . $row['id'] . "'><b>Unpaid</b></a></span>&nbsp;";
                                                    } //
                                                    if ($row['orderstatus'] == 1) {
                                                        echo "<span class='badge badge-complete'><a href='?type=orderstatus&operation=delivered&id=" . $row['id'] . "'><b>Delivered</b></a></span>&nbsp;";
                                                    } else {
                                                        echo "<span class='badge badge-pending'><a href='?type=orderstatus&operation=delivering&id=" . $row['id'] . "'><b>Delivering</b></a></span>&nbsp;";
                                                    }
													
                                                    echo " <br><br><span class='badge badge-delete'><a href='?type=delete&id=" . $row['id'] . "'>Delete</a></span>";
                                                    ?>
	                                            </td>
	                                        </tr>
	                                    <?php } ?>
	                                </tbody>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<?php
    require('footer.inc.php');
    ?>