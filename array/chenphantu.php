<?php
        $mang_ban_dau = array( '1','2','3','4','5' );  
		echo 'Mảng ban đầu: '."<br>";  
		foreach ($mang_ban_dau as $x)   
		{
			echo "$x ";
		}  
		echo "<br>";
		$phan_tu_can_chen = '$';  
		array_splice( $mang_ban_dau, 5, 0, $phan_tu_can_chen );   
		echo "Sau khi chèn phần tử '$' thì mảng sẽ như sau: "."<br>";  
		foreach ($mang_ban_dau as $x)   
		{
			echo "$x ";
		}  
		echo "<br>";
       ?>