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
                    <h3>PHP - Integers</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p class="marg-bot">Integer is one of the built-in scalar types in PHP. A whole number, without a decimal point in the literal, is of the type "int" in PHP. An integer can be represented in decimal (base 10), hexadecimal (base 16), octal (base 8) or binary (base 2) notation.</p>
                        <p class="marg-bot">To use octal notation, a number is preceded with "0o" or "0O" (PHP 8.1.0 and earlier). From PHP 8.1.0 onwards, a number prefixed with "0" and without a decimal point is an octal number.</p>
                        <p class="marg-bot">To use hexadecimal notation, precede the number with "0x". To use binary notation, precede the number with "0b".</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">// Decimal Integer</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">$a = 1234;</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">echo "1234 is an Integer in decimal notation: $a\n";</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">// Octal Integer (Equivalent to 83 in decimal)</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">$b = 0123;</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">echo "0o123 is an integer in Octal notation: $b\n";</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">// Hexadecimal Integer (Equivalent to 26 in decimal)</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">$c = 0x1A;</span></p>
                        <p><span class="numbers">10.</span><span class="yellow">echo "0x1A is an integer in Hexadecimal notation: $c\n";</span></p>
                        <p><span class="numbers">11.</span><span class="yellow">// Binary Integer (Equivalent to 15 in decimal)</span></p>
                        <p><span class="numbers">12.</span><span class="yellow">$d = 0b1111;</span></p>
                        <p><span class="numbers">13.</span><span class="yellow">echo "0b1111 is an integer in binary notation: $d\n";</span></p>
                        <p><span class="numbers">14.</span><span class="yellow">echo "\n";</span></p>
                        <p><span class="numbers">15.</span><span class="yellow">// Large Integer (with potential overflow)</span></p>
                        <p><span class="numbers">16.</span><span the="yellow">$x = 1000000;</span></p>
                        <p><span class="numbers">17.</span><span class="yellow">$y = 50000000000000 * $x;</span></p>
                        <p><span class="numbers">18.</span><span class="yellow">echo "Multiplying a large number (50000000000000) by 1000000 may result in overflow:\n";</span></p>
                        <p><span class="numbers">19.</span><span class="yellow">var_dump($y);</span></p>
                        <p><span class="numbers">20.</span><span class="yellow">echo "\n";</span></p>
                        <p><span class="numbers">21.</span><span class="yellow">// Floating-Point Division</span></p>
                        <p><span class="numbers">22.</span><span class="yellow">$x = 10;</span></p>
                        <p><span class="numbers">23.</span><span class="yellow">$y = 3.5;</span></p>
                        <p><span class="numbers">24.</span><span class="yellow">// Regular Floating-Point Division</span></p>
                        <p><span class="numbers">25.</span><span class="yellow">$z = $x / $y;</span></p>
                        <p><span class="numbers">26.</span><span class="yellow">echo "Floating-Point Division of 10 by 3.5:\n";</span></p>
                        <p><span class="numbers">27.</span><span class="yellow">var_dump($z);</span></p>
                        <p><span class="numbers">28.</span><span class="yellow">// Integer Division (using intdiv function)</span></p>
                        <p><span class="numbers">29.</span><span class="yellow">$z = intdiv($x, $y);</span></p>
                        <p><span class="numbers">30.</span><span class="yellow">echo "Integer Division of 10 by 3.5 (using intdiv function):\n";</span></p>
                        <p><span class="numbers">31.</span><span class="yellow">var_dump($z);</span></p>
                        <p><span class="opse-numbers">32.</span><span class="pink">?&gt</span></p>

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