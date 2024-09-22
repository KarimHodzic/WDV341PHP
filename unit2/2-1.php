<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2-1</title>

    <?php

    /*

    1. Create a variable called yourName.  Assign it a value of your name.✔
    2. Display the assignment name in an h1 element on the page. Include the elements in your output.✔ 
    3. Use HTML to put an h2 element on the page. Use PHP to display your name inside the element using the variable.✔
    4. Create the following variables:  number1, number2 and total.  Assign a value to them.✔
    5. Display the value of each variable and the total variable when you add them together.✔
    6. Create a PHP variable that is an array containing the values 'PHP', 'HTML' and 'Javascript'. Then, use a PHP loop to iterate through the array and create a javascript array that contains those values. Lastly, write a javascript script that displays the values of the array on the page.✔

    */

    $yourName = "Karim Hodzic";
    $number1 = 5;
    $number2 = 10;
    $total = $number1 + $number2;

    $outputArray = ['PHP', 'HTML', 'JavaScript'];


    ?>
    <script>
        <?php

            echo "let javascriptArray = [";

            foreach ($outputArray as $language) {
                echo "'" . $language . "', ";
            }

            echo "]";
        ?>

        console.log(javascriptArray);
    </script>
</head>
<body>
    <?php
        echo "<h1>WDV341 Unit 2-1: PHP Basics</h1>\n";
    ?>
    <h2><?php echo $yourName ?></h2>
    <h3><?php echo "$number1 plus $number2 equals $total" ?></h3>
    <script>
        document.write(javascriptArray);
    </script>
</body>
</html>