<?php
session_start();
require('../../scripts/review/index.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BestBarber</title>
    <link rel="stylesheet" href="../../styles/reviews.css">
    <link rel="stylesheet" href="../../styles/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="menu__top">
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <div class="left__menu">
                        <a href="../home/index.php"><img class="logo" src="../../img/logo2biel.png" alt="BestBarber logo"></a>
                        <a class="nav-item nav-link" href="../home/about.php">O NAS</a>
                        <a class="nav-item nav-link" href="../price/index.php">CENNIK</a>
                        <a class="nav-item nav-link" href="../home/contact.php">KONTAKT</a>
                        <a class="nav-item nav-link" href="index.php">OPINIE</a>
                        <?php include '../../scripts/view-model/check-admin-script.php'; ?>
                    </div>
                    <div class="right__menu">
                        <?php include '../../scripts/view-model/check-login-script.php'; ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- mobile version -->
    <div class="menu__top__mobile">
        <div class="menu__container">
            <a href="../home/index.php"><img class="logo" src="../../img/logo2biel.png" alt="BestBarber logo"></a>
            <nav class="navbar navbar-dark m-4">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="menu__collapse">
                    <?php include '../../scripts/view-model/menu-collapse-script.php'; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="subpage__content">
        <div class="content__frame">
            <h1 class="header">
                OPINIE
            </h1>
            <div class="holder">
                <div class="half__side">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="3">
                                <?php
                                foreach ($_SESSION['avg'] as &$value) {
                                echo("Średnia ocen: " . round($value,1) . ("&nbsp;★"));}
                                ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // print all data from price-list.php
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td colspan="2"><?php echo $row['name']; ?></td>
                                    <td class="table__end"><?php echo str_repeat('★', $row['rating']) ; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><?php echo $row['content'];} ?></td>
                                </tr>
                        </tbody>
                    </table>
                    <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
                        <a link href="../../scripts/review/add.php">
                            <div class="button__field__xxl">
                                <p1 class="button__text__table p-1">Dodaj opinię</p1>
                            </div>
                        </a>
                    <?php
                    }
                    ?>
                </div>
                <div class="half__side">
                    <img class="price" src="../../img/13.png" alt="Zdjęcie narzędzi fryzjerskich">
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <img class="logo__footer" src="../../img/logo1biel.png" alt="BestBarber logo">
        <div class="footer__text">
            Copyright©2022 BestBarber
        </div>
    </div>
</body>

</html>