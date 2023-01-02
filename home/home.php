<?php
  session_start();
  include_once './../navbar.php';
  include_once './../connect.php';
?>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <!--Thêm đoạn này vào, thêm luôn script ở cuối body vào-->
    <!-------------------------------------------------------->

    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
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
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
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

    </div>
  </div>
  <div class="col-md-2"></div>
</div>
</main>
<?php
  if(isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
    $query = "SELECT * FROM user WHERE account = '$username'";
    $res = mysqli_query($connect, $query);
    $row = mysqli_fetch_row($res);
    // if(mysqli_num_rows($res) > 0) {
    //   echo $username;
    // }
    if(isset($_POST['update-user'])) {
      if(empty($_POST['password'])) {
        echo '<script>alert("Không được để trống thông tin")</script>';
      } else {
        $name = $_POST['username'];
        $password = $_POST['password'];
        $query = "UPDATE user SET password = '$password' WHERE account = '$name';";
        $res = mysqli_query($connect, $query);
      }
    }
  }
?>
<?php
    include_once './../footer.php';
?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 style="font-weight: bolder;">Thông tin tài khoản</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row align-items-center gy-5">
            <div class="col-8">
              <div class="container" style="font-size: 50px;">
                <div class="row row-cols-2 gy-3">
                  <div class="col-4">
                    <p style="font-size: 15px;">Tên đăng nhập:</p>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" style="font-size: medium;" readonly
                      value="<?php echo isset($row)?$row[1]:false; ?>">
                  </div>
                  <div class="col-4">
                    <p style="font-size: 15px;">Mật khẩu:</p>
                  </div>
                  <div class="col"><input type="text" class="form-control" style="font-size: medium;" readonly
                      value="<?php echo isset($row)?$row[2]:false; ?>"></div>
                  <div class="col-4">
                    <p style="font-size: 15px;">Giới tính:</p>
                  </div>
                  <div class="col">
                    <div class="container">
                      <div class="row">
                        <p class="col" style="font-size: medium;">
                          <input type="radio" name="gender" <?php if(isset($row) && $row[4]=="Nam" ) { echo "checked" ; } else {
                            echo "disabled" ; } ?>> Nam
                        </p>
                        <p class="col" style="font-size: medium;">
                          <input type="radio" name="gender" <?php if(isset($row) && $row[4]=="Nu" ) { echo "checked" ; } else {
                            echo "disabled" ; } ?>> Nữ
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <p style="font-size: 15px;">Ngày sinh:</p>
                  </div>
                  <div class="col">
                    <input type="text" style="height: 30px; width: 200px;" value="<?php echo isset($row)?$row[5]:false; ?>" readonly>
                  </div>
                </div>
              </div>
            </div>
            <div class="col text-center"><img src="./../img/person-circle.svg" alt="..."
                style="height: 100px; width: 100px;"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button style="font-size: medium;" class="btn btn-primary" data-bs-target="#exampleModalToggle2"
          data-bs-toggle="modal" data-bs-dismiss="modal">Thay đổi mật khẩu</button>
        <a href="./../login/logout.php"><button style="font-size: medium;" type="button" class="btn btn-secondary">Đăng
            xuất</button></a>
      </div>
    </div>
  </div>
</div>

<!-----Modal 2------->
<div class="modal fade" id="exampleModalToggle2" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <form action="" method="POST">
        <div class="modal-header">
          <h3 style="font-weight: bolder;">Thông tin tài khoản</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row align-items-center gy-5">
              <div class="col-8">
                <div class="container" style="font-size: 50px;">
                  <div class="row row-cols-2 gy-3">
                    <div class="col-4">
                      <p style="font-size: 15px;">Tên đăng nhập:</p>
                    </div>
                    <div class="col ">
                      <input type="email" class="form-control" style="font-size: medium;" name="username" readonly
                        value="<?php echo isset($row)?$row[1]:false; ?>">
                    </div>
                    <div class="col-4">
                      <p style="font-size: 15px;">Mật khẩu:</p>
                    </div>
                    <div class="col "><input type="password" class="form-control" style="font-size: medium;" name="password"
                        required></div>
                    <div class="col-4">
                      <p style="font-size: 15px;">Giới tính:</p>
                    </div>
                    <div class="col ">
                      <div class="container">
                        <div class="row">
                          <p class="col" style="font-size: medium;">
                            <input type="radio" name="gender" value="Nam" <?php if(isset($row) && $row[4]=="Nam" ) { echo "checked" ; }
                              else { echo "disabled" ; } ?>> Nam
                          </p>
                          <p class="col" style="font-size: medium;">
                            <input type="radio" name="gender" value="Nu" <?php if(isset($row) && $row[4]=="Nu" ) { echo "checked" ; }
                              else { echo "disabled" ; } ?>> Nữ
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <p style="font-size: 15px;">Ngày sinh:</p>
                    </div>
                    <div class="col "><input type="text" style="height: 30px; width: 200px;" name="birthtime"
                        value="<?php echo isset($row)?$row[5]:false; ?>" readonly></div>
                  </div>
                </div>
              </div>
              <div class="col text-center"><img src="./../img/person-circle.svg" alt="..."
                  style="height: 100px; width: 100px;"></div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button style="font-size: medium;" type="submit" class="btn btn-primary" name="update-user">Cập nhật</button>
          <button style="font-size: medium;" class="btn btn-secondary" data-bs-target="#exampleModal"
            data-bs-toggle="modal" data-bs-dismiss="modal">Quay lại</button>
        </div>
      </form>
    </div>
  </div>
</div>