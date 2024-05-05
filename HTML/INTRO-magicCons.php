<?php 
namespace myspace;
?>


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
                    <h3>PHP - Magic Constant</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p class="marg-bot">The magical constants in PHP are predefined constants. They are available to any script on which they run, and they change depending on where they are used. All these "magical" constants are resolved at compile time, unlike regular constants, which are resolved at runtime.</p>
                        <p class="marg-bot">There are nine magical constants in PHP. These special constants are case insensitive.</p>

                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">namespace myspace;</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">class myPeanut {</span></p>
                        <p><span class="numbers">4.</span><span class="yellow"> public function __construct() {</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">  echo "Name of the class: " . __CLASS__ . " in " . __NAMESPACE__ . "\n\n";</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">  }    </span></p>
                        <p><span class="numbers">7.</span><span class="yellow">}    </span></p>
                        <p><span class="numbers">8.</span><span class="yellow">$class_name = __NAMESPACE__ . '\myPeanut'; </span></p>
                        <p><span class="numbers">9.</span><span class="yellow">$a = new $class_name;</span></p>
                        <p><span class="numbers">10.</span><span class="yellow"></span></p>
                        <p><span class="numbers">11.</span><span class="yellow"> $x="Hello World";</span></p>
                        <p><span class="numbers">12.</span><span class="yellow">echo "$x. The current Line number is " . __LINE__ . ".";</span></p>
                        <p><span class="numbers">13.</span><span class="yellow">   $x="Hello World";</span></p>
                        <p><span class="numbers">14.</span><span class="yellow">  echo "\n\n$x. Current PHP script name is " . __FILE__ . ".";</span></p>
                        <p><span class="numbers">15.</span><span class="yellow">   $x="Hello World";</span></p>
                        <p><span class="numbers">16.</span><span class="yellow"> echo "\n\n$x. Directory of the Current PHP script name is " . __DIR__ . ".\n\n";</span></p>
                        <p><span class="numbers">17.</span><span class="yellow"></span></p>
                        <p><span class="numbers">18.</span><span class="yellow">   function hello(){</span></p>
                        <p><span class="numbers">19.</span><span class="yellow">$x="Hello World";</span></p>
                        <p><span class="numbers">20.</span><span class="yellow"> echo "$x. The function name is ". __FUNCTION__ . "\n\n";  </span></p>
                        <p><span class="numbers">21.</span><span class="yellow"> }</span></p>
                        <p><span class="numbers">22.</span><span class="yellow">    hello();  
                        </span></p>
                        <p><span class="numbers">23.</span><span class="yellow">class myclass {  </span></p>
                        <p><span class="numbers">24.</span><span class="yellow"> public function __construct() {  </span></p>
                        <p><span class="numbers">25.</span><span class="yellow">echo "Inside the constructor of ". __CLASS__ . PHP_EOL;</span></p>
                        <p><span class="numbers">26.</span><span class="yellow"> } </span></p>
                        <p><span class="numbers">27.</span><span class="yellow"> function getClassName(){         </span></p>
                        <p><span class="numbers">28.</span><span class="yellow">echo "from an instance method of " . __CLASS__ . "\n\n";  </span></p>
                        <p><span class="numbers">29.</span><span class="yellow">     }    </span></p>
                        <p><span class="numbers">30.</span><span class="yellow"> }    </span></p>
                        <p><span class="numbers">31.</span><span class="yellow">  $obj = new myclass; </span></p>
                        <p><span class="numbers">32.</span><span class="yellow">$obj->getClassName();</span></p>
                        <p><span class="numbers">33.</span><span class="yellow"></span></p>
                        <p><span class="numbers">34.</span><span class="yellow">class myLove {  </span></p>
                        <p><span class="numbers">35.</span><span class="yellow"> public function __construct() {    </span></p>
                        <p><span class="numbers">36.</span><span class="yellow"> echo "Calling " . __METHOD__ . " of " . __CLASS__ ."\n";</span></p>
                        <p><span class="numbers">37.</span><span class="yellow">  }    </span></p>
                        <p><span class="numbers">38.</span><span class="yellow">   $obj->mymethod();</span></p>
                        <p><span class="numbers">39.</span><span class="yellow">trait mytrait {</span></p>
                        <p><span class="numbers">40.</span><span class="yellow">public function hello() {</span></p>
                        <p><span class="numbers">41.</span><span class="yellow">echo "Hello World from " . __TRAIT__ ."\n\n";</span></p>
                        <p><span class="numbers">42.</span><span class="yellow">   }</span></p>
                        <p><span class="numbers">43.</span><span class="yellow"> }</span></p>
                        <p><span class="numbers">44.</span><span class="yellow">  class myHoney {</span></p>
                        <p><span class="numbers">45.</span><span class="yellow">  use mytrait;</span></p>
                        <p><span class="numbers">46.</span><span class="yellow">  }</span></p>
                        <p><span class="numbers">47.</span><span class="yellow">$obj = new myHoney();</span></p>
                        <p><span class="numbers">48.</span><span class="yellow">  $obj->hello();</span></p>
                        <p><span class="numbers">49.</span><span class="yellow">     namespace myspace;</span></p>
                        <p><span class="numbers">50.</span><span class="yellow">class mySugar {  </span></p>
                        <p><span class="numbers">51.</span><span class="yellow">public function __construct() {    </span></p>
                        <p><span class="numbers">52.</span><span class="yellow">echo "Name of the class: " . mySugar::class ;</span></p>
                        <p><span class="numbers">50.</span><span class="yellow">     }    </span></p>
                        <p><span class="numbers">53.</span><span class="yellow">  }    </span></p>
                        <p><span class="numbers">54.</span><span class="yellow"></span></p>
                        <p><span class="numbers">55.</span><span class="yellow"> use myspace;  </span></p>
                        <p><span class="numbers">56.</span><span class="yellow"> $a = new mySugar;</span></p>
                        <p><span class="numbers">57.</span><span class="yellow"></span></p>
                        <p><span class="numbers">58.</span><span class="yellow"></span></p>
                        <p><span class="opse-numbers">59.</span><span class="pink">&lt?php</span></p>

               
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Output</h3>
                    </div>
                    <div class="sub-context">
                        <p>
                        <?php
                               namespace myspace;
                                class myPeanut {    
                                public function __construct() {    
                                    echo "Name of the class: " . __CLASS__ . " in " . __NAMESPACE__ . "<br>";
                                }    
                                }    
                                $class_name = __NAMESPACE__ . '\myPeanut';    
                                $a = new $class_name;  


                                $x="Hello World";
                                echo "$x. The current Line number is " . __LINE__ . ".";


                                $x="Hello World";
                                echo "<br><br>$x. Current PHP script name is " . __FILE__ . ".";


                                $x="Hello World";
                                echo "<br><br>$x. Directory of the Current PHP script name is " . __DIR__ . ".<br><br>";


                                function hello(){    
                                    $x="Hello World";  
                                    echo "$x. The function name is ". __FUNCTION__ . "<br><br>";  
                                    }
                                    hello();  


                                    class myclass {    
                                        public function __construct() {    
                                        echo "Inside the constructor of ". __CLASS__ . PHP_EOL;    
                                        }    
                                        function getClassName(){                      
                                        echo "from an instance method of " . __CLASS__ . "<br><br>";  
                                        }    
                                    }    
                                    $obj = new myclass;    
                                    $obj->getClassName();    


                                    class myLove {    
                                        public function __construct() {    
                                        echo "Calling " . __METHOD__ . " of " . __CLASS__ ."<br>";
                                        }    
                                        function mymethod(){                      
                                        echo "Calling " . __METHOD__ . " of " . __CLASS__ ."<br><br>";
                                        }    
                                    }    
                                    $obj = new myLove;    
                                    $obj->mymethod();


                                    trait mytrait {
                                        public function hello() {
                                        echo "Hello World from " . __TRAIT__ ."<br><br>";
                                        }
                                    }
                                    class myHoney {
                                        use mytrait;
                                    }
                                    $obj = new myHoney();
                                    $obj->hello();


                                    namespace myspace;
                                    class mySugar {    
                                        public function __construct() {    
                                        echo "Name of the class: " . mySugar::class ;
                                        }    
                                    }
                                    use myspace;  
                                    $a = new mySugar;
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