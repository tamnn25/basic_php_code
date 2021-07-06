<?php
    $ar = array('i', 'have', 'a', 'apple', 'and', 'i', 'have','a', 'pen');

    foreach($ar as $value){
        echo $value. '-';
    }
    sort($ar);

    echo "<ul>";  
	foreach ($ar as $y)  
	{  
		echo "<li>$y</li>";  
	}  
	echo "</ul>";
?>