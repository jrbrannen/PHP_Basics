<?php       
        //variables
        $myName = "Jeremy Brannen"; // 1. Create a variable called yourName.  Assign it a value of your name
        $number1 = 5;               // 4. Create the following variables:  number1, number2 and total.  Assign a value to them. 
        $number2 = 7;
        $total = $number1 + $number2;

        $phpArray = array("PHP", "HTML", "JavaScript");  // 6. Create a PHP variable that is an array containing the values 'PHP', 'HTML' and 'Javascript'.
  
        function buildJavaScriptArray(){            // 6. Then, use a PHP loop to iterate through the array and create a javascript array that contains those values
            global $phpArray;
            echo"<script>let javaScriptArray = [];</script>"; // javaScript array built using php

            for($i = 0; $i < count($phpArray); $i++){
                echo"<script>javaScriptArray[$i] = '$phpArray[$i]'</script>";
            }//end for loop

        };//end buildJavaScriptArray()

        // call the function to build the array in javaScript
        buildJavaScriptArray();     
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatable" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Document</title>
        <!--Jeremy Brannen
            3-1 PHP Basics Assignment-->
        
        <script>
            function pageload(){

                function displayArray(){        // 6.  Lastly, write a javascript script that displays the values of the array on the page.
                    for(let i = 0; i < javaScriptArray.length; i++){
                        let div = document.createElement("div");
                        div.innerHTML = javaScriptArray[i];
                        document.querySelector("#arrayOutput").appendChild(div);
                    }
                }//end displayArray()

                displayArray();   // call the function in JavaScript

            }//end pageload()
            
        </script>
        <style>
            
        </style>
    </head>

    <body onload="pageload()">
            
        <?php 
            echo"<h1>3-1 PHP Basics</h1>";  // 2. Display the assignment name in an h1 element on the page. Include the elements in your output.
        ?>
        <h2> 
            <?php 
                echo"$myName";  //3. Use HTML to put an h2 element on the page. Use PHP to display your name inside the element using the variable.
            ?>
        </h2>

        <p> <!-- 5. Display the value of each variable and the total variable when you add them together -->
            <?php 
                echo"<div>First Number = $number1</div>";
                echo"<div>Second Number = $number2</div>";
                echo"<div>Total = $total</div>";
            ?>
        </p>

        <p id="arrayOutput">
        </p>

    </body>

</html>