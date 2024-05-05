<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LAMBEosaurus</title>
    <link rel="Website icon" type="png" href="../PICTURES/Untitled-1.png">
    <link rel="stylesheet" href="../CSS/style.css">
    <style>
        .nav-bar{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="nav-bar">
            <div class = "nav-cont">
                <!--/*changes here*/ -->
                    <a href="#" class="toggle-button">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </a>
                    <h3>PHP Operators</h3>
                </div>
            <img  onclick="Myland()" src="../PICTURES/Untitled-1.png" alt="">
        </div>

        <div class="sub-container">
            <div class="sidebar">
                <h3 onclick="Myopera()" >Operators</h3>
                <h3 onclick="Myarit()" >Arithmatic Operators</h3>
                <h3 onclick="Mycompa()" >Comparison Operators</h3>
                <h3 onclick="Mylogical()" >Logical Operators</h3>
                <h3 onclick="Myass()" >Assignment Operators</h3>
                <h3 onclick="Mystring()" >String Operators</h3>
                <h3 onclick="Myarr()" >Array Operators</h3>
                <h3 onclick="Mycondi()" >Conditional Operators</h3>
                <h3 onclick="Myspread()" >Spread Operator</h3> 
                <h3 onclick="Mynull()" >Null Coalescing Operator</h3>
                <h3 onclick="Myspace()" >Spaceship Operator</h3> 
            </div>

            <div class="container-child">
                <div class="header">
                    <h3>PHP - Conditional Operator</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p>The conditional operator, also known as the ternary operator, is a shorthand notation for expressing conditional expressions in many programming languages, including PHP. It's called "ternary" because it takes three operands: a condition, a value to return if the condition is true, and a value to return if the condition is false. Its syntax is:</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">$a = 10;</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">$b = 5;</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">$c = 15;</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">$result1 = ($a > $b) ? "a is greater than b" : "a is not greater than b";</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">$result2 = ($a < $c) ? "a is less than c" : "a is not less than c";</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">$result3 = ($b >= $c) ? "b is greater than or equal to c" : "b is not greater than or equal to c";</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">$result4 = ($a <= $c) ? "a is less than or equal to c" : "a is not less than or equal to c";</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">$result5 = ($a == $b) ? "a is equal to b" : "a is not equal to b";</span></p>
                        <p><span class="numbers">10.</span><span class="yellow">$result6 = ($b != $c) ? "b is not equal to c" : "b is equal to c";</span></p>
                        <p><span class="numbers">11.</span><span class="yellow">echo "Result 1: $result1" . PHP_EOL;</span></p>
                        <p><span class="numbers">12.</span><span the="yellow">echo "Result 2: $result2" . PHP_EOL;</span></p>
                        <p><span class="numbers">13.</span><span the="yellow">echo "Result 3: $result3" . PHP_EOL;</span></p>
                        <p><span class="numbers">14.</span><span the="yellow">echo "Result 4: $result4" . PHP_EOL;</span></p>
                        <p><span class="numbers">15.</span><span the="yellow">echo "Result 5: $result5" . PHP_EOL;</span></p>
                        <p><span class="numbers">16.</span><span the="yellow">echo "Result 6: $result6" . PHP_EOL;</span></p>
                        <p><span class="opse-numbers">17.</span><span class="pink">?&gt</span></p>

                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Output</h3>
                    </div>
                    <div class="sub-context">
                        <p>
                            <?php

                                $a = 10;
                                $b = 5;
                                $c = 15;


                                $result1 = ($a > $b) ? "a is greater than b" : "a is not greater than b";
                                $result2 = ($a < $c) ? "a is less than c" : "a is not less than c";
                                $result3 = ($b >= $c) ? "b is greater than or equal to c" : "b is not greater than or equal to c";
                                $result4 = ($a <= $c) ? "a is less than or equal to c" : "a is not less than or equal to c";
                                $result5 = ($a == $b) ? "a is equal to b" : "a is not equal to b";
                                $result6 = ($b != $c) ? "b is not equal to c" : "b is equal to c";




                                echo "Result 1: $result1" . PHP_EOL;
                                echo "Result 2: $result2" . PHP_EOL;
                                echo "Result 3: $result3" . PHP_EOL;
                                echo "Result 4: $result4" . PHP_EOL;
                                echo "Result 5: $result5" . PHP_EOL;
                                echo "Result 6: $result6" . PHP_EOL;
                                ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../JS/script.js"></script>
</body>
</html>