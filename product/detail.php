<?php
    include_once './../navbar.php';
    include_once './../connect.php';
    $query = "SELECT * FROM product WHERE id =". $_GET['id']; 
    $data = mysqli_query($connect, $query);
    $row = mysqli_fetch_row($data);
?>
    <main>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5" style="padding-top: 5%;">
                <img src="<?php echo $row[3]; ?>" class="img-fluid" alt="Ảnh áo thun">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5" style="padding-top: 5%;">
                <div class="container fs-2 "><?php echo $row[1]; ?></div>
                <span class="container org-color"><?php echo number_format($row[2], 0, ",", "."); ?> đ</span>
                <div class="container d-flex align-items-center">
                    <div class="fs-3" style="margin-right: 1%;">Kích Thước:</div>
                    <div><button type="button" class="btn btn-outline-dark btn-sm">S</button>
                        <button type="button" class="btn btn-outline-dark btn-sm">M</button>
                        <button type="button" class="btn btn-outline-dark btn-sm">L</button>
                        <button type="button" class="btn btn-outline-dark btn-sm">XL</button>
                    </div>
                </div>
                <div class="container row" style="margin-top: 1.5%; margin-bottom: 1.5%;">
                    <div class="col-md-4">
                        <button type="button" class="container btn btn-dark btn-lg"
                        onclick="addToCart(<?php echo $row[0]; ?>)"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="container fw-bold">Thông tin sản phẩm
                    <div class="container nor"><span class="fw-bold">Chất liệu</span>: Cotton</div>
                    <div class="container nor"><span class="fw-bold">Xuất xứ</span>: Việt Nam</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                </div>
            </div>
        </div>
        <!----------------------Thêm cái này-------------------------------->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);width: 50%;">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="mb-3 text-center"><img src="./../img/bag-check-fill.svg" alt="..."></div>
                <h5 style="font-weight: bold;" class="text-center">Bạn đã thêm sản phẩm vào giỏ hàng thành công</h5>  
                </div>
            </div>
            </div>
        </div>
    </main>
    <script>    
        function addToCart(pid) {
            $.post("./../cart/addToCart.php", {'pid': pid}, function() {
                
            });
        }
    </script>

<?php
    include_once './../footer.php';
    mysqli_close($connect);
?>