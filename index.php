<?php session_start(); ?>
<?php include_once "require.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Chat</title>
    <link rel="stylesheet" href="assets/style/reset.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--  css -->
    <?php echo $require_css; ?>
    <!--  icons -->
    <?php echo $require_icons; ?>
    <!-- fonts-->
    <?php echo $require_fonts; ?>
    <!-- plugins-->
    <?php echo $require_plugins; ?>
</head>
<body>
    <?php require_once "app/chat/chat.php"; ?>
</body>
    <?php echo $require_js; ?>
</html>