<?php
    include_once './../navbar.php';
    include_once './../connect.php';
    session_start();
    if(!isset($_SESSION['user'])) {
        header("location:./../login/login.php");
    } else {
        if($_SESSION['tot'] == 0) {
            echo '<script>alert("Vui lòng mua thêm sản phẩm")</script>';
            // header("location:cart.php");
        }
    }
    if(isset($_SESSION["cart"])) {
        $item = json_encode($_SESSION["cart"]);
        $username = $_SESSION["user"];
        $query = "INSERT INTO customer_order (user_name, item) VALUES ('$username', '$item');";
        mysqli_query($connect, $query);
        unset($_SESSION["cart"]);
    }
?>
    <main style="margin-top:15%; margin-bottom: 15%;">
        <div class="text-center fs-1">Thanh toán thành công, cảm ơn bạn <br> đã mua sắm tại FUNNY.</div>
        <div class="text-center">
            <a href="./../home/home.php"><button type="button" class="btn btn-dark text-white fw-bolder fs-1 continue-button">Tiếp tục mua sắm</button></a>
        </div>
    </main>

<?php
    include_once './../footer.php';
?>