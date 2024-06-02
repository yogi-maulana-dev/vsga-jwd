<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';


function getMenu() {
    return [
        'home' => 'Home',
        'hitung' => 'Data Mahasiswa'

    ];
}

function renderContent($page) {
    switch ($page) {
        case 'home':
           include "home.php";
           break;
        case 'hitung':
            include "hitung.php";
            break;
        case 'proses':
            include "proses_hitung.php";
            break;
        default:
            echo "<h1>404 Halaman Tidak Ditemukan</h1>";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .nav-link.active {
            font-weight: bold;
            color: #41B06E !important;
        }
    </style>
    <link rel="stylesheet" href="asset/css/bootstrap.css">

</head>

<body>
    <!-- BAGIAN NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Aplikasi VSGA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
        $menu = getMenu();
        foreach ($menu as $key => $value) {
            $activeClass = ($page === $key) ? 'active' : '';
            echo "<li class='nav-item'>";
            echo "<a class='nav-link $activeClass' aria-current='page' href=\"?page=$key\">$value</a>";
            echo "</li>";
        }
        ?>
      </ul>
            </div>
        </div>
    </nav>
    <!-- END BAGIAN NAVBAR -->




<?php renderContent($page); ?>

</body>

<script src="asset/js/bootstrap.js"></script>

</html>