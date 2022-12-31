<?php
    session_start();
    include_once './../connect.php';
    if(isset($_POST["id"]) && isset($_POST["number"])) {
        $id = $_POST["id"];
        $num = $_POST["number"];
        if(isset($_SESSION["cart"])) {
            $cart  = $_SESSION["cart"];
            if(array_key_exists($id, $cart)) {
                if($num > 0) {
                    $cart[$id] = array (
                        'name' => $cart[$id]["name"],
                        'price' => $cart[$id]["price"], 
                        'image' => $cart[$id]["image"], 
                        'quantity' => $num
                    );
                } else {
                    unset($cart[$id]);  
                }      
            }
        }
        $_SESSION["cart"] = $cart;
    }
?>