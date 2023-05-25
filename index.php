<?php
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=chrome">
    <!-- Bootstrap -->
    <link href="assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.js"></script>
    <!-- Bootstrap color overwrite -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome 6 Free -->
    <link href="assets/fontawesome-free-6.4.0-web/css/all.min.css">
    <script src="assets/fontawesome-free-6.4.0-web/js/all.min.js"></script>
    <!-- Style -->
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php include "includes/banner.php"; ?>
<?php include "includes/navbar.php"; ?>
<section class="content">
    <div class="box">
        <div class="header-box">
            <h1 id="about" class="text-uppercase"><i class="fas fa-boxes-stacked"></i> My Products</h1>
        </div>
        <div class="header-box">
            <h1 id="about" class="text-uppercase"><i class="fa-solid fa-user-tie"></i> about me</h1>
        </div>
        <h1>Hey there!</h1>
        <h3>Nice to meet you!</h3>
    </div>
    <div class="header-box">
        <h1 id="about" class="text-uppercase"><i class="fas fa-code-merge"></i> My Skills</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <h1 class="text-center text-uppercase"><i class="fas fa-earth"></i> Language Skills</h1>

                <a href="https://github.com/Tjorven-Liebe" target="_blank"><img
                        src="https://raw.githubusercontent.com/Tjorven-Liebe/github-stats/master/generated/languages.svg#gh-catppuccin-machiato"
                        class="skill-table" alt="github-stats"></a>
            </div>
            <div class="col-sm-12 col-lg-6">
                <h1 class="text-center text-uppercase"><i class="fa-brands fa-github"></i> Github Skills</h1>
                <a href="https://github.com/Tjorven-Liebe" target="_blank"><img
                        src="https://raw.githubusercontent.com/Tjorven-Liebe/github-stats/master/generated/overview.svg#gh-catppuccin-machiato"
                        class="skill-table" alt="github-stats"></a>
            </div>
        </div>
    </div>
    </div>
</section>
<?php include "includes/footer.php"; ?>
</body>
</html>
