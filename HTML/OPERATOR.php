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
                    <h3 class="nav-header" onclick="My_OPERATOR()">PHP Operators</h3>
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
                <div class="main-header">
                    <h3>WHAT ARE OPERATORS IN PHP?</h3>
                </div>
                <div class="land-box">
                    <div class="land-header">
                        <h3> Hypertext Preprocessor (PHP)</h3>
                    </div>
                    <div class="land-context">
                        <p class="marg-bot">As in any programming language, PHP also has operators which are symbols (sometimes keywords) that are predefined to perform certain commonly required operations on one or more operands.</p>
                        <p class="marg-bot">For example, using the expression "4 + 5" is equal to 9. Here "4" and "5" are called operands and "+" is called an operator.</p>
                        <p class="marg-bot">We have the following types of operators in PHP −</p>
                        <p class="marg-bot">• Arithmetic Operators</p>
                        <p class="marg-bot">• Comparison Operators</p>
                        <p class="marg-bot">• Logical Operators</p>
                        <p class="marg-bot">• Assignment Operators</p>
                        <p class="marg-bot">• String Operators</p>
                        <p class="marg-bot">• Array Operators</p>
                        <p class="marg-bot">• Conditional (or Ternary Operators)</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../JS/script.js"></script>
</body>
</html>