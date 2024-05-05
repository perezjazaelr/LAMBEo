<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LAMBEosaurus</title>
    <link rel="Website icon" type="png" href="../PICTURES/Untitled-1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">    
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
                    <h3>PHP Introduction</h3>
                </div>
            <img  onclick="Myland()" src="../PICTURES/Untitled-1.png" alt="">
        </div>

        <div class="sub-container">
            <div class="sidebar">
                <h3 onclick="Myhome()">Hello World</h3>
                <h3 onclick="Mycomment()" >Comments</h3>
                <h3 onclick="Myvariables()" >Variables</h3>
                <h3 onclick="Myecho()" >Echo/Print</h3>
                <h3 onclick="MyvarDump()" >var_dump</h3>
                <h3 onclick="My$var()" >$ and $$ Variables</h3>
                <h3 onclick="Mycons()" >Constants</h3>
                <h3 onclick="MymagCons()" >Magic Constants</h3>
                <h3 onclick="Mydata()" >Data Types</h3> 
                <h3 onclick="MytypeCast()" >Type Casting</h3>
                <h3 onclick="MytypeJug()" >Type Juggling</h3>
                <h3 onclick="Mystrings()" >Strings</h3>
                <h3 onclick="MyBoolean()" >Boolean</h3>
                <h3 onclick="Myint()" >Integers</h3>
                <h3 onclick="Myfiles()" >Files and I/O</h3>
                <h3 onclick="Mymaths()" >Maths Function</h3>
                <h3 onclick="Myhere()" >Heredoc & Nowdoc</h3>
                <h3 onclick="Mycomp()" >Compound Types </h3> 
            </div>

            <div class="container-child">
                <div class="header">
                    <h3>PHP - Maths</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p class="marg-bot">To enable mathematical operations, PHP has mathematical (arithmetic) operators and a number of mathematical functions. In this chapter, the following mathematical functions are explained with examples.</p>
                        <p class="marg-bot">PHP abs() Function</p>
                        <p class="marg-bot">The abs() function is an in-built function in the PHP interpreter. This function accepts any number as an argument and returns a positive value, disregarding its sign. Absolute value of any number is always positive.</p>
                        <p class="marg-bot">PHP abs() function returns the absolute value of num. If the data type of num is float, its return type will also be float. For integer parameters, the return type is integer.
                        </p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">$num=-4.44;</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">echo "negative float number: " . $num . "\n";</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">echo "absolute value : " . abs($num) . "\n";</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">$num=18;</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">echo "positive float number: " . $num . "\n";</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">echo "absolute value : " . abs($num). "\n";</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">$num=-26;</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">echo "negative integer number: " . $num . "\n";</span></p>
                        <p><span class="numbers">10.</span><span class="yellow">echo "absolute value : " . abs($num) . "\n";</span></p>
                        <p><span class="numbers">11.</span><span class="yellow">$num=24;</span></p>
                        <p><span class="numbers">12.</span><span class="yellow">echo "positive integer number: " . $num . "\n";</span></p>
                        <p><span class="numbers">13.</span><span class="yellow">echo "absolute value : " . abs($num);</span></p>
                        <p><span class="opse-numbers">14.</span><span class="pink">?&gt</span></p>

                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Output</h3>
                    </div>
                    <div class="sub-context">
                        <p>
                            <?php
                                // Decimal Integer
                                $a = 1234;
                                echo "1234 is an Integer in decimal notation: $a\n";


                                // Octal Integer (Equivalent to 83 in decimal)
                                $b = 0123;
                                echo "0o123 is an integer in Octal notation: $b\n";


                                // Hexadecimal Integer (Equivalent to 26 in decimal)
                                $c = 0x1A;
                                echo "0x1A is an integer in Hexadecimal notation: $c\n";


                                // Binary Integer (Equivalent to 15 in decimal)
                                $d = 0b1111;
                                echo "0b1111 is an integer in binary notation: $d\n";


                                echo "\n";


                                // Large Integer (with potential overflow)
                                $x = 1000000;
                                $y = 50000000000000 * $x;
                                echo "Multiplying a large number (50000000000000) by 1000000 may result in overflow:\n";
                                var_dump($y);


                                echo "\n";


                                // Floating-Point Division
                                $x = 10;
                                $y = 3.5;


                                // Regular Floating-Point Division
                                $z = $x / $y;
                                echo "Floating-Point Division of 10 by 3.5:\n";
                                var_dump($z);


                                // Integer Division (using intdiv function)
                                $z = intdiv($x, $y);
                                echo "Integer Division of 10 by 3.5 (using intdiv function):\n";
                                var_dump($z);
                                ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../JS/script.js">
    </script>
</body>
</html>