
<?php
require_once('./../header.php'); ?>

<!-- Add CSS -->


<?php
require_once('./../content_layouts.php'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="float-end">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Trang chủ</li>
				</ol>
			</div>
		</div>
		<div class="container-fluid row">
			<div class="my-3">
				<p class="row">
				<h2 class="text-center">Quản trị viên của FUNNY</h2>
				</p>
			</div>
		</div>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid text-center">
			<div class="invoice p-3 mb-3">
				
				<!-- /.row -->
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-6 col-xl-6">
					<div class="card">
						<!-- <img src="..." class="card-img-top" alt="..."> -->
						<div class="card-body">
							<a href="./../admin" class="btn btn-primary">Quản lý Thành viên</a>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-6">
					<div class="card">
						<!-- <img src="..." class="card-img-top" alt="..."> -->
						<div class="card-body">
							<a href="./../user/index.php" class="btn btn-primary">Quản lý Khách hàng</a>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-6 mt-4">
					<div class="card">
						<!-- <img src="..." class="card-img-top" alt="..."> -->
						<div class="card-body">
							<a href="./../products/index.php" class="btn btn-primary">Quản lý Sản phẩm</a>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-6 mt-4">
					<div class="card">
						<!-- <img src="..." class="card-img-top" alt="..."> -->
						<div class="card-body">
							<a href="./../comments/index.php" class="btn btn-primary">Quản lý Đơn hàng</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<?php
require_once('./../footer.php'); ?>

<!-- Add Javascripts -->


</body>

</html>