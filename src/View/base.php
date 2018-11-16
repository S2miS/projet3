<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title></title>
        <meta name="title" content="" >
        <meta name="description" content="" >
        <meta name="keywords" content="" >
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
        <link rel='stylesheet' href="public/css/main.css" type="text/css">
        <link rel='stylesheet' href="public/css/reset.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>

    <body>
    <header>
        <?php
            require_once("navigation/nav.php");
        ?>
    </header>
    <div>
        <?=
            $content;
        ?>
    </div>

    <?php
        require_once("navigation/footer.php");
    ?>
    </body>
    </html>
