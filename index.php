<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        * {
            border: 1px dashed red;
        }

        .footer {
            display: flex;
        }

        .footer div {
            flex: 1;
        }
    </style>

    <body>
        <h1>Exercise 3</h1>

        <!--
            Make an example of each loop: 
            while 
            do-while
            for
            foreach
        -->
        <h2>1. Make an example of each loop.</h2>

        <h3>while</h3>
        <?php
            $i = 0;
            while ($i < 10) {
                $i++;
                echo "current number is: " . $i . "<br />";
            }
        ?>

        <h3>do-while</h3>
        <?php
            $i = 0;

            do {
                $i++;
                echo "current number is: " . $i . "<br />";
            } while ($i < 10);
        ?>

        <h3>for</h3>
        <?php
            $fruits = array("apple", "orange", "banana", "kiwi");
            $arr_length = count($fruits);

            for ($i = 0; $i < $arr_length; $i++)
            {
                echo $fruits[$i]."<br />";
            }
        ?>

        <h3>foreach</h3>
        <?php
            $vegetables = array("carrots", "cabbage", "onion", "potato");

            foreach ($vegetables as $vegetable)
            {
                echo $vegetable . "<br />";
            }
        ?>

        <!--
            Make an example of a built in function.
            Look up any example and use it
        -->

        <h2>2. Make an example of a built in function.</h2>

        <h3>array_pop() Function</h3>
        <?php
            $chips = array("lays", "doritos", "ms. vickeys", "no name");

            array_pop($chips);

            print_r($chips);
        ?>

        <!--
            Make an example of a user made function.
            Make any function and echo the result.
        -->

        <h2>3. Make an example of a user made function.</h2>

        <?php
            function all_caps($string) 
            {
                echo strtoupper($string);
            };

            echo all_caps("hello, i am learning php.");
        ?>

    </body>

</html>