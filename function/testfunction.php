<html>
   
   <head>
      <title>Kiểm tra số nguyên tố trong PHP</title>
   </head>
   <body>
   
       <?php
        function ham_kiem_tra_so_nguyen_to($n)  
		{  
		 for($x = 2; $x < $n; $x++)  
		   {  
			  if($n % $x ==0)  
				{  
				  return 0;  
				}  
		   }  
		  return 1;  
		}  
		$a = ham_kiem_tra_so_nguyen_to($_POST['a']);  
		if ($a==0)  
		  echo 'Đây không phải là số nguyên tố'."<br>";  
		else  
		  echo 'Đây là số nguyên tố'."<br>";
       ?>
       <form action="" method="post">
       <input type="text" name="a">
       <input type="submit">
       </form>
       
   </body>
</html>