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
                <div class="main-header">
                    <h3>WHAT IS <span>php</span>?</h3>
                </div>
                <div class="land-box">
                    <div class="land-header">
                        <h3> Hypertext Preprocessor (PHP)</h3>
                    </div>
                    <div class="land-context">
                        <p>PHP is an open-source general purpose scripting language, widely used for website development. It was developed by Rasmus Lerdorf. PHP stands for a recursive acronym PHP: Hypertext Preprocessor.
                            PHP is the world’s most popular server-side programming language. Its latest version is PHP 8.2.8, released on July 4th, 2023.
                            PHP is a server-side scripting language that is embedded in HTML. PHP is a cross-platform language, capable of running on all major operating system platforms and with most of the web server programs such as Apache, IIS, lighttpd and nginx.
                            A large number of reusable classes and libraries are available on PEAR and Composer. PEAR (PHP Extension and Application Repository) is a distribution system for reusable PHP libraries or classes. Composer is a dependency management tool in PHP.
                        </p>
                    </div>
                </div>
                
            </div>
        </div>

    </div>

    <script src="../JS/script.js"></script>
</body>
</html>