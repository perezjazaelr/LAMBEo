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
                    <h3>PHP -  Spaceship Operator</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p class="marg-bot">The Spaceship operator is one of the many new features introduced in PHP with its 7.0 version. It is a three-way comparison operator.</p>
                        <p class="marg-bot">The conventional comparison operators (<, >, !=, ==, etc.) return true or false (equivalent to 1 or 0). On the other hand, the spaceship operator has three possible return values: -1,0,or 1. This operator can be used with integers, floats, strings, arrays, objects, etc.</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">echo "-EQUAL-" . PHP_EOL;</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">$x = 5;</span></p>
                        <p><span class="numbers">4.</span><span class="yellow"> $y = 10;</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">$z = $x <=> $y/2;</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">echo "Result: $z" . PHP_EOL;</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">$x = 4;</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">$y = 10;</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">$z = $x <=> $y/2;</span></p>
                        <p><span class="numbers">11.</span><span class="yellow"></span></p>
                        <p><span class="numbers">12.</span><span class="yellow">echo "Result: $z" . PHP_EOL;;</span></p>
                        <p><span class="numbers">10.</span><span class="yellow">echo "-GREATER THAN-" . PHP_EOL;</span></p>
                        <p><span class="numbers">13.</span><span class="yellow">$x = 7;</span></p>
                        <p><span class="numbers">14.</span><span class="yellow">$y = 10;</span></p>
                        <p><span class="numbers">15.</span><span class="yellow"> $z = $x <=> $y/2;</span></p>
                        <p><span class="numbers">16.</span><span class="yellow"> echo "Result: $z" . PHP_EOL;;</span></p>
                        <p><span class="numbers">17.</span><span class="yellow"></span></p>
                        <p><span class="numbers">18.</span><span class="yellow"></span></p>
                        <p><span class="numbers">19.</span><span class="yellow"> echo "-STRING COMPARISON-" . PHP_EOL;</span></p>
                        <p><span class="numbers">20.</span><span class="yellow">$x = "bat";</span></p>
                        <p><span class="numbers">21.</span><span class="yellow"> $y = "ball";</span></p>
                        <p><span class="numbers">22.</span><span class="yellow"> $z = $x <=> $y;</span></p>
                        <p><span class="numbers">23.</span><span class="yellow"></span></p>
                        <p><span class="numbers">24.</span><span class="yellow">echo "Result: $z" . PHP_EOL;</span></p>
                        <p><span class="numbers">25.</span><span class="yellow"></span></p>
                        <p><span class="numbers">26.</span><span class="yellow"></span></p>
                        <p><span class="numbers">27.</span><span class="yellow"></span></p>
                        <p><span class="numbers">28.</span><span class="yellow"></span></p>
                        <p><span class="numbers">29.</span><span class="yellow"></span></p>
                        <p><span class="numbers">30.</span><span class="yellow"></span></p>
                        <p><span class="opse-numbers">31.</span><span class="pink">?&gt</span></p>  
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Output</h3>
                    </div>
                    <div class="sub-context">
                        <p>
                            <?php
                            echo "-EQUAL-" . PHP_EOL;
                            $x = 5;
                            $y = 10;
                            $z = $x <=> $y/2;

                            echo "Result: $z" . PHP_EOL;

                            echo "-LESSTHAN-" . PHP_EOL;
                            $x = 4;
                            $y = 10;
                            $z = $x <=> $y/2;


                            echo "Result: $z" . PHP_EOL;;


                            echo "-GREATER THAN-" . PHP_EOL;
                            $x = 7;
                            $y = 10;
                            $z = $x <=> $y/2;


                            echo "Result: $z" . PHP_EOL;;


                            echo "-STRING COMPARISON-" . PHP_EOL;
                            $x = "bat";
                            $y = "ball";
                            $z = $x <=> $y;


                            echo "Result: $z" . PHP_EOL;
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