<?php
    $toanerror = null;
    $lyerror = null;
    $hoaerror = null;
    $flag = true;
    $resuit = null;
    $rank = ['A', 'B', 'C', 'D'];
    if (isset($_POST['submit'])){
       
        $toan = filter_input(INPUT_POST, 'toan');
        $ly = filter_input(INPUT_POST, 'ly');
        $hoa = filter_input(INPUT_POST, 'hoa');

         // toan
        if ($toan == null) {
            var_dump(1112);die;
            $toanerror =  'toan is not required';
        }else{
            if (!is_numeric($toan)) {
                var_dump(111);die;
                $toanerror =  'toan is not a number';
            }elseif(is_numeric($toan) && ($toan < 0 || $toan > 10)){
                $toanerror =  'toan is must 1 to 10';
            }
        }
        // ly

        if ($ly == null && $ly = '') {
            $lyerror = 'ly is not required';
        }else{
            if (!is_numeric($ly)) {
                $lyerror = 'ly is not a number';
            }elseif(is_numeric($ly) && ($ly < 0 || $ly > 10)){
                $lyerror = 'ly is must 1 to 10';
            }
        }
        // hoa

        if ($hoa == null && $hoa = '') {
            $hoaerror = 'hoa is not required';
        }else{
            if (!is_numeric($hoa)) {
                $hoaerror = 'hoa is not a number';
            }elseif(is_numeric($hoa) && ($hoa < 0 || $hoa > 10)){
                $hoaerror = 'hoa is must 1 to 10';
            }
        }

        $avg = ($toan + $hoa + $ly) / 3;
        echo $avg;
        echo '<br>';
        if ($avg >= 8.0) {
            $resuit = $rank[0];
        }elseif ($avg >= 6.5 && $avg < 8.0) {
            $resuit = $rank[1];
        }elseif ($avg >= 5.0 && $avg < 6.5) {
            $resuit = $rank[2];
        }else {
            $resuit = $rank[3];
        }
}
    
?>
<?php echo $resuit; ?>

<form action="" method="POST">
    <h4>nhap diem toan:</h4>
    <input type="numeric" name="toan" id="" placeholder="mon toan" value="<?php echo isset($toan) ? $toan : '';?>">
    <?php echo empty($toanerror) ? '' : $toanerror ?>
    <br>
    <h4>nhap diem ly:</h4>
    <input type="numeric" name="ly" id="" placeholder="mon ly" value="<?php echo isset($ly) ? $ly : ''; ?>">
    <?php echo empty($lyerror) ? '' : $lyerror ?>
    <br>
    <h4>nhap diem hoa:</h4>
    <input type="numeric" name="hoa" id="" placeholder="mon hoa" value="<?php echo isset($hoa) ? $hoa : '' ?>">
    <?php echo empty($hoaerror) ? '' : $hoaerror ?>
     <br><br>
    <input type="submit" name="submit" value="submit">
</form>
