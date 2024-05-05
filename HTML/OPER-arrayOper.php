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
                    <h3>PHP - Array Operator</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p class="marg-bot">In PHP, an array is a data structure that allows you to store multiple values in a single variable. Each value in an array is identified by a unique key, which can be either an integer or a string. Arrays can contain a mix of different types of values, including integers, strings, floats, booleans, objects, or even other arrays.</p>
                        <p class="marg-bot">
                            PHP defines the following set of symbols to be used as operators on array data types −
                            </p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">echo "Union Operator" . PHP_EOL;</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">$arr1 = array("phy" => 70, "che" => 80, "math" => 90);</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">$arr2 = array("Eng" => 70, "Bio" => 80, "CompSci" => 90);</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">$arr3 = $arr1 + $arr2;</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">var_dump($arr3);</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">echo "Two Array Equal " . PHP_EOL;</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">$arr1 = array(0 => 70, 2 => 80, 1 => 90);</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">$arr2 = array(70, 90, 80);</span></p>
                        <p><span class="numbers">10.</span><span class="yellow">var_dump($arr1 == $arr2);</span></p>
                        <p><span class="numbers">11.</span><span class="yellow">var_dump($arr2 != $arr1);</span></p>
                        <p><span class="numbers">12.</span><span class="yellow">echo "Two Arrays Identical" . PHP_EOL;</span></p>
                        <p><span class="numbers">13.</span><span class="yellow">$arr1 = array(0 => 70, 1 => 80, 2 => 90);</span></p>
                        <p><span class="numbers">14.</span><span class="yellow">$arr2 = array(70, 90, 80);</span></p>
                        <p><span class="numbers">15.</span><span class="yellow">var_dump($arr1 === $arr2);</span></p>
                        <p><span class="numbers">16.</span><span class="yellow">$arr3 = [70, 80, 90];</span></p>
                        <p><span class="numbers">17.</span><span class="yellow">var_dump($arr3 === $arr1);</span></p>
                        <p><span class="opse-numbers">18.</span><span class="pink">?&gt</span></p>

                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Output</h3>
                    </div>
                    <div class="sub-context">
                        <?php

                            echo "Union Operator" . PHP_EOL;
                            $arr1=array("phy"=>70, "che"=>80, "math"=>90);
                            $arr2=array("Eng"=>70, "Bio"=>80,"CompSci"=>90);
                            $arr3=$arr1+$arr2;
                            var_dump($arr3);




                            echo "Two Array Equal ". PHP_EOL;
                            $arr1=array(0=>70, 2=>80, 1=>90);
                            $arr2=array(70,90,80);
                            var_dump ($arr1==$arr2);
                            var_dump ($arr2!=$arr1);




                            echo "Two Arrays Identical" . PHP_EOL;
                            $arr1=array(0=>70, 1=>80, 2=>90);
                            $arr2=array(70,90,80);
                            var_dump ($arr1===$arr2);
                            $arr3=[70,80,90];
                            var_dump ($arr3===$arr1);
                            ?>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../JS/script.js"></script>
</body>
</html>