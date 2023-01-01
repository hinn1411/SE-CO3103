<?php
    include_once './../navbar.php';
    include_once './../connect.php';
    session_start();
    if(isset($_SESSION['admin'])) {
        header("location:./../admin/layouts");
    }
    if(isset($_SESSION['user'])) {
        header("location:./../user/infor.php");
    }
    if(isset($_GET['login'])) {
        $username = $_GET['username'];
        $password = $_GET['password'];
        // echo  "SELECT * FROM user WHERE account='$username' AND password='$password';";
        if(empty($username) || empty($password)) {
            echo '<script>alert("Tài khoản và mật khẩu không được để trống")</script>';
        } else {
            if($username == "admin" && $password == "admin") {
                $_SESSION['admin'] = TRUE;
                header("location:./../admin/layouts");
            } else {
                $query = "SELECT * FROM user WHERE user.account='$username' AND user.password='$password';";
                $res = mysqli_query($connect, $query);
                $row = mysqli_fetch_row($res);
                $numOfRows = mysqli_num_rows($res);
                if($numOfRows > 0) {
                    if($username == $row[1] && $password == $row[2]) {
                        $_SESSION['user'] = $username;
                        header("location:./../home/home.php");
                    }
                } else {
                    echo '<script>alert("Tài khoản và mật khẩu không đúng")</script>';
                }

            }
        }
    }
?>
    <main style="margin-bottom: 10%;">
        <p class="container text-center fs-2" style="margin-top: 8%">Đăng Nhập</p>
        <?php
            if(isset($_GET['submit']) && (!isset($username) || !isset($password))) {
                echo 'hahaha';
            }
        ?>
        <div class="row" style="margin: 2.5% auto">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="" method="GET">
                    <div class="mb-3">
                        <label for="username" class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="d-grid">
                                <button class="btn btn-dark" type="submit" name="login">Đăng nhập</button>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">Quên mật khẩu?
                            <br>
                            <span class="nor">hoặc</span> <a class="anchor-style" href="./../login/signin.php">Đăng ký</a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </main>

<?php
    include_once './../footer.php';
?>