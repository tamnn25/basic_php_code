<?php
   /**
    * đối với function chú ý 2 khái niệm
    * 1. parameter là gì ? (tham số) (đi kèm với function)
    * 2. argument là gì ? (đối số truyền vào - chính là giá trị tương ứng với tham số)
    *
    * @ví dụ
    * filter_input(INPUT_GET, 'top', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
    * ===> function name: filter_input
    * ===> có các đối số (argument) gồm :
    * 1. INPUT_GET,
    * 2. 'top'
    * 3. FILTER_SANITIZE_SPECIAL_CHARS
    * 4. FILTER_REQUIRE_ARRAY
    *
    * @đây là function gốc (định nghĩa và xử lý) tức là PHP đã viết sẵn 1 function có tên là
    * filter_input và các tham số bao gồm:
    * filter_input(
    * 1. int $type,  (tham số thứ 1)
    * 2. string $var_name, (tham số thứ 2)
    * 3. int $filter = FILTER_DEFAULT,  (tham số thứ 3)
    * 4. array|int $options = 0):  (tham số thứ 4)
    * mixed
    *
    * function filter_input($type, $var_name, $filter = FILTER_DEFAULT, array|int $options = 0)
    */
  
    /**
     * function filter_input
     * @param $type int
     * @param $var_name string
     * @param $filter int (có gía trị default là FILTER_DEFAULT)
     * @param $options array|int (có giá trị default là 0)
     */
   // function filter_input($type, $var_name, $filter = FILTER_DEFAULT, $options = 0) {
 
   // }
 
   /**
    * isset($var) : kiểm tra biến $var có tồn tại chưa ?
    * @data_type của isset là boolean (true / false)
    * @nếu chưa tồn tại thì nó trả về giá trị bằng : false
    * @nếu đã tồn tại $var thì hàm isset sẽ trả về giá trị bằng: true
    *
    *
    * empty($var) : kiểm tra 1 biến có tồn tại hay chưa ?
    * nếu tồn tại rồi thì kiểm tra tiếp giá trị của nó
    * là giá null hay không ?
    * empty($var)  <===> (isset($var) && $var == null)
    * @nếu đúng là $var đã được tạo ra (tức là đã khai báo) và giá trị
    * của biến $var này bằng null thì giá trị trả về bằng ====> true
    *
    * @ngược lại: false
    *
    * ví dụ
    * $var = null;
    * if (empty($var))  (tương đương với (isset($var) && $var == null)  )
    * @@kết quả của biểu thức trên bằng : true
    *
    *
    * ví dụ dùng !empty
    * $var = null;
    * if (!empty($var))  (tương đương với !(isset($var) && $var == null)  )
    * @@kết quả của biểu thức trên bằng : false
    */
 
   /**
    * Define variable (định nghĩa biến để đổ dữ liệu)
    *
    * variable $tops : để set active và set lại giá trị khi người dùng có chọn
    * varable $email : mục đích để set lại giá cũ vào Form input khi mà người dùng đã có nhập giá trị email
    * variable $gender : mục đích để set lại giá trị cũ vào Form input khi mà người dùng đã chọn giá trị từ Dropdown-list
    */
   $tops = [];
   $email = null; // $email = ''; hoặc $email = "";   // 2 cái nháy đơn và nháy kép này gọi là empty string
   $gender = null; // trường hợp Dropdown-list mà có sử dụng thuộc tính multiple thì định nghĩa biến $gender là kiểu array
 
   // // khi $email = true hoặc khác null thì xử lý điều kiện
   // if ($email) {
   //  // coding....
   // }
     
  
 
   // case 2
   if (isset($_GET['submit'])) {
       // case 1
       // $tops = filter_input(INPUT_GET   , 'top',
       // FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
       // var_dump($tops);
       // if($tops !== NULL){ // bạn có chọn 1 ô checkbox
       //  $top1 = $tops[0];
       //  $top2 = $tops[1];
       //  $top3 = $tops[2];
       //  // validate OK
       //  echo 'validate OK'; // case 1
       // } else { // bạn không chọn ô checkbox nào cả
       //  // validate
       //  echo 'chua co chon gi het'; // case 2
       // }
 
       $email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
       // var_dump($email);
       if ($email) {
           echo("email is a valid email address"); //email 1
       } else {
           echo("email is not a valid email address"); //email 2x`
       }
 
       // case 2
       $tops = $_GET['top'];
       if($tops !== NULL) {
           // validate OK
           echo 'validate OK'; // case 1
       } else {
           // validate
           echo 'chua co chon gi het'; // case 2
       }
 
       // validate email
       // $email = $_GET['email'];
       // vieets thêm 1 function để check địa chỉ email có hợp lệ hay không ?
 
 
       // xử lý validate $gender
       // $gender = filter_input(INPUT_GET, 'gender');
       // validate coding...
 
 
       // // ko dùng filer_input
       // $gender = $_GET['gender'];
       // // validate gender khác null ?
       // if (!empty($gender)) {
       //  // nếu $gender đã tồn tại và có giá trị khác null thì vào đây xử lý
       //  // coding ...
       // } else {
       //  // $gender đã tồn tại nhưng giá trị của nó bằng null thì vào đây
       //  // thông báo lỗi.
       // }
 
       // // hoặc
 
       // // kiểm tra biến $gender khác null tức là không bằng null
       // if (!is_null($gender)) { // true
       //  // biến $gender khác null thì sẽ vào đây.
       // } else {
       //  // biến $gender = null thì sẽ vào chỗ này.
       //  // thông báo lỗi hay j đó.
       // }
 
   }
 
 
   /**
    * Giải thích IF 1 dòng (IF INLINE)
    * <?php echo in_array('tea', $tops) ? 'checked' : ''; ?>
    *
    * cú pháp (syntax) ở trên nó tương đương với câu điều kiện đầy đủ như sau
    *
    */
   // echo in_array('tea', $tops) ? 'checked' : ''; // case 1
 
   // // tương đương
 
   // // case 2
   // if (in_array('tea', $tops)) {
   //  echo 'checked';
   // } else {
   //  echo '';
   // }
 
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="index.php" method="get">
       <label for="">Drink</label>
       <input type="checkbox" name="top[]" <?php echo in_array('tea', $tops) ? 'checked' : ''; ?> value="tea">Tea
       <input type="checkbox" name="top[]" <?php echo in_array('coffee', $tops) ? 'checked' : ''; ?> value="coffee">Coffee
       <input type="checkbox" name="top[]" <?php echo in_array('milk', $tops) ? 'checked' : ''; ?> value="milk">Milk
      
       <br><br>
       <label for="">Email</label>
       <input type="text" name="email" value="<?php echo $email; ?>" />
 
       <br><br>
       <label for="">Gender</label>
       <select name="gender" multiple>
           <option value=""></option>
           <option value="male" <?php echo $gender == 'male' ? 'selected' : ''; ?>>Male</option>
           <option value="female" <?php echo $gender == 'female' ? 'selected' : ''; ?>>Female</option>
           <option value="other" <?php echo $gender == 'other' ? 'selected' : ''; ?>>Other</option>
       </select>
 
       <br><br>
       <button type="submit" name="submit">Submit</button>
   </form>
</body>
</html>
 
 
 

