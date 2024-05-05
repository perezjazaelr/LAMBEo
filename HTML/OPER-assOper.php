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
                    <h3>PHP - Assignment Operator</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p>You can use assignment operators in PHP to assign values to variables. Assignment operators are shorthand notations to perform arithmetic or other operations while assigning a value to a variable. For instance, the "=" operator assigns the value on the right-hand side to the variable on the left-hand side.</p>    
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">$a = 62;</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">$b = 30;</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">$c = $a + $b;</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">echo "Addition Operation Result: $c \n"; // output: Addition Operation Result: 92</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">$c += $a;</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">echo "Add AND Assignment Operation Result: $c \n"; // output: Add AND Assignment Operation Result: 154</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">$c -= $a;</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">echo "Subtract AND Assignment Operation Result: $c \n"; // output: Subtract AND Assignment Operation Result: 92</span></p>
                        <p><span class="numbers">10.</span><span class="yellow">$c *= $a;</span></p>
                        <p><span class="numbers">11.</span><span class="yellow">echo "Multiply AND Assignment Operation Result: $c \n"; // output: Multiply AND Assignment Operation Result: 5704</span></p>
                        <p><span class="numbers">12.</span><span class="yellow">$c /= $a;</span></p>
                        <p><span class="numbers">13.</span><span class="yellow">echo "Division AND Assignment Operation Result: $c \n"; // output: Division AND Assignment Operation Result: 92</span></p>
                        <p><span class="numbers">14.</span><span class="yellow">$c %= $a;</span></p>
                        <p><span class="numbers">15.</span><span class="yellow">echo "Modulus AND Assignment Operation Result: $c"; // output: Modulus AND Assignment Operation Result: 30</span></p>
                        <p><span class="opse-numbers">16.</span><span class="pink">?&gt</span></p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Output</h3>
                    </div>
                    <div class="sub-context">
                        <p>
                            <?php
                                $a = 62;
                                $b = 30;

                                $c = $a + $b;
                                echo "Addition Operation Result: $c \n"; 
                                //output: Addition Operation Result: 92 

                                $c += $a;
                                echo "Add AND Assignment Operation Result: $c \n"; 
                                //output: Add AND Assignment Operation Result: 154 

                                $c -= $a;
                                echo "Subtract AND Assignment Operation Result: $c \n";
                                //output: Subtract AND Assignment Operation Result: 92 

                                $c *= $a;
                                echo "Multiply AND Assignment Operation Result: $c \n";
                                //output: Multiply AND Assignment Operation Result: 5704 

                                $c /= $a;
                                echo "Division AND Assignment Operation Result: $c \n";
                                //output: Division AND Assignment Operation Result: 92 

                                $c %= $a;
                                echo "Modulus AND Assignment Operation Result: $c";
                                //output: Modulus AND Assignment Operation Result: 30
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