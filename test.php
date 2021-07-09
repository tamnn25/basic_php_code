<?php
  class Test{
    public $name = "lets go";
    public $number = 0;
  }
  class go{
    private $numberzz = 12345;
  }
  $oop = new go();
  
  print_r($oop);
  echo "<hr/>";
  $object = new Test();
  var_dump($object);
  echo "<br>";
  $path = "https://www.w3resource.com/index.php";
    echo substr($path, 27);
    // var_dump(explode(" " ,$path));

?>
<hr>
<?php
  $a = 'name';
  $name = 'Anh Tên Em';
  echo $$a;
  echo '<br>';
  $a = 1; {$a=2;}
  echo $a;
?>