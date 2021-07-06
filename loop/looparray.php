<?php
    $n = $_POST['n'];
    $j = 1;
    for ($i=10; $i < $n ; $i++) { 
       $j = $j + $i.'<br>';
    }
    echo $j;
?>

<form action="" method="post">
    <input type="text" name="n" placeholder="nhap n">
    <input type="submit">
</form>
<hr>
<?php
// $path = "https://www.w3resource.com/index.php";

// print_r(pathinfo($path)) ;
function getB($abc){
    $path = $abc;
    echo  ++$path;
}
$abc = 'a';
getB($abc);
?>