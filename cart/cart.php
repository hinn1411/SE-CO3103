<?php
    include_once './../connect.php';
    include_once './../navbar.php';
    session_start();
    $_SESSION['tot'] = 0;
?>
    <main>
        <div class="row" style="margin-top:5%; margin-bottom: 15%;">
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="fs-2">Trang Chủ/ Giỏ Hàng</div>
                <div class="fs-3">Giỏ Hàng Của Bạn</div>
                <hr>
                <div class="row text-start">
                    <div class="col-md-5">Sản Phẩm</div>
                    <div class="col-md-4 text-center">Số Lượng</div>
                    <div class="col-md-3 text-start">Thành Tiền</div>
                </div>
                <!-- <div class="row text-start align-items-center" style="margin-top:2.5%;">
                    <div class="col-md-5">
                        <div class="row align-items-center">
                            <img src="./../img/F-005.webp" class="col-md-3 img-fluid" alt="Ảnh áo thun cá sấu">
                            <div class="col-md-9 row">
                                <div>Áo cá sấu lên bờ</div>
                                <div>200.000đ</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <button class="btn btn-block btn-outline-dark btn-sm">-</button>
                        <button class="btn btn-block btn-outline-dark btn-sm">1</button>
                        <button class="btn btn-block btn-outline-dark btn-sm">+</button>
                    </div>
                    <div class="col-md-3 text-start">200.000đ</div>
                </div> -->
                <?php
                    if(isset($_SESSION['cart'])) {
                        foreach($_SESSION['cart'] as $key => $value) {
                            $_SESSION['tot'] += $value['price'] * $value['quantity'];
                ?>
                <div class="row text-start align-items-center" style="margin-top:2.5%;">
                    <div class="col-md-5">
                        <div class="row align-items-center">
                            <img src="<?php echo $value['image']; ?>" class="col-md-3 img-fluid" alt="Ảnh áo thun cá sấu">
                            <div class="col-md-9 row">
                                <div><?php echo $value['name']; ?></div>
                                <div><?php echo number_format($value['price'], 0, '.', ','); ?> đ</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <button class="btn btn-block btn-outline-dark btn-sm w-25"
                        onclick="minus(<?php echo $key; ?>)">-</button>
                        <input type="text" class="btn btn-block btn-outline-dark btn-sm w-25"
                        value="<?php echo $value['quantity']; ?>"
                        id="quantity_<?php echo $key; ?>" name="quantity_<?php echo $key; ?>"
                        onblur="updateCart(<?php echo $key; ?>)">
                        <button class="btn btn-block btn-outline-dark btn-sm w-25"
                        onclick="plus(<?php echo $key; ?>)">+</button>
                    </div>
                    <div class="col-md-3 text-start"><?php echo number_format($value['quantity'] * $value['price'], 0, '.', ','); ?> đ</div>
                </div>                    
                <?php
                        }
                    }
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2" style="margin-top: 3.25%;">
                <div class="fs-3">Thông Tin Đơn Hàng</div>
                <hr>
                <div class="row">
                    <div class="col fs-4">Tổng Tiền</div>
                    <div class="col orange" id="tot"><?php echo number_format($_SESSION['tot'], 0, '.', ',') ?> đ</div>
                </div>
                <hr>
                <a href="./../cart/checkout.php"><button id="buy" type="button" class="container btn btn-dark text-white orange">Mua</button></a>
            </div>
            <div class="col-md-2"></div>
        </div>
    </main>
    <script>
        function check() {
            let tot = document.getElementById('tot');
            if (tot == "0 đ") {
                document.getElementById('buy').disable = true;
            }
        }
        check();
        function minus(id) {
            let num = parseInt($("#quantity_" + id).val());
            Update_Delete(id, num - 1);
        }

        function plus(id) {
            let num = parseInt($("#quantity_" + id).val());
            Update_Delete(id, num + 1);
        }

        function updateCart(id) {
            let num = parseInt($("#quantity_" + id).val());
            Update_Delete(id, num);
        }

        function Update_Delete(id, num) {
            $.post("./../cart/updateCart.php", {'id': id, 'number': num}, function() {
                location.reload();
            });
        }
    </script>               
<?php
  if(isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
    echo $username;
  }
?>
<?php
    // print_r($_SESSION['cart']);
    include_once './../footer.php';
    mysqli_close($connect);
?>