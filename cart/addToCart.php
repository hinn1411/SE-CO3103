<?php
    include_once './../connect.php';
    session_start();
    if(isset($_POST['pid'])) {
        $id = $_POST['pid'];
        $query = "SELECT * FROM product WHERE product.id = $id";
        $res = mysqli_query($connect, $query);
        $row = mysqli_fetch_row($res);
        if(!isset($_SESSION['cart'])) {
            $cart = array (
                $id => array (
                    'name' => $row[1],
                    'price' => $row[2], 
                    'image' => $row[3], 
                    'quantity' => 1
                )
            );
        } else {
            $cart = $_SESSION['cart'];
            if(array_key_exists($id, $cart)) {
                $cart[$id] = array (
                    'name' => $row[1],
                    'price' => $row[2], 
                    'image' => $row[3], 
                    'quantity' => $cart[$id]['quantity'] + 1
                );
                // $cart[$pid]['quantity']++;
            } else {
                $cart[$id] = array (
                    'name' => $row[1],
                    'price' => $row[2], 
                    'image' => $row[3], 
                    'quantity' => 1
                );
            }
        }
        $_SESSION['cart'] = $cart;
    }
?>