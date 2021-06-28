<form method="post" action="">
    <label>nhap n </label>
    <input type="text" name="n">
    <input type="submit">
</form>
<?php
    $n = $_POST['n'];
    for ($i=1; $i <=$n ; $i++) { 
        for ($j=1; $j <=$i; $j++) { 
           echo '*';
        }
        echo '<br>';
    }
    for ($i=0; $i <$n; $i++) { 
        for ($j=($n-1); $j >=$i ; $j--) { 
            echo '*';
        }
        echo '<br>';
    }
    echo '<hr>';
    for ($i = 1; $i <$n; $i++)
    {
        for ($j = ($n-1); $j >= $i; $j--)
        {
            echo '&nbsp&nbsp';
        }
        for ($j=1; $j <= (2*$i-1) ; $j++) { 
            echo '*';
        }
        echo '<br>';
    }
    echo '<hr>';
    $sinhvien = array(
        'Nguyễn A',
        'Nguyễn B',
        'Nguyễn C',
        'Nguyễn D',
        'Nguyễn E',
        'Nguyễn F'
        );

    for ($i=0; $i < 6; $i++) { 
        echo $sinhvien[$i]."$i".'<br>';
    }    
?>
