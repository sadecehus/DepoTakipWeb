<?php
session_start(); // Oturumu başlat

if (isset($_SESSION['nameSurname'])) {
    $nameSurname = $_SESSION['nameSurname'];

} else {
    echo "Kullanıcı adı ve soyadı tanımlı değil.";
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>
<body>
<nav class="navbar navbar-expand-md sticky-top py-3 navbar-dark" id="mainNav">
    <div class="container"><a data-bss-hover-animate="flash" href=""><img src="assets/img/farm.png" width="58" height="58"></a><a class="navbar-brand d-flex align-items-center" href="/"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1"><a href="" style="font-size: 24px;color: rgb(255,255,255);font-weight: bold;">Farmer Tracker</a>
            <ul class="navbar-nav mx-auto">

                <?php if(isset($nameSurname)): ?>
                    <li class="nav-item"><a class="nav-link" href="#"><?php echo htmlspecialchars($nameSurname); ?></a></li>
                <?php endif; ?>
                <li class="nav-item"></li>

        </div>
    </div>
</nav>
</body>
