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

        <!--
            Echo out the result within a structured HTML page. Echo out the HTML structure with PHP.
            Header - With an H1
            Main content - Put the examples in here
            Footer - Write some generic footer content like a copyright
        -->
        <h2>4. Echo out the result within a structured HTML page. Echo out the HTML structure with PHP.</h2>

        <?php
        echo '<div class="wrapper">';

        //header
        echo "<header/>";
        echo "<h1>This is a header</h1>";
        echo "</header>";

        //main
        echo "<main/>";
        echo ("
                <div>
                    <h1>Main Body</h1>
                <div>
                <div>
                    <p>Intro sentence</p>
                    <p>Ending sentence</p>
                    <p>Mid sentence</p>
                </div>
            ");
        echo "</main>";

        echo ("
                    <footer>
                        <p>&copy; Awesome website</p>
                    </footer>
                ");

        echo '</div>';
        ?>

    </body>

</html>