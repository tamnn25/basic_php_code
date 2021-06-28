<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    if ($a == '') {
        $resuit = 'A cannot Null';
    }elseif ($b == '') {
        $resuit = 'B cannot Null';
    }elseif ($a == 0) {
        $resuit = 'A # 0';
    }else{
        $resuit = -($b)/$a;
    }
?>
<h4>giai phuong trinh bat 1</h4>
<form action="" method="post">
    nhap a
    <input type="text" name="a">
    nhap b
    <input type="text" name="b">
    <input type="submit">
</form>
<?php echo "A = $a".'<br>'; echo "B = $b" ?>
<br>
<?php echo $resuit ?>