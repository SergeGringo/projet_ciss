<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />


    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/ciss.css">
    <link rel="stylesheet" href="../css/mobil.css">
    <link rel="stylesheet" href="../slide/slick.css">
    <title>
        <?php
        if (isset($title)) {
            echo $title;
        } else {
            echo "Ciss St Moïse";
        } 
        ?>
    </title>
</head>

<body>
    <header>
        <div class="green">
            <a href="magazin.php" class="bordure">Trouver un magazin</a>
            <a href="#ancreur">Rejoignez-nous</a>
        </div>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid ">

                <div class="logo">
                    <a href="index.php">
                        <img src="../images/141037436_1299960687051173_7552848370255227771_n-removebg-preview.png"
                            alt="">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse base" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="ligne" aria-current="page" href="index.php"> <span class="px-4">Acceuil</span> <i
                                    class="fa-solid fa-circle"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="ligne" aria-current="page" href="boutique.php"><span class="px-4">Boutique</span>
                                <i class="fa-solid fa-circle"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="ligne" aria-current="page" href="collections.php"><span
                                    class="px-4">Collections</span><i class="fa-solid fa-circle"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="ligne" aria-current="page" href="propos.php"><span class="px-4">A propos</span><i
                                    class="fa-solid fa-circle"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="ligne" aria-current="page" href="35_ans.php"><span class="px-4">35 Ans</span>
                            </a>
                        </li>

                    </ul>
                    <span class="navbar-text">

                    </span>
                </div>
            </div>
        </nav>
    </header>