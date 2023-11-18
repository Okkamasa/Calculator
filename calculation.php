<?php 

    $FirstNum = (int) $_POST["FirstNum"];
    $ArithmeticOperators = $_POST["ArithmeticOperators"];
    $SecondNum = (int) $_POST["SecondNum"];
    $ResultNum = (int) $_POST["ResultNum"];

    
    echo "FirstNum =" . $FirstNum;
    echo "ArithmeticOperators =" . $ArithmeticOperators;
    echo "SecondNum =" . $SecondNum;
    // 本当は演算子で場合分けした方がよさそう
    if($ArithmeticOperators == "+") echo "ResultNum =" . $ResultNum = $FirstNum + $SecondNum;
    if($ArithmeticOperators == "-") echo "ResultNum =" . $ResultNum = $FirstNum - $SecondNum;
    if($ArithmeticOperators == "×") echo "ResultNum =" . $ResultNum = $FirstNum * $SecondNum;
    if($ArithmeticOperators == "÷") echo "ResultNum =" . $ResultNum = $FirstNum / $SecondNum;

    include "test.html";
 ?>