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
            <img  onclick="Mylandpage()" src="../PICTURES/Untitled-1.png" alt="">
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
                    <h3>PHP - String</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p class="marg-bot">A string is a sequence of characters, like 'PHP supports string operations.' A string in PHP as an array of bytes and an integer indicating the length of the buffer. In PHP, a character is the same as a byte. This means that PHP only supports a 256-character set, and hence does not offer native Unicode support.</p>
                        <p class="marg-bot">PHP supports single quoted as well as double quoted string formation. Both the representations 'this is a simple string' as well as "this is a simple string" are valid. PHP also has Heredoc and Newdoc representations of string data type.</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">//Single Quoted The escape sequences such as "\r" or "\n" will be treated literally and their special meaning will not be interpreted. The variables too will not be expanded if they appear in a single quoted string.</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">$str = 'This will not expand: \n a newline';</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">echo $str . PHP_EOL;</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">$x=100;</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">$str = 'Value of x = $x';</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">echo $str;</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">echo "\n\n";</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">$price = 200;</span></p>
                        <p><span class="numbers">10.</span><span class="yellow">echo "Price = \$ $price\n\n";</span></p>
                        <p><span class="numbers">11.</span><span class="yellow">$str = "\120\110\120";</span></p>
                        <p><span class="numbers">12.</span><span class="yellow">echo "PHP with Octal: " . $str;</span></p>
                        <p><span class="numbers">13.</span><span class="yellow">echo PHP_EOL;</span></p>
                        <p><span class="numbers">14.</span><span class="yellow">$str = "\x50\x48\x50";</span></p>
                        <p><span class="numbers">15.</span><span class="yellow">echo "PHP with Hexadecimal: " . $str;</span></p>
                        <p><span class="numbers">16.</span><span class="yellow">echo "\n\n";</span></p>
                        <p><span class="numbers">17.</span><span class="yellow">//String Concatenation</span></p>
                        <p><span class="numbers">18.</span><span class="yellow">$string1="Integrative Programming";</span></p>
                        <p><span class="numbers">19.</span><span class="yellow">$string2="and Technologies";</span></p>
                        <p><span class="numbers">20.</span><span class="yellow">echo $string1 . " " . $string2;</span></p>
                        <p><span class="numbers">21.</span><span class="yellow">echo "\n\n";</span></p>
                        <p><span class="numbers">22.</span><span class="yellow">//The strlen() function is used to find the length of a string.</span></p>
                        <p><span class="numbers">23.</span><span class="yellow">echo strlen("Para sa Streets");</span></p>
                        <p><span class="numbers">24.</span><span class="yellow">echo "\n\n";</span></p>
                        <p><span class="numbers">25.</span><span class="yellow">//The strpos() function is used to search for a string or character within a string.</span></p>
                        <p><span class="numbers">26.</span><span class="yellow">echo strpos("Mahal ko o Mahal ako!","ako");</span></p>
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
                        
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../JS/script.js">
    </script>
</body>
</html>