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
                    <h3>PHP - Arithmetic</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p>We use Arithmetic operators to perform mathematical operations like addition, subtraction, multiplication, division, etc. on the given operands. Arithmetic operators (excluding the increment and decrement operators) always work on two operands, however the type of these operands should be the same.</p>    
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">$a = 52;</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">$b = -10;</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">$c = $a + $b;</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">echo "Addition Operation Result: $c &lt;br&gt;";</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">$c = $a - $b;</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">echo "Subtraction Operation Result: $c &lt;br&gt;";</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">$c = $a * $b;</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">echo "Multiplication Operation Result: $c &lt;br&gt;";</span></p>
                        <p><span class="numbers">10.</span><span class="yellow">$c = $a / $b;</span></p>
                        <p><span class="numbers">11.</span><span class="yellow">echo "Division Operation Result: $c &lt;br&gt;";</span></p>
                        <p><span class="numbers">12.</span><span class="yellow">$c = $a % $b;</span></p>
                        <p><span class="numbers">13.</span><span class="yellow">echo "Modulus Operation Result: $c &lt;br&gt;";</span></p>
                        <p><span class="numbers">14.</span><span class="yellow">$c = $a++;</span></p>
                        <p><span class="numbers">15.</span><span class="yellow">echo "Increment Operation Result: $c &lt;br&gt;";</span></p>
                        <p><span class="numbers">16.</span><span class="yellow">$c = $a--;</span></p>
                        <p><span class="numbers">17.</span><span class="yellow">echo "Decrement Operation Result: $c";</span></p>
                        <p><span class="opse-numbers">18.</span><span class="pink">?&gt</span></p>

                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Output</h3>
                    </div>
                    <div class="sub-context">
                        <p>
                            <?php
                                    $a = 52;
                                    $b = -10;

                                    $c = $a + $b;
                                    echo "Addition Operation Result: $c <br>";

                                    $c = $a - $b;
                                    echo "Subtraction Operation Result: $c <br>";

                                    $c = $a * $b;
                                    echo "Multiplication Operation Result: $c <br>";

                                    $c = $a / $b;
                                    echo "Division Operation Result: $c <br>";

                                    $c = $a % $b;
                                    echo "Modulus Operation Result: $c <br>";

                                    $c = $a++;
                                    echo "Increment Operation Result: $c <br>";

                                    $c = $a--;
                                    echo "Decrement Operation Result: $c";

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