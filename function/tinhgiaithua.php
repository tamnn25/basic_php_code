<?php
    function giaithua($n){
        if ($n == 1) {
            return 1;
        }else {
            return $n*giaithua($n-1);
        }
    }
    $n = $_POST['a'];

    $kq = giaithua($n);
    print_r($kq);

?>
<form action="" method="post">
    <input type="text" value="" name="a" placeholder="nhap a">
    <input type="submit">
</form>