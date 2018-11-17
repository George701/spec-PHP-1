<?php

function myError($no, $msg, $file, $line){
    $dt = date("d-m-Y H:i:s");
    $str = "[$dt] - $msg in $file: $line\n";
    switch($no){
        case E_USER_ERROR:
        case E_USER_WARNING:
        case E_USER_NOTICE:
            echo $msg;
            break;
        default: echo $msg;
    }
    error_log($str, 3, "error.log");
}

function drawTable($cols = 10, $rows = 10, $color = "red"){
    static $cnt = 0;
    $cnt++;
    echo "<br>";
    echo "Таблица построена в $cnt раз";
    echo "<table border='1' style='margin: 10px 0 10px 17px'>";
    for($tr = 1; $tr <= $rows; $tr++){
        if($tr==1){
            echo "<tr class='table-first' style='background-color:$color;'>";
        }else{
            echo "<tr>";
        }
        for($td = 1; $td <= $cols; $td++){
            if($td == 1){
                echo "<td class='table-first' style='background-color:$color;'>".$tr*$td. "</td>";
            }else{
                echo "<td>".$tr*$td. "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

function drawMenu($menu, $vertical=true){
    if(!is_array($menu))
        return false;
    $style = "";
    if(!$vertical)
        $style = " style='display:inline; margin-right:15px;'";
    echo "<ul>";
    foreach($menu as $item){
        echo "<li$style>";
        echo "<a href='{$item['href']}'>{$item['link']}</a>";
        echo "</li>";
    }
    echo "</ul>";
    return true;
}
?>