<?php
$operator = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num1 = abs((int)$_POST['num1']);
    $num2 = abs((int)$_POST['num2']);
    $operator = trim(strip_tags($_POST['operator']));
    $visible = true;
}
$result = 0;
switch ($operator){
    case '+':
        $result = $num1+$num2;
        break;
    case '-':
        $result = $num1-$num2;
        break;
    case '/':
        if($num2 == 0){
            $result = 'На ноль делить нельзя';
            break;
        }
        $result = $num1/$num2;
        break;
    case '*':
        $result = $num1*$num2;
        break;
    default:
        $result = 'error';
        $operator = 'error';
}
?>
<div id="content">
    <!-- Заголовок -->
    <h1><?php echo $header?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
<!--    <form method="post">-->
    <form action='<?$_SERVER['REQUEST_URI']?>' method="post">
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
        <div>
            <br>
            <? echo "$num1 $operator $num2 = $result"?>
        </div>
    </form>
    <!-- Область основного контента -->
</div>
