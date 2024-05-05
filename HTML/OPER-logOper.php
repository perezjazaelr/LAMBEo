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
                    <h3>PHP - Logical Operator</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p class="marg-bot">In PHP, logical operators are used to combine conditional statements. These operators allow you to create more complex conditions by combining multiple conditions together.</p>
                        <p class="marg-bot">Logical operators are generally used in conditional statements such as if, while, and for loops to control the flow of program execution based on specific conditions.</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">$a = 60;</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">$b = 0;</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">if ($a && $b) {</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">    echo "TEST1: Both a and b are true \n";</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">} else {</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">    echo "TEST1: Either a or b is false \n"; // output: TEST1: Either a or b is false</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">}</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">if ($a and $b) {</span></p>
                        <p><span class="numbers">10.</span><span class="yellow">    echo "TEST2: Both a and b are true \n";</span></p>
                        <p><span class="numbers">11.</span><span class="yellow">} else {</span></p>
                        <p><span class="numbers">12.</span><span class="yellow">    echo "TEST2: Either a or b is false \n"; // output: TEST2: Either a or b is false</span></p>
                        <p><span class="numbers">13.</span><span class="yellow">}</span></p>
                        <p><span class="numbers">14.</span><span class="yellow">if ($a || $b) {</span></p>
                        <p><span class="numbers">15.</span><span class="yellow">    echo "TEST3: Either a or b is true \n";</span></p>
                        <p><span class="numbers">16.</span><span class="yellow">} else {</span></p>
                        <p><span class="numbers">17.</span><span class="yellow">    echo "TEST3: Both a and b are false \n"; // output: TEST3: Either a or b is true</span></p>
                        <p><span class="numbers">18.</span><span class="yellow">}</span></p>
                        <p><span class="numbers">19.</span><span class="yellow">if ($a or $b) {</span></p>
                        <p><span class="numbers">20.</span><span class="yellow">    echo "TEST4: Either a or b is true \n";</span></p>
                        <p><span class="numbers">21.</span><span class="yellow">} else {</span></p>
                        <p><span class="numbers">22.</span><span class="yellow">    echo "TEST4: Both a and b are false \n"; // output: TEST4: Either a or b is true</span></p>
                        <p><span class="numbers">23.</span><span class="yellow">}</span></p>
                        <p><span class="numbers">24.</span><span class="yellow">$a = 50;</span></p>
                        <p><span class="numbers">25.</span><span class="yellow">$b = 10;</span></p>
                        <p><span class="numbers">26.</span><span class="yellow">if ($a) {</span></p>
                        <p><span class="numbers">27.</span><span class="yellow">    echo "TEST5: a is true \n"; // output: TEST5: a is true</span></p>
                        <p><span class="numbers">28.</span><span class="yellow">} else {</span></p>
                        <p><span class="numbers">29.</span><span class="yellow">    echo "TEST5: a is false \n";</span></p>
                        <p><span class="numbers">30.</span><span class="yellow">}</span></p>
                        <p><span class="numbers">31.</span><span class="yellow">if ($b) {</span></p>
                        <p><span class="numbers">32.</span><span class="yellow">    echo "TEST6: b is true \n"; // output: TEST6: b is true</span></p>
                        <p><span class="numbers">33.</span><span class="yellow">} else {</span></p>
                        <p><span class="numbers">34.</span><span class="yellow">    echo "TEST6: b is false \n";</span></p>
                        <p><span class="numbers">35.</span><span class="yellow">}</span></p>
                        <p><span class="numbers">36.</span><span class="yellow">if (!$a) {</span></p>
                        <p><span class="numbers">37.</span><span class="yellow">    echo "TEST7: a is true \n"; // output: TEST7: a is false</span></p>
                        <p><span class="numbers">38.</span><span class="yellow">} else {</span></p>
                        <p><span class="numbers">39.</span><span class="yellow">    echo "TEST7: a is false \n";</span></p>
                        <p><span class="numbers">40.</span><span class="yellow">}</span></p>
                        <p><span class="numbers">41.</span><span class="yellow">if (!$b) {</span></p>
                        <p><span class="numbers">42.</span><span class="yellow">    echo "TEST8: b is true \n"; // output: TEST8: b is false</span></p>
                        <p><span class="numbers">43.</span><span class="yellow">} else {</span></p>
                        <p><span class="numbers">44.</span><span class="yellow">    echo "TEST8: b is false";</span></p>
                        <p><span class="numbers">45.</span><span class="yellow">}</span></p>
                        <p><span class="opse-numbers">46.</span><span class="pink">?&gt</span></p>

                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Output</h3>
                    </div>
                    <div class="sub-context">
                        <p>
                            <?php
                                $a = 60;
                                $b = 0;

                                if ($a && $b) {
                                    echo "TEST1: Both a and b are true \n";
                                } else {
                                    echo "TEST1: Either a or b is false \n";
                                } 	
                                    // output: TEST1: Either a or b is false 

                                if ($a and $b) {
                                    echo "TEST2: Both a and b are true \n";
                                } else {
                                    echo "TEST2: Either a or b is false \n";
                                }
                                    // output: TEST2: Either a or b is false 

                                if ($a || $b) {
                                    echo "TEST3: Either a or b is true \n";
                                } else {
                                    echo "TEST3: Both a and b are false \n";
                                }
                                    // output: TEST3: Either a or b is true 

                                if ($a or $b) {
                                    echo "TEST4: Either a or b is true \n";
                                } else {
                                    echo "TEST4: Both a and b are false \n";
                                }
                                    // output: TEST4: Either a or b is true 


                                $a = 50;
                                $b = 10;

                                if ($a) {
                                    echo "TEST5: a is true \n";
                                } else {
                                    echo "TEST5: a is false \n";
                                }
                                    // output: TEST5: a is true 

                                if ($b) {
                                    echo "TEST6: b is true \n";
                                } else {
                                    echo "TEST6: b is false \n";
                                }
                                    // output: TEST6: b is true 

                                if (!$a) {
                                    echo "TEST7: a is true \n";
                                } else {
                                    echo "TEST7: a is false \n";
                                }
                                    // output: TEST7: a is false 
                                
                                if (!$b) {
                                    echo "TEST8: b is true \n";
                                } else {
                                    echo "TEST8: b is false";
                                }

                                // output: TEST8: b is false

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