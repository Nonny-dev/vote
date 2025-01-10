<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบค้นหาผู้สมัครรับเลือกตั้ง</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header class="main-header">
        <?php include_once('components/header.php'); ?>
    </header>

    <section class="search-section">
        <?php include_once('components/search.php'); ?>
    </section>


    <main>
        <?php include_once('components/main.php'); ?>
    </main>

    <footer class="site-footer">
        <?php include_once('components/footer.php'); ?>
    </footer>

    <script src="script.js"></script>
</body>
</html>