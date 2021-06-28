<?php
    $a = $_POST['toan'];
    $b = $_POST['ly'];
    $c = $_POST['hoa'];
    $resuit =( $a + $b + $c )/3;

    if ($resuit >= 8) {
        echo "loat A";
    }elseif ($resuit >= '6,5') {
        echo "loat B";
    }elseif ($resuit >= 5) {
        echo "loai c";
    }else {
        echo "loai D";
    }
?>
<form action="" method="POST">
    <label for="">mon toan</label>
    <input type="text" name="toan" id="">
    <label for="">mon ly</label>
    <input type="text" name="ly" id="">
    <label for="">mon hoa</label>
    <input type="text" name="hoa" id="">
    <input type="submit">
</form>