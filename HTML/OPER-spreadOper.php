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
                    <h3>PHP - Spread Operator</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p>PHP recognizes the three dots symbol (...) as the spread operator. The spread operator is a convenient and concise way to work with arrays and iterables, making code more expressive and readable. It simplifies tasks such as array merging, function parameter passing, and iterable unpacking. However, it's worth noting that the spread operator does not modify the original arrays or iterables; it only creates copies or unpacks elements for temporary use.</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">echo "-UNPACKING ARRAYS-" . PHP_EOL;</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">$array1 = [1, 2, 3];</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">$array2 = [...$array1, 4, 5, 6];</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">print_r($array2);</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">echo "-MERGE FUNCTION-" . PHP_EOL;</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">$arr1 = [1,2,3];</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">$arr2 = [4,5,6];</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">$arr3 = array_merge($arr1, $arr2);</span></p>
                        <p><span class="numbers">10.</span><span class="yellow">print_r($arr3);</span></p>
                        <p><span class="numbers">11.</span><span class="yellow">echo "-UNPACKING FUNCTION ARGUMENT-" . PHP_EOL;</span></p>
                        <p><span class="numbers">12.</span><span class="yellow">function example($arg1, $arg2, $arg3 , $arg4) {</span></p>
                        <p><span class="numbers">13.</span><span class="yellow">    echo "Arguments: $arg1, $arg2, $arg3 , $arg4";</span></p>
                        <p><span class="numbers">14.</span><span class="yellow">}</span></p>
                        <p><span class="numbers">15.</span><span class="yellow">$arguments = ['foo', 'bar', 'baz', 'hak'];</span></p>
                        <p><span class="numbers">16.</span><span class="yellow">example(...$arguments);</span></p>
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


                                echo "-UNPACKING ARRAYS-" . PHP_EOL;
                                $array1 = [1, 2, 3];
                                $array2 = [...$array1, 4, 5, 6];


                                print_r($array2);


                                echo "-MERGE FUNCTION-" . PHP_EOL;
                                $arr1 = [1,2,3];
                                $arr2 = [4,5,6];
                                $arr3 = array_merge($arr1, $arr2);


                                print_r($arr3);


                                echo "-UNPACKING FUNCTION ARGUMENT-" . PHP_EOL;


                                function example($arg1, $arg2, $arg3 , $arg4) {
                                    echo "Arguments: $arg1, $arg2, $arg3 , $arg4";
                                }


                                $arguments = ['foo', 'bar', 'baz', 'hak'];
                                example(...$arguments);


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