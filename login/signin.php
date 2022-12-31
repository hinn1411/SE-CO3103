<?php
    include_once './../navbar.php';
    include_once './../connect.php';
    if(isset($_GET['submit'])) {
        if(empty($_GET['name'])|| empty($_GET['gender']) || empty($_GET['dob'])
        || empty($_GET['username']) || empty($_GET['password'])) {
            echo '<script>alert("Không được để trống thông tin")</script>';
        } else {
            $name = $_GET['name'];
            $gender = $_GET['gender'];
            $dob = $_GET['dob'];
            $username = $_GET['username'];
            $password = $_GET['password'];
            $query = "SELECT * FROM user WHERE user.account = '$username'";
            $res = mysqli_query($connect, $query);
            if(mysqli_num_rows($res) > 0) {
                echo '<script>alert("Tên tài khoản đã tồn tại")</script>';
            } else {
                $query = "INSERT INTO user (account, password, name, gender, dob) 
                VALUES('$username', '$password', '$name', '$gender', '$dob');";
                echo $query;
                $res = mysqli_query($connect, $query);
                echo '<script>alert("Đăng ký tài khoản thành công")</script>';
            }
        }
    }
?>
<main style="margin-top: 7.75%; margin-bottom: 10%;">
            <p class="container text-center fs-2" style="margin: 2.5% auto">Đăng ký thành viên</p>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="" type="GET" class="container">
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Họ và tên" name="name">
    
                        </div>
                        <div class="mb-3 container">
                            <div class="row">
                                <div class="col-3"><input class="radio-button ms-0" 
                                type="radio" name="gender" value="Nam"> Nam </div>
                                <div class="col-3"><input class="radio-button ms-0"
                                type="radio" name="gender" value="Nu"> Nữ </div>
                                <div class="col"><input class="input-date w-100 ms-0" type="text" 
                                name="dob" placeholder="dd/mm/yyyy"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Tên đăng nhập" name="username">
    
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="password" placeholder="Mật khẩu" name="password">
    
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mt-2 text-center">
                                    <button class="btn btn-dark w-50" type="submit" name="submit">Đăng ký</button>
                                </div>
                            </div>  
                        </div>
    
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </main>

<?php
    include_once './../footer.php';
    mysqli_close($connect);
?>