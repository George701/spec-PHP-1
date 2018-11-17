<h1>Before</h1>
<!--<h1>-->
<!--    --><?php
//        echo "Hello, world!";
//    ?>
<!--</h1>-->
<!--<h2>-->
<!-- --><?php
//     echo 'This ', 'string ', 'was ', 'created ', ' with several arguments.';
//     //echo strftime('%D-%M-%Y', '%A');
// ?>
<!--</h2>-->
<!---->
<?php
//    $x = 10;
//    $x += 15;
//    $name = 'John';
//
//    echo $x;
//
//    //Constants
//    define("CONSTANT_NAME", "Emily");
//    const CONSTANT_NAME_SURNAME = CONSTANT_NAME.' Pound';
//
//?>
<!--<p>-->
<!--    Test name is --><?//=$name;?><!--.-->
<!--    Constant name is --><?//=CONSTANT_NAME?><!--.-->
<!--    But full constant name is --><?//=CONSTANT_NAME_SURNAME?>
<!--</p>-->
<!---->
<?php
    //Common errors
    //1. E_PARSE Parse error. (e.g. missing ";")
    //2. E_ERROR Runtime error. (e.g. undefined function)
    //3. E_WARNING Warning. (e.g. forgotten parameter or argument)
    //4. E_Notice Notice. (e.g. logic error when user call fro variable, which was deleted)
    //5. E_DEPRECATED

    //Links
//    $y = &$x;

    //Variable of variable
//    $x = "name";
//    $$x = "Anna";

//    echo "Hello, ", $name, ". ";

    /*Types of variables

    1) Numbers
        1.1) Integers
            $int = 1234;
            $int = -123;
            $int = 0123;
            $int = 0x1A;
            $int = 0b1234;
        1.2) Float & Double
            $float = 1.234;
            $float = 1.2e3;
            $float = 7E-10;

    2) String
        echo "This sentence will be\r\n in two lines.\n";
        echo 'This sentence will NOT be \n in two lines. ';
        echo "Hello \"my\" world";
        echo 'Hello \'my\' world';
        $name = "Peter";
        echo "Hello, $name.\n";

        echo <<<METKA
            Hello
                Anyone?
METKA;

        2.2) Screening
            $juice = "apple";

            echo "He drink some $juice juice.";
            echo "He drink some juice made of {$juice}s.";
        2.3) Access to a char in string
            $str = 'This is a test!';
            $first = $str{0}; //first char in string$
            echo $first;
            $len = strlen($str);
            $pos = $len - 1;
            echo $str{$pos};
        2.4) Concatenation
        $a = "Hello ";
        $b = $a . "World!";

    3) Boolean
        $x = true;

    4) Get Type
        $int = 123;
        $double = 1.234;
        $str = "Hello";
        $bool = true;

        echo gettype($int)." ".gettype($double)." ".gettype($str)." ".gettype($bool);
        echo is_string($str)." ".is_double($bool);
    5) Set Type
        $x = 11;
        settype($x, "string");
        echo gettype($x);

        $y = "10 hello";
        echo (int)$y;
        echo $y;


    6) Arrays
    $arr = [
            "name"=>"John",
            "login"=>"root",
            "pass"=>"1234"
    ];
    $arr["age"] = 25;
    $arr[] = true;
//    echo count($arr);
    print_r($arr);
//    var_dump($arr);
    $arr[33] = true;
    echo is_array($arr).gettype($arr);

    7) Increment and Decrement operations
        $x++,
        $x--,
        $a += 1;

    8) Cycles
        8.1)
            for($i=1;$i<=10;$i++){
                echo $i;
            }
        8.2) while
            $i = 1;
            while($i <= 10){
                echo $i++;
            }
        8.3) do-while
            $i = 100;

            do{
                echo $i++;
            }while($i <= 10);
        8.4) Control of a cycle
            8.4.1) break of cycle
                $i = 1;
                while($i <= 10){
                    echo $i++;
                    if(i == 5)
                        break //number of iteration;
                }
            8.4.2) Continue of a cycle
                $i = 0;
                while($i < 9){
                    $i++;
                    if($i == 5)
                        continue //number of iteration;
                    echo $i;
                }
             //Everything except for 5 will be in output

          8.5) foreach
            $arr = [
                "name"=>"John",
                "login"=>"root",
                "pass"=>"1234"
            ];
            foreach($arr as $key=>$v){
                echo "$key : $v <br/>";
            }

            $nums = [1,2,3,4,5];
            print_r($nums);
            echo "<br/>";
            foreach($nums as $v)
                $v *= 10;
            print_r($nums);
            echo "<br/>";
            foreach($nums as &$v)
                $v *= 10;
            print_r($nums);
            echo "<br/>";

    9) Functions
    function say($name){
        echo "<h2>Hello, $name!</h2>";
//        global $name;
//        $name = "Vasya";
//        $GLOBALS['name'] = 'Vasya';
    }

    say("John");
    $name = "Mike";
    say($name);
    echo "$name";

    function sum($n1, $n2){
        return $n1+$n2;
    }
    $result = sum(7,8); //15
    echo $result;
    echo sum(5,4);
    echo "<br>";
//    function nums(){
//        return[1,2,3];
//    }
//    list($one,$two, $thee) = nums();
//    echo $two;
    function nums($x, $y, &$a, &$b, &$c){
        $a = $x-$y;
        $b = $x*$y;
        $c = $x/$y;
        return $x+$y;
    }

    $sum = nums(2,3, $sub, $mul, $div);
    echo $sum, " ", $mul;

//    function x($a, &$b){
//        if()
//            return true;
//        else
//            $b = "...";
//            return false;
//    }
//    x(0,$err);/

    function my_count($var, $mode=0){
        if(is_null($var))
            return 0;
        elseif(!is_array($var)) return 1;
        $cnt = 0;
        foreach($var as $v){
            if(is_array($v) && $mode==1){
                $cnt += my_count($v, 1);
            }
            $cnt++;
        }
        return $cnt;
    }

    $my_arr = [1,2,3,4,5,6];

    echo $s = my_count($my_arr);
    echo $s = count($my_arr); // original function

    function foo(){
        func_num_args(); //return amount of elements
        print_r(func_get_args());
        echo func_get_arg(2);
    }

    foo(1,2,3,4,5);

    function bar($p){}
    function foo(callable $param, $x){
        $param($x);
    }

    print_r(get_defined_functions());
//    foo("bar", 10);



    $x = mktime(0,0,0,1,1,2019);
    echo print_r(getdate($x));

    print_r(getdate());
    echo "<br>";
    $current_timestamp = time();
    echo $current_timestamp;
    echo "<br>";
    echo mktime(0,0,0, 2,15,2009);
    echo "<br>";
    $x = date("d-m-Y H:i:s", 1234567890);
    echo $x;
    echo "<br>";
    echo date("d-m-Y H:i:s", $current_timestamp);
    echo "<br>";
    echo 3 + print 1;

    //Pseudoconstants
    echo __LINE__;
    echo "<br>";
    echo __FILE__;
    echo "<br>";
    echo __DIR__;



//    print_r(get_defined_constants(true));
    $name = "John";
    $age = 25;
    print_r( $GLOBALS);

    */

    //Superglobals
/*
//include "test.inc.php";
include_once  "test.inc.php";
//require "test.inc.php";
?>

<h1>AFTER</h1>*/


 ?>
<a href="test.php?x=100">link</a>
<?php
echo $_GET["x"];
?>