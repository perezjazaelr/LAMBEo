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
                    <h3>PHP - Heredoc & Nowdoc</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p class="marg-bot">PHP provides two alternatives for declaring single or double quoted strings in the form of heredoc and newdoc syntax.</p>
                        <p class="marg-bot">The single quoted string doesn’t interpret the escape characters and doesn’t expand the variables.</p>
                        <p class="marg-bot">On the other hand, if you declare a double quoted string that contains a double quote character itself, you need to escape it by the "\" symbol. The heredoc syntax provides a convenient method.</p>
                        <p class="marg-bot">Heredoc Strings in PHP</p>
                        <p class="marg-bot">The heredoc strings in PHP are much like double-quoted strings, without the double-quotes. It means that they don’t need to escape quotes and expand variables.</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">$str1 = &lt;&lt;&lt;STRING</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">Ako 'to</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">   si Natoy</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">      mahal</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">         na</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">            mahal</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">               ka</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">STRING;</span></p>
                        <p><span class="numbers">10.</span><span class="yellow">echo $str1;</span></p>
                        <p><span class="opse-numbers">11.</span><span class="pink">?&gt</span></p>

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