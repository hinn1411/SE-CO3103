
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./../base.css">
        <link rel="stylesheet" href="./../login/signin.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>FUNNY</title>
    </head>

    <body>
        <header class="base text-center">
            <div class="container-fluid"><a href="./../home/home.php" class="fs-1 logo-font"
            style="text-decoration: none; color: black;">FUNNY</a></div>
            <div class="container-fluid row">
                <div class="col-md-2"></div>
                <div class="container col-md-6 d-flex  justify-content-evenly">
                    <a href="./../product/male.php" 
                    style="text-decoration: none; color: black;">Nam</a>
                    <a href="./../product/female.php" 
                    style="text-decoration: none; color: black;">Nữ</a>
                    <a href="./../product/product.php" 
                    style="text-decoration: none; color: black;">Sản Phẩm</a>
                    <a href="./../intro/intro.php" 
                    style="text-decoration: none; color: black;">Giới Thiệu</a>
                </div>
                <div class="container col-md-2 d-flex justify-content-evenly">
                    <div>
                            <i class="fa-solid fa-magnifying-glass"></i>   
                    </div>
                    <!-------------Sửa chỗ này-------------->
                    <div><a style="text-decoration: none; color:black;">
                    <button style="padding: 0; background: none; border: none;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-user"></i></button></a></div>
                    <!-------------------------------------->
                    <div><a style="text-decoration: none; color:black;"
                    href="./../cart/cart.php"><i class="fa-solid fa-cart-shopping"></i></a></div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </header>
