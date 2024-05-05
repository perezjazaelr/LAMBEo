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
                    <h3>PHP - Comparison Operator</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p>In PHP, Comparison operators are used to compare two values and determine their relationship. These operators return a Boolean value, either True or False, based on the result of the comparison.</p>
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
                        <p><span class="numbers">4.</span><span class="yellow">if ($a == $b) {</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">echo "TEST1: a is equal to b \n";</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">} else {</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">echo "TEST1: a is not equal to b \n"; // output: TEST1: a is not equal to b</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">}</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">if ($a > $b) {</span></p>
                        <p><span class="numbers">10.</span><span class="yellow">echo "TEST2: a is greater than b \n";</span></p>
                        <p><span class="numbers">11.</span><span class="yellow">} else {</span></p>
                        <p><span class="numbers">12.</span><span class="yellow">echo "TEST2: a is not greater than b \n"; // output: TEST2: a is greater than b</span></p>
                        <p><span class="numbers">13.</span><span class="yellow">}</span></p>
                        <p><span class="numbers">14.</span><span class="yellow">if ($a < $b) {</span></p>
                        <p><span class="numbers">15.</span><span class="yellow">echo "TEST3: a is less than b \n";</span></p>
                        <p><span class="numbers">16.</span><span class="yellow">} else {</span></p>
                        <p><span class="numbers">17.</span><span class="yellow">echo "TEST3: a is not less than b \n"; // output: TEST3: a is not less than b</span></p>
                        <p><span class="numbers">18.</span><span class="yellow">}</span></p>
                        <p><span class="numbers">19.</span><span class="yellow">if ($a != $b) {</span></p>
                        <p><span class="numbers">20.</span><span class="yellow">echo "TEST4: a is not equal to b \n";</span></p>
                        <p><span class="numbers">21.</span><span class="yellow">} else {</span></p>
                        <p><span class="numbers">22.</span><span class="yellow">echo "TEST4: a is equal to b \n"; // output: TEST4: a is not equal to b</span></p>
                        <p><span class="numbers">23.</span><span class="yellow">}</span></p>
                        <p><span class="numbers">24.</span><span class="yellow">if ($a >= $b) {</span></p>
                        <p><span class="numbers">25.</span><span class="yellow">echo "TEST5: a is either greater than or equal to b \n";</span></p>
                        <p><span class="numbers">26.</span><span the="yellow">} else {</span></p>
                        <p><span class="numbers">27.</span><span the="yellow">echo "TEST5: a is neither greater than nor equal to b \n"; // output: TEST5: a is either greater than or equal to b</span></p>
                        <p><span class="numbers">28.</span><span class="yellow">}</span></p>
                        <p><span class="numbers">29.</span><span class="yellow">if ($a <= $b) {</span></p>
                        <p><span class="numbers">30.</span><span class="yellow">echo "TEST6: a is either less than or equal to b \n";</span></p>
                        <p><span class="numbers">31.</span><span class="yellow">} else {</span></p>
                        <p><span class="numbers">32.</span><span class="yellow">echo "TEST6: a is neither less
                            <p><span class="opse-numbers">33.</span><span class="pink">?&gt</span></p>
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
                            
                                if ($a == $b) {
                                echo "TEST1: a is equal to b \n";
                                } else {						// output: TEST1: a is not equal to b  
                                echo "TEST1: a is not equal to b \n";
                                }
                            
                                if ($a > $b) {
                                echo "TEST2: a is greater than b \n";
                                } else {						// output: TEST2: a is greater than b
                                echo "TEST2: a is not greater than b \n";
                                }
                            
                                if ($a < $b) {
                                echo "TEST3: a is less than  b \n";
                                } else {						// output: TEST3: a is not less than b
                                echo "TEST3: a is not less than b \n";
                                }
                            
                                if ($a != $b) {
                                echo "TEST4: a is not equal to b \n";
                                } else {						// output: TEST4: a is not equal to b
                                echo "TEST4: a is equal to b \n";
                                }
                            
                            
                            
                            
                            
                                if ($a >= $b) {
                                echo "TEST5: a is either greater than or equal to b \n";
                                } else {						
                                echo "TEST5: a is neither greater than nor equal to b \n";
                                }    
                            // output: TEST5: a is either greater than or equal to b
                            
                            
                                if ($a <= $b) {
                                echo "TEST6: a is either less than or equal to b \n";
                                } else {						
                                echo "TEST6: a is neither less than nor equal to b";
                                }	
                            // output:  TEST6: a is neither less than nor equal to b
                                        
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