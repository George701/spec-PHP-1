<?php
    //for ($i = 1;$i <= 50; $i++){
    //    if ($i%2!=0){
    //        echo $i.", ";
    //    }
    //}
    for ($i = 1;$i <= 50; $i+=2){
            echo "$i\n";
    }
?>
<br/>
<?php
    $var = "HELLO";
    $size = strlen($var);
    $i = 0;
    while ($i < $size){
        echo $var{$i};?><br><?php
        $i++;
    }
?>