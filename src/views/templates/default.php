<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z506 Solutions</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

    <div class="container">
        <?php require $block_header;?>
        <?php if (session_message(true)):?>
            <div class="bg-primary">
                <?php echo session_message(); ?>
            </div>
        <?php endif;?>
        <?php echo $block_content; ?>
        <?php require $block_footer;?>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script
            src="/js/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script>
</body>
</html>