<form method="post" action="">
    <label>nhap n </label>
    <input type="text" name="n">
    <input type="submit">
</form>
<?php
    $n = $_POST['n'];
    for ($i=1; $i <=$n ; $i++) { 
        for ($j=1; $j <=$i; $j++) { 
          if ($j <= ($n-$i)) {
            echo "&nbsp&nbsp";
            }else
            {
                echo '*';
            }
        }
        echo '<br>';
    }
    
    // for ($i = 1; $i <$n; $i++)
    // {
    // for ($j = ($n-1); $j >= $i; $j--)
    // {
    //     echo '*';
    // }
    // echo '<br>';
    // }
?>
