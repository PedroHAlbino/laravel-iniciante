<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="post" action="<?php echo route('client.store'); ?>">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
        <input type="text" name="value"/>
        <button type="submit">Enviar</button>

    </form>
</body>
</html>