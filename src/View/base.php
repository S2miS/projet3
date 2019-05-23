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
        <link rel='stylesheet' href="public/css/phone_resolution.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="vendor/tinymce/tinymce/tinymce.min.js"></script>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>