<?php
require('top.inc.php');
isAdmin();



if (isset($_GET['type']) && $_GET['type'] != '') {
	$type = get_safe_value($con, $_GET['type']);
	if ($type == 'status') {
		$operation = get_safe_value($con, $_GET['operation']);
		$id = get_safe_value($con, $_GET['id']);
		if ($operation == 'active') {
			$status = '0';
		} else {
			$status = '1';
		}
		$update_status_sql = "update comment set status='$status' where id='$id'";
		mysqli_query($con, $update_status_sql);
	}

	if ($type == 'delete') {
		$id = get_safe_value($con, $_GET['id']);
		$delete_sql = "delete from comment where id='$id'";
		mysqli_query($con, $delete_sql);
	}
}
$sql = "select * from comment order by id desc";
$res = mysqli_query($con, $sql);
?>
<div class="content pb-0">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">COMMENT </h4>

					</div>
					<div class="card-body--">
						<div class="table-stats order-table ov-h">
							<table class="table ">
								<thead>
									<tr>
										<th>ID</th>
										<th>User Name</th>
										<th>ID Product</th>

										<th>Comment</th>
										<th>Date Comment</th>
										<th>Active</th>
									</tr>
								</thead>
								<tbody>

									<?php
									$i = 1;
									while ($row = mysqli_fetch_assoc($res)) { ?>
										<tr>
											<td><?php echo $row['id'] ?></td>
											<td><?php echo $row['nameuser'] ?></td>
											<td><?php echo $row['idproduct'] ?></td>
											<td><?php echo $row['comment'] ?></td>
											<td><?php echo $row['datecmt'] ?></td>

											<td>
												<?php
												if ($row['status'] == 0) {
													echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=" . $row['id'] . "'>Active</a></span>&nbsp;";
												} else {
													echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=" . $row['id'] . "'>Deactive</a></span>&nbsp;";
												}

												echo "<span class='badge badge-delete'><a href='?type=delete&id=" . $row['id'] . "'>Delete</a></span>";
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