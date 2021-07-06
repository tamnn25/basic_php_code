<?php
            //khai báo và tạo mảng liên hợp
            $mang_lien_hop = array( "italia"=>"Rome", "Luxembourg"=>"Luxembourg",  
			"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",  
			"Finland"=>"Helsinki", "France" => "Paris",  
			"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",  
			"Germany" => "Berlin", "Greece" => "Athens",  
			"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
			"Austria" => "Vienna", "Poland"=>"Warsaw");  
			
      echo current($mang_lien_hop);
      echo '<hr>';
            echo (implode(" ", $mang_lien_hop));
            // $tr = 'Using the limit parameter to return a number of array elements:';
            echo '<hr>';
            echo reset($mang_lien_hop);
            echo '<hr>';
            $tr = (implode(" " ,$mang_lien_hop));
            
            print_r (explode(" " ,$tr));
            echo '<hr>';
            // lay gia tri;
            print_r($mang_lien_hop['Poland']);
            echo '<hr>';
            unset($mang_lien_hop['italia']);
			//sắp xếp mảng liên hợp
			// asort($mang_lien_hop); 
			
			//lặp qua các phần tử mảng 
			foreach($mang_lien_hop as $key => $value)  
			{  
			  echo "Thủ đô của $key là $value"."<br>" ;  
			}  

            // sort () - sắp xếp các mảng theo thứ tự tăng dần
            // rsort () - sắp xếp các mảng theo thứ tự giảm dần
            // asort () - sắp xếp các mảng kết hợp theo thứ tự tăng dần, theo giá trị
            // ksort () - sắp xếp các mảng kết hợp theo thứ tự tăng dần, theo khóa
            // arsort () - sắp xếp các mảng kết hợp theo thứ tự giảm dần, theo giá trị
            // krsort () - sắp xếp các mảng kết hợp theo thứ tự giảm dần, theo khóa
       ?>
       <form action="" method="delete"></form>
       <script action="" method="post"> Delete</script> 