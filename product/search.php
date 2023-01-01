<?php
    include_once './../navbar.php';
    include_once './../connect.php';
    $query = 'SELECT * FROM product';
    $data = mysqli_query($connect, $query);
?>
    <main>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="text-start fs-3 container" style="margin-top:2.5%; margin-bottom: 2.5%;">TẤT CẢ SẢN PHẨM</div>
                <div class="row text-center" style="margin-bottom: 3%;">
                    <div class="col-md-1"><i class="fa-solid fa-filter align-middle"></i> Bộ lọc</div>
                    <div class="col-md-2">Lọc theo giá <i class="fa-solid fa-chevron-down align-middle"></i></div>
                    <div class="col-md-2">Màu sắc <i class="fa-solid fa-chevron-down align-middle"></i></div>
                    <div class="col-md-2">Kích cỡ <i class="fa-solid fa-chevron-down align-middle"></i></div>
                </div>
                <?php
                    echo "<div class='text-center row'>";
                    while($row = mysqli_fetch_row($data)) {
                        $row[2] = number_format($row[2], 0, ",", ".");
                        echo "<div class='col-md-4 col-sm-6 my-2'>";
                        echo "<img src='$row[3]' class='img-fluid'>";
                        echo "<div><a class='anchor-style' href='./../product/detail.php?id=$row[0]'>$row[1]</a></div>";
                        echo "<div> $row[2] đ</div>";
                        echo "</div>";
                    }
                    echo '</div>';
                ?>

            </div>
            <div class="col-md-2"></div>
        </div>
    </main>
<?php
    include_once './../footer.php';
    mysqli_close($connect);
?>