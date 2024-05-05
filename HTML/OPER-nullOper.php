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
                    <h3>PHP -  Null Coalescing Operator</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p>
                            The Null Coalescing Operator (??) is used to check if a variable is set and not null. If it's set and not null, it returns its value; otherwise, it returns a default value specified after the ?? operator.
                            </p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">$num = 10;</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">$val1 = $num ?? 0;</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">echo "The number val is $val1";</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">echo PHP_EOL;</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">$num1 = 10;</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">$val2 = $num1 ?? 0;</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">echo "The number in val1 is $val2";</span></p>
                        <p><span class="opse-numbers">9.</span><span class="pink">?&gt</span></p>

                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Output</h3>
                    </div>
                    <div class="sub-context">
                        <p>
                            <?php
                            $num = 10;
                            $val1 = $num ?? 0;
                            echo "The number val is $val1";


                            echo PHP_EOL;
                            $num1 = 10;
                            $val2 = $num1 ?? 0;
                            echo "The number in val1 is $val2";
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