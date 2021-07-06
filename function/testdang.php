<?php 
	$file = "home/index.php";
	function timfile($file){
		$string = "";
		$length = strlen($file);

		for ($i=$length -1; $i >= 0 ; $i--) { 
			$string[$i] = $file[$i];
			if ($file[$i-1] == "/") {
				break;
			}
		}
		return $string;
	}
	echo timfile($file);
    echo '<hr>';
    
function getFileName($path) {
    $path_parts = pathinfo($path);

    $filename = $path_parts['filename'];
    return $filename;
}

/**
 * Define Path and call function to get Result
 */
$path = "https://www.w3resource.com/index.php";
$result = getFileName($path);
echo $result;
echo "<hr>";
$a =  "https://www.w3resource.com/index.php/php.php";

$b = ( pathinfo($a));
var_dump($b);
echo "<hr>";
var_dump($b['filename']);
// echo "<hr>";
// printf(implode($b));


 ?>