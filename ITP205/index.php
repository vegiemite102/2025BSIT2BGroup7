<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/costum.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/costum.css?v=3">
</head>
<body    >
    <?php require "views/nav.php"; ?>

          <main >
        <?php
            $page = $_GET['page'] ?? 'login';
            require "views/$page.php";
        ?>
        </main>

    <?php require "views/footer.php"; ?>
</body>

</html>     