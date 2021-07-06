<?php
    $a = true; // kiểu dữ liệu là boolean
    $b = false; // kiểu dữ liệu là boolean
    $c = true; // kiểu dữ liệu là boolean
    $d = true; // kiểu dữ liệu là boolean
    $result = ($a && $b) && ($c && $d);
    var_dump($result); // false"
    // phân tích cấu trúc (thuật toán chỗ này).
    // coi như có 2 nhóm 
    // nhóm 1: ($a && $b)  ==> result: false. 
    // nhóm 2: ($c && $d) ===> result: true.
    // biểu thức nối 2 nhóm lại với nhau
    // nhóm 1 && nhóm 2: nhóm 1 là false, nhóm 2 là true
    // false && true ===> false
    $result1 = ($a && $b) || ($c && $d);
    var_dump($result1); // true"
    $total1 = $a && $b;
    
    $tatol = $a == $b;
    var_dump($tatol);	// false
    $tatol1 = $a != $b;
    var_dump($tatol1);	// true
?>