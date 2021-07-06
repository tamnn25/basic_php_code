<?php
    
    function kiemtrasonguyento($n){
        for ($i=2; $i < $n ; $i++) { 
            if ($n % $i == 0) {
                return 0;
            }
        }return 1;
    }
    $b = kiemtrasonguyento($_POST['c']);
        if ($b==0) {
            $resuit = 'khong phai so nguyen to';
        }else{
            $resuit = 'so nguyen to';
        }
    
?>

<form action="" method="post">
    <label for="">nhap N</label>
    <input type="text" name="c">
    <input type="submit">
</form>
<?php echo $resuit; ?>

<hr>
<?php
    function check_prime($n)
    {
        if ($n <=1) {
            return false;
        }
        for ($i=2; $i < ($n-1) ; $i++) { 
            if ($n % $i ==0) {
                return false;
            }
        }
        return true;
    }

    $a = check_prime($_POST['c']);
?>