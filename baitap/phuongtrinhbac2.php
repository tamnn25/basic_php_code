<?php
if (isset($_POST['submit'])) {
   // gia PT bac 2
    $a = "";
    $b = "";
    $c = "";
    $a = filter_input(INPUT_POST, 'a');
    $b = filter_input(INPUT_POST, 'b');
    $c = filter_input(INPUT_POST, 'c');

    function giaiPTB2($a, $b, $c){
        if ($a == '') {
            $a = 0;
        }
        if ($b == '') {
            $b = 0;
        }
        if ($c == '') {
            $c = 0;
        }
            if ($a == 0) {
                if ($b == 0) {
                    echo ("Phương trình vô nghiệm!");
                } else {
                    echo ("Phương trình có một nghiệm: " . "x = " . (- $c / $b));
                }
                return;
            }
        echo '<br>';
        echo "phuong trinh bac 2 =". $a ."x2 +" . $b . "x +" .  $c . "= 0";
        echo '<br>';
        $delta = ($b * $b) - (4 * $a * $c);
        echo "delta là :" .  $delta;
        echo '<br>';
        // $x1 = "";
        // $x2 = "";
        
        //nghiem kep
        $x3 = (- $b / (2 * $a));
        if ($delta > 0) {
            $x1 = (-$b + sqrt ($delta))/ (2 * $a);
            $x2 = (-$b - sqrt ($delta))/ (2 * $a);
            echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
        }elseif ($delta == 0 ){
            echo ("phuong trinh co nghiem kep là ". $x3);
        }else{
            echo ("phuong trinh vo nghiem");
        }  
    }
    // giaiPTB2($_POST['a'], $_POST['b'], $_POST['c']);
    giaiPTB2($a , $b, $c);
} 

?>
<form action="" method="post">
    <input type="text" name="a" placeholder="nhap a"><br>
    <input type="text" name="b" placeholder="nhap b"><br>
    <input type="text" name="c" placeholder="nhap c">
    <input type="submit" name="submit"value="submit">
</form>

