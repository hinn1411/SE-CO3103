<?php
    include_once './../navbar.php';
?>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <!--Thêm đoạn này vào, thêm luôn script ở cuối body vào-->
                <!-------------------------------------------------------->
                
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="./../img/sale-home.png" class="d-block w-100" alt="sale-home">
                      </div>
                      <div class="carousel-item">
                        <img src="./../img/img1.png" class="d-block w-100" alt="img1">
                      </div>
                      <div class="carousel-item">
                        <img src="./../img/img2.png" class="d-block w-100" alt="img2">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                <!-------------------------------------------------------->
                <div class="text-center fs-1" style="margin-top:2.5%; margin-bottom: 2.5%;">SẢN PHẨM MỚI</div>
                <div class="text-center row">
                    <div class=" col">
                        <img src="./../img/home-1.png" class="img-fluid" style="margin-bottom: 5%;" alt="Ao thun">
                        <div>Áo khoác nỉ lông cừu</div>
                        <div>200.000đ</div>
                    </div>
                    <div class=" col">
                        <img src="./../img/home-2.png" class="img-fluid" style="margin-bottom: 5%;" alt="Ao thun">
                        <div>Áo khoác gió lót bông</div>
                        <div>200.000đ</div>
                    </div>
                    <div class=" col">
                        <img src="./../img/home-3.png" class="img-fluid" style="margin-bottom: 6.5%;" alt="Ao thun">
                        <div>Áo khoác Smoking Chill</div>
                        <div>200.000đ</div>
                    </div>
                    <div style="margin-top:1%;">
                        <a class="text-decoration-underline anchor-style">1</a>
                        <a href="./../home/new-2.html">2</a>
                        <a href=".com">3</a>
                    </div>
                </div>

                <div class="text-center fs-1" style="margin-top:2.5%; margin-bottom: 2.5%;">TRENDING</div>
                <div class="text-center row" style="margin-bottom: 2.5%; ">
                    <div class=" col">
                        <img src="./../img/home-4.png" class="img-fluid" style="margin-bottom: 5%;" alt="Ao thun">
                        <div>Áo nỉ bông Nelly cao cổ khóa kéo</div>
                        <div>200.000đ</div>
                    </div>
                    <div class=" col">
                        <img src="./../img/home-5.png" class="img-fluid" style="margin-bottom: 5%;" alt="Ao thun">
                        <div>Áo nỉ bông Nelly cổ bẻ thu đông basic</div>
                        <div>200.000đ</div>
                    </div>
                    <div class="col">
                        <img src="./../img/home-6.png" class="img-fluid" style="margin-bottom: 6.5%;" alt="Ao thun">
                        <div>Áo len nỉ cao cổ áo dài tay</div>
                        <div>200.000đ</div>
                    </div>
                    <div style="margin-top:1%;">
                        <a class="text-decoration-underline">1</a>
                        <a href=".com">2</a>
                        <a href=".com">3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </main>
<?php
    include_once './../footer.php';
?>