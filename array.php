<?php
    class oop{
        public $name;
        public $age;
        function setName($name){
            $this->name = $name;
        }
        function getName(){
            return $this->name;
        }
    }
    $ooc = new oop();
    $ooc->setName('tam');
    echo $ooc->getName();
    // print_r($ooc);
echo "<br>";
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
// echo "<br>";
// echo $banana->get_name();
echo '<hr>';
$authors = array(
    array(
        'name' => 'Nguyễn Văn Cường',
        'blog' => 'freetuts.net',
        'position' => 'admin'
    ),
    array(
        'name' => 'Trương Phúc Hoài Minh',
        'blog' => 'freetuts.net',
        'position' => 'author'
    ),
    array(
        'name' => 'Hoàng Văn Tuyền',
        'blog' => 'freetuts.net',
        'position' => 'author'
    ),
    array(
        'name' => 'Nguyễn Tình',
        'blog' => 'freetuts.net',
        'position' => 'author'
    )
);
$authors = array_change_key_case($authors,CASE_UPPER);
var_dump($authors);
echo '<hr>';
$new = array('name'=>'tam12334','blog'=>'blog1');
// $authors[] = $new;
array_push($authors,$new);
// Thông tin tá giả mới
$new_author = array(
    'name' => 'Đặng Văn Chương',
    'blog' => 'freetuts.net',
    'position' => 'author'
);

// Thêm vào danh sách
$authors[] = $new_author;
echo '<br>';
// xoa phan tu
// unset($authors[0]);
//xoa phan tu vs name
// unset($authors[1]['name']);

$ab = array('name'=>'tam32123');
$authors[] = $ab;
//sua key
$authors[6]['name']= 'tam999';
echo '<br>';
foreach($authors as $key=>$value){
    echo ($key).':';
    echo $value['name'].'///';
    echo $value['blog'].'<br>';
    // var_dump($authors).'<br>';
}
print_r (implode("-",$authors));
echo '<hr>';
$ao = "hello world. to day is a good day";
print_r (explode(" ",$ao)) ;
if(isset($ao)){
    echo "$ao godd";
}

?>