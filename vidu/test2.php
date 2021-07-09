<?php

/**
 * Question 2
 * 
 * Write an application permit user input three numbers as math, physics, and chemistry. 
 * Output average and rank according to the following:
 * 
 * AVG          Rank
 * >=8.0        A
 * >=6.5        B
 * >=5.0        C
 * <5.0         D
 * 
 * Hint: Declare average and rank variable and calculate value for them.
 * 
 * Test: You can XAMPP and Browser Chrome to Test Result
 */

/**
 * Solution - Hướng dẫn giải bài tập
 * 
 * 1. Define Variable - Định nghĩa khởi tạo các biến.
 * 2. Create a form - Tạo ra 1 form với 3 ô input để nhập vào điểm của 3 môn (math, physics, and chemistry)
 * 3. Khi người dùng nhập giá trị vào Form Input thì xử lý và hiển thị ra kết quả.
 * 4. Có thể mở rộng thêm như Validate dữ liệu nhập vào.
 * 5. Hiển thị lại dữ liệu mà người dùng đã nhập (old input)
 */

/**
 * Các kiến thức cần phải chuẩn bị trước
 * 1. đọc hiểu các toán tử + - * / %
 * 2. đọc hiểu toán tử logic như NOT (!), AND (&&) và toán tử OR (||)
 * 3. cấu trúc điều khiển IF - ELSE IF ...
 * 4. cấu trúc điều khiển IF INLINE (IF 1 dòng)
 * 5. để chú thích hay comment out 1 đoạn code hay 1 dòng code thì có thể sử dụng các cách như sau:
 * 5.1. sử dụng 2 dấu gạch chéo (// code...)
 * 5.2. sử dụng cú pháp là gạch chéo * code.... * gạch chéo
 * 6. đối với HTML thì có thể sử dụng comment code bằng cú pháp là: <!-- code...  -->
 * 
 * Các function được sử dụng trong bài tập này như
 * 1. empty($var)
 * 2. isset($var)
 * 3. is_numeric($var)
 * 4. filter_input
 * 5. $_GET
 * 6. is_null($var)
 * 
 * Giải thích
 * // is_null($var) : hàm is_null($var) dùng để kiểm tra 1 biến có giá trị bằng NULL không ? nếu biến có giá trị là NULL hoặc empty string ('', "")
 * // thì kết quả trả về sẽ là TRUE, ngược lại kết quả trả về là FALSE
 *  // is_null($a) : giá trị $a là NULL hoặc empty string ('', "") thì kết quả của biểu thức này là TRUE, ngược lại kết quả của biểu thức là FALSE
 */

// Define Variable 
$math = null;
$physics = null;
$chemistry = null;

// Define Variable Error 
$mathError = null;  // biến này để chứa thông báo lỗi cho ô input name="math"
$physicsError = null; // biến này để chứa thông báo lỗi cho ô input name="physics"
$chemistryError = null; // biến này để chứa thông báo lỗi cho ô input name="chemistry"
$validateFlag = true; // biến này để tạo kiểm tra việc validate dữ liệu nhận 
// được Form là OK hay Not OK (giá trị của nó là true / false và giá trị default là true)

// Define Varable $result, $average, $rank 
$result = null; // biến này chứa kết quả của chương trình
$average = null; // biến này là tính trung bình của 3 giá trị (tức là 3 ô input mà người dùng nhập vào giá trị)
$rank = [
    'A',
    'B',
    'C',
    'D'
];
// // biến $rank nó sẽ tương ứng với array như sau
// $rank = [
//     0 => 'A',  // để lấy giá trị A của array này thì sử dụng cú pháp là $rank[0]
//     1 => 'B',  // để lấy giá trị B của array này thì sử dụng cú pháp là $rank[1]
//     2 => 'C',  // để lấy giá trị C của array này thì sử dụng cú pháp là $rank[2]
//     3 => 'D'   // để lấy giá trị D của array này thì sử dụng cú pháp là $rank[3]
// ];

// Check Event Form Submit - Kiểm tra xem người dùng đã bấm button Submit hay chưa ?
// dựa vào form action="GET" thì ta biết được FORM này đang sử dụng HTTP GET để gửi dữ liệu lên Server 
// function isset($var) : dùng để kiểm tra biến $var đã được tạo ra hay chưa ?
// áp dụng cho xử lý isset($_GET['submit']) : khi người dùng bấm button Submit thì biến này sẽ được tạo ra 
// và ta có thể xử lý code bên trong IF statement.
if (isset($_GET['submit'])) { // kiểm tra xem đã bấm submit hay chưa ? nếu true thì vào xử  lý, ngược lại false thì không xử lý.
    // validate dữ liệu từ các ô input nhập vào 
    $math = filter_input(INPUT_GET, 'math');
    $physics = filter_input(INPUT_GET, 'physics');
    $chemistry = filter_input(INPUT_GET, 'chemistry');

    /**
     * validate - kiểm tra xem người dùng có nhập vào đầy đủ 3 ô input hay không?
     * 
     * nếu 1 trong 3 ô input để trống (không nhập giá trị) thì hiển thị thông báo lỗi
     * ===> tức là Validate NOT NULL (không để trống)
     * 
     * ngược lại thì sẽ kiểm tra tiếp giá trị của các ô input này nếu giá trị của nó không phải là số thì thông báo lỗi
     * ===> tức là Validate NUMERIC (giá trị phải là số)
     */
    // validate NOT NULL for $math
    // kiểm tra biến $c có giá trị bằng NULL hay không ?
    // nếu giá trị của nó bằng NULL thì biểu thức điều kiện sẽ có giá trị là TRUE ( ($math == null) ===> TRUE )
    // ngược lại nếu giá trị của nó KHÔNG BẰNG NULL thì biểu thức điều kiện sẽ có giá trị là FALSE  ( ($math == null) ===> FALSE )
    if ($math == null) { // nếu người dùng chưa nhập gì cả cho ô input name="math" thì giá trị của biểu thức này sẽ là TRUE 
        $mathError = 'The math is required'; // thông báo lỗi không được để trống
        $validateFlag = false; // set giá trị false cho cờ $validateFlag để mục đích là validate input có lỗi nên sẽ dừng để hiển thị lỗi
    } else { // ngược lại, người dùng có nhập vào ô input nên giá trị của biểu thức sẽ là FALSE (tức là sẽ vào trường hợp ELSE)
        // kiểm tra xem giá trị người dùng đã nhập có phải là 1 con số (numeric) hay không ?
        // function is_numeric($var) dùng để kiểm tra xem gía trị của biến $var có phải 1 số hay không ?
        // ===> nếu giá trị của $var là 1 con số thì kết quả của biểu thức trả về là TRUE 
        // ===> ngược lại giá của biểu thức không phải là 1 con số thì kết quả của biểu thức trả về là FALSE
        // sử dụng toán tử LOGIC NOT (!) : để phủ định lại giá trị của $var 
        // tức là nếu giá trị của $var là TRUE thì khi dùng !$var ====> kết quả nó sẽ là FALSE 
        // ngược lại nếu giá trị của $var là FALSE thì khi dùng !$var ====> kết quả nó sẽ là TRUE
        if (!is_numeric($math)) { // kiểm tra giá trị của biến không phải là 1 con số 
            $mathError = 'The math is not numeric'; // thông báo lỗi giá trị của ô input nhập vào không phải là 1 con số
            $validateFlag = false; // set giá trị false cho cờ $validateFlag để mục đích là validate input có lỗi nên sẽ dừng để hiển thị lỗi
        } else if (is_numeric($math) && ($math < 0 || $math > 10)) { // kiểm tra giá trị của biến là 1 con số và giá trị của nó nằm NGOÀI khoảng từ 0-10, nếu giá trị nằm ngoài khoảng 0-10 thì thông báo lỗi
            // is_numeric($math) : kiểm tra biến $math nó phải là 1 con số 
            // ($math < 0 || $math > 10) : kiểm tra biến $math nó có giá trị nằm NGOÀI khoảng từ 0-10 hay không? nếu nằm ngoài thì thông báo lỗi
            $mathError = 'The math have value in range from 0 to 10'; // thông báo lỗi giá trị của ô input nhập vào có gía trị nằm trong khoảng từ 0-10
            $validateFlag = false; // set giá trị false cho cờ $validateFlag để mục đích là validate input có lỗi nên sẽ dừng để hiển thị lỗi
        }
    }

    // validate NOT NULL for $physics
    // kiểm tra biến $c có giá trị bằng NULL hay không ?
    // nếu giá trị của nó bằng NULL thì biểu thức điều kiện sẽ có giá trị là TRUE ( ($physics == null) ===> TRUE )
    // ngược lại nếu giá trị của nó KHÔNG BẰNG NULL thì biểu thức điều kiện sẽ có giá trị là FALSE  ( ($physics == null) ===> FALSE )
    if ($physics == null) { // nếu người dùng chưa nhập gì cả cho ô input name="physics" thì giá trị của biểu thức này sẽ là TRUE 
        $physicsError = 'The physics is required'; // thông báo lỗi không được để trống
        $validateFlag = false; // set giá trị false cho cờ $validateFlag để mục đích là validate input có lỗi nên sẽ dừng để hiển thị lỗi
    } else { // ngược lại, người dùng có nhập vào ô input nên giá trị của biểu thức sẽ là FALSE (tức là sẽ vào trường hợp ELSE)
        // kiểm tra xem giá trị người dùng đã nhập có phải là 1 con số (numeric) hay không ?
        // function is_numeric($var) dùng để kiểm tra xem gía trị của biến $var có phải 1 số hay không ?
        // ===> nếu giá trị của $var là 1 con số thì kết quả của biểu thức trả về là TRUE 
        // ===> ngược lại giá của biểu thức không phải là 1 con số thì kết quả của biểu thức trả về là FALSE
        // sử dụng toán tử LOGIC NOT (!) : để phủ định lại giá trị của $var 
        // tức là nếu giá trị của $var là TRUE thì khi dùng !$var ====> kết quả nó sẽ là FALSE 
        // ngược lại nếu giá trị của $var là FALSE thì khi dùng !$var ====> kết quả nó sẽ là TRUE
        if (!is_numeric($physics)) { // kiểm tra giá trị của biến không phải là 1 con số 
            $physicsError = 'The physics is not numeric'; // thông báo lỗi giá trị của ô input nhập vào không phải là 1 con số
            $validateFlag = false; // set giá trị false cho cờ $validateFlag để mục đích là validate input có lỗi nên sẽ dừng để hiển thị lỗi
        } else if (is_numeric($physics) && ($physics < 0 || $physics > 10)) { // kiểm tra giá trị của biến là 1 con số và giá trị của nó nằm NGOÀI khoảng từ 0-10, nếu giá trị nằm ngoài khoảng 0-10 thì thông báo lỗi
            // is_numeric($physics) : kiểm tra biến $physics nó phải là 1 con số 
            // ($physics < 0 || $physics > 10) : kiểm tra biến $physics nó có giá trị nằm NGOÀI khoảng từ 0-10 hay không? nếu nằm ngoài thì thông báo lỗi
            $physicsError = 'The physics have value in range from 0 to 10'; // thông báo lỗi giá trị của ô input nhập vào có gía trị nằm trong khoảng từ 0-10
            $validateFlag = false; // set giá trị false cho cờ $validateFlag để mục đích là validate input có lỗi nên sẽ dừng để hiển thị lỗi
        }
    }

    // validate NOT NULL for $chemistry
    // kiểm tra biến $c có giá trị bằng NULL hay không ?
    // nếu giá trị của nó bằng NULL thì biểu thức điều kiện sẽ có giá trị là TRUE ( ($chemistry == null) ===> TRUE )
    // ngược lại nếu giá trị của nó KHÔNG BẰNG NULL thì biểu thức điều kiện sẽ có giá trị là FALSE  ( ($chemistry == null) ===> FALSE ) 
    if ($chemistry == null) { // nếu người dùng chưa nhập gì cả cho ô input name="chemistry" thì giá trị của biểu thức này sẽ là TRUE 
        $chemistryError = 'The chemistry is required'; // thông báo lỗi không được để trống
        $validateFlag = false; // set giá trị false cho cờ $validateFlag để mục đích là validate input có lỗi nên sẽ dừng để hiển thị lỗi
    } else { // ngược lại, người dùng có nhập vào ô input nên giá trị của biểu thức sẽ là FALSE (tức là sẽ vào trường hợp ELSE)
        // kiểm tra xem giá trị người dùng đã nhập có phải là 1 con số (numeric) hay không ?
        // function is_numeric($var) dùng để kiểm tra xem gía trị của biến $var có phải 1 số hay không ?
        // ===> nếu giá trị của $var là 1 con số thì kết quả của biểu thức trả về là TRUE 
        // ===> ngược lại giá của biểu thức không phải là 1 con số thì kết quả của biểu thức trả về là FALSE
        // sử dụng toán tử LOGIC NOT (!) : để phủ định lại giá trị của $var 
        // tức là nếu giá trị của $var là TRUE thì khi dùng !$var ====> kết quả nó sẽ là FALSE 
        // ngược lại nếu giá trị của $var là FALSE thì khi dùng !$var ====> kết quả nó sẽ là TRUE
        if (!is_numeric($chemistry)) { // kiểm tra giá trị của biến không phải là 1 con số 
            $chemistryError = 'The chemistry is not numeric'; // thông báo lỗi giá trị của ô input nhập vào không phải là 1 con số
            $validateFlag = false; // set giá trị false cho cờ $validateFlag để mục đích là validate input có lỗi nên sẽ dừng để hiển thị lỗi
        } else if (is_numeric($chemistry) && ($chemistry < 0 || $chemistry > 10)) { // kiểm tra giá trị của biến là 1 con số và giá trị của nó nằm NGOÀI khoảng từ 0-10, nếu giá trị nằm ngoài khoảng 0-10 thì thông báo lỗi
            // is_numeric($chemistry) : kiểm tra biến $chemistry nó phải là 1 con số 
            // ($chemistry < 0 || $chemistry > 10) : kiểm tra biến $chemistry nó có giá trị nằm NGOÀI khoảng từ 0-10 hay không? nếu nằm ngoài thì thông báo lỗi
            $chemistryError = 'The chemistry have value in range from 0 to 10'; // thông báo lỗi giá trị của ô input nhập vào có gía trị nằm trong khoảng từ 0-10
            $validateFlag = false; // set giá trị false cho cờ $validateFlag để mục đích là validate input có lỗi nên sẽ dừng để hiển thị lỗi
        }
    }

    // validate OK thì sẽ xử lý LOGIC
    // OK tức là giá trị của $validateFlag là TRUE
    // ngược lại nếu giá trị của cờ $validateFlag là FALSE thì không xử lý LOGIC mà chỉ hiển thị thông báo lỗi tương ứng cho các ô input
    if ($validateFlag) { // check nếu giá trị của cả 3 biến này đều là NULL thì kết quả của biểu thức sẽ là TRUE
        // xử lý LOGIC 
        // giá trị của biến $average sẽ bằng trung bình cộng của 3 biến 
        $average = ($math + $physics + $chemistry) / 3;

        // kiểm tra giá trị của biến $average ?
        if ($average >= 8.0) { // nếu >= 8.0 thì kết quả là điểm A
            $result = $rank[0]; // lấy giá trị A từ array $rank
        } else if ($average >=6.5 && $average < 8.0) { // nếu < 8.0 và >= 6.5 thì kết quả là điểm B
            $result = $rank[1]; // lấy giá trị B từ array $rank
        } else if ($average >= 5.0 && $average < 6.5) { // nếu < 6.5 và >= 5.0 thì kết quả là điểm C
            $result = $rank[2]; // lấy giá trị C từ array $rank
        } else { // nếu < 5.0 thì kết quả là điểm D
            $result = $rank[3]; // lấy giá trị D từ array $rank
        }
    }

    // Hiển thị kết quả cho người dùng (được hiển thị ở phần HTML bên dưới)
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
    <style>
        .red {
            color: red;
        }

        .form-group {
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <!-- Hiển thị kết quả -->
    <!-- Khi người dùng bấm SUBMIT Form và xử lý dữ liệu bao gồm :
    1. Validate dữ liệu nhập vào 
    2. tính toán logic (xử lý logic) dựa vào kết quả người dùng nhập vào 
    3. hiển thị thông báo lỗi nếu có lỗi 
    4. hiển thị kết quả tính toán nếu không có lỗi nhập liệu -->
    <!-- function !empty($var) dùng để kiểm tra xem biến $var đã được tạo ra hay chưa ? 
    và đồng thời kiểm tra tiếp giá trị của biến này có bằng null hay không ?
    sử dụng toán tử logic NOT (!) để phủ định là giá trị của biến $var 
    nếu giá trị của biến $var là TRUE thì khi sử dụng !$var giá trị của nó sẽ là  ===> FALSE 
    ngược lại, nếu giá trị của biến $var là FALSE thì khi sử dụng !$var giá trị của nó sẽ là  ===> TRUE  -->
    <?php if (!empty($result)) : ?>
        <h1><?php echo 'Average : ' . $result; ?></h1>
    <?php endif; ?>

    <p>(<span class="red">*</span>): Các Input bắt buộc phải nhập (không được để trống).</p>

    <form method="GET" action="q2.php">
        <div class="form-group">
            <label for="">Math (<span class="red">*</span>)</label>
            <br>
            <!-- sử dụng IF INLINE (IF 1 dòng) để kiểm tra biến $math và hiển thị lại giá trị của nó
            (tức là giá trị mà người dùng vừa nhập vào) -->
            <input type="numeric" name="math" value="<?php echo isset($math) ? $math : ''; ?>">
            <!-- hiển thị thông báo lỗi VALIDATE
            nếu hệ thống xử lý VALIDATE và trả về thông báo lỗi thì HIỂN THỊ  -->
            <!-- tương tự cũng sử dụng IF INLINE (IF 1 dòng) để hiển thị thông báo VALIDATE ERROR  -->
            <?php echo empty($mathError) ? '' : '<span class="red">' . $mathError . '</span>'; ?>
        </div>

        <div class="form-group">
            <label for="">Physics (<span class="red">*</span>)</label>
            <br>
            <!-- sử dụng IF INLINE (IF 1 dòng) để kiểm tra biến $physics và hiển thị lại giá trị của nó
            (tức là giá trị mà người dùng vừa nhập vào) -->
            <input type="numeric" name="physics" value="<?php echo isset($physics) ? $physics : ''; ?>">
            <!-- hiển thị thông báo lỗi VALIDATE
            nếu hệ thống xử lý VALIDATE và trả về thông báo lỗi thì HIỂN THỊ  -->
            <!-- tương tự cũng sử dụng IF INLINE (IF 1 dòng) để hiển thị thông báo VALIDATE ERROR  -->
            <?php echo empty($physicsError) ? '' : '<span class="red">' . $physicsError . '</span>'; ?>
        </div>

       <div class="form-group">
            <label for="">Chemistry (<span class="red">*</span>)</label>
            <br>
            <!-- sử dụng IF INLINE (IF 1 dòng) để kiểm tra biến $chemistry và hiển thị lại giá trị của nó
            (tức là giá trị mà người dùng vừa nhập vào) -->
            <input type="numeric" name="chemistry" value="<?php echo isset($chemistry) ? $chemistry : ''; ?>">
            <!-- hiển thị thông báo lỗi VALIDATE
            nếu hệ thống xử lý VALIDATE và trả về thông báo lỗi thì HIỂN THỊ  -->
            <!-- tương tự cũng sử dụng IF INLINE (IF 1 dòng) để hiển thị thông báo VALIDATE ERROR  -->
            <?php echo empty($chemistryError) ? '' : '<span class="red">' . $chemistryError . '</span>'; ?>
       </div>

        <div class="form-group">
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
</body>
</html>