<?php
$title = "Ciss St Moïse";
require_once("header.php");
?>
<style>
    .slider {
        overflow: hidden;
        position: relative;
        transition: all 1s ease-in-out;
    }

    .slide,
    .slid,
    .sliders {
        display: none;
    }

    .active {
        display: block;
    }
</style>
<!-- section d'entête -->
<div class="content" id="acceuil">
    <div class="row">
        <div class="col-lg-7  card_raduis p-2 img_35 ">
            <img src="../images/Banner.png" alt="">
        </div>
        <div class="col-lg-5 card_raduis p-2">
            <div class="card_raduis col-lg-12 fond">
                <p>Ciss St Moïse habille l'excellence depuis <span class="annee">1989</span></p>
            </div>
            <div class=" row pt-3 col-lg-12 ">
                <div class="col-lg-6 card_raduis  taille">
                    <img class="card_raduis pict" src="../images/homme_filtre.jpg" alt="manequin">
                    <p>#Dernières tendances</p>
                </div>
                <div class="col-lg-6 px-3 card_raduis  tailles ">
                    <p>#Collection six</p>
                    <img class="card_raduis pict" src="../images/femme_copie_filtre.jpg" alt="manequaine">
                </div>
            </div>
        </div>

    </div>
    <!-- section dernières tendance -->
    <div class=" row col-lg-12 my-5 tendance">
        <h2 class="">Les dernières <span class="model">tendances</span></h2>
        <div class="col-lg-3 droite">
            <img src="../images/454921033_813030001035410_5442173417853545596_n.jpg" alt="style">

            <span class="margeur">
                <p>Chemise EMPIRE</p>
                <button>Découvrir</button>
            </span>

        </div>
        <div class="col-lg-3 droite ">
            <img src="../images/448347528_775591381445939_3082450764920316011_o.jpg" alt="style">
            <span class="margeur">
                <p>Chemise TROPICAL Marron</p>
                <button>Découvrir</button>
            </span>
        </div>
        <div class="col-lg-3 droite ">
            <img src="../images/363425556_594577526213993_4102774547521206862_n.jpg" alt="style">
            <span class="margeur">
                <p>Chemise ETIQUE</p>
                <button>Découvrir</button>
            </span>
        </div>
        <div class="col-lg-3 droite ">
            <img src="../images/415266841_677050527966692_799393582033480762_n.jpg" alt="style">
            <span class="margeur">
                <p>Chemise ONYX</p>
                <button>Découvrir</button>
            </span>
        </div>
        <div class="color_r"></div>
    </div>
    <!-- section vidéo -->
    <!-- <div class="row col-lg-12 movies">
        <div class="col-lg-7 video">
            <video autoplay="true">
                <source
                    src="../images/An8C4f_ko171JTcfOXkrFrLJEkoHcAE_ADrJH2Dl35shy6hjChs5vipOSl3qbxMS1m8c92Yqy41dOnJXywydGMA.mp4"
                    type="video/mp4">
            </video>
        </div>
        <div class="col-lg-5 yellowed ">
            <div class="center">
                <h2>Des offres exclusives vous attendent</h2>
                <p>Rendez-vous dès à présent dans toutes nos boutiques
                    pour célébré et découvrir avec nous notre sélections de rééditions
                    spéciale 35ème anniversaire.
                </p>
                <a href="#" type="button">Découvrir</a>
            </div>
        </div>
    </div> -->
    <!-- section exploration collections -->
    <div class="row col-lg-12 p-5 all">
        <h2>Explorez nos <span class="model">collections</span></h2>
        <div class="col-lg-4 first slider">
            <div class="imagerie ">
                <div class="slide active">
                    <img src="../images/couper_homme.jpg" alt="manequin">
                </div>

                <div class="slide">
                    <img src="../images/femme_copie.jpg" alt="manequaine">
                </div>

                <div class="slide">
                    <img src="../images/tunique_copie.jpg" alt="tunique">
                </div>

            </div>
            <div class="parag">
                <h4>Des offres exclusives vous attendent </h4>
                <p>Rendez-vous dès à présent dans toutes nos boutiques
                    pour célébré et découvrir avec nous notre sélections de rééditions
                    spéciale 35ème anniversaire.
                </p>
                <a href="collections.php" type="button">Découvrir</a>
            </div>
        </div>
        <div class="col-lg-4 second photo ">
            <div class="sliders active">
                <img src="../images/291340133_1666111637102741_379363361254919713_n.jpg" alt="tunique">

            </div>
            <div class="sliders">
                <img src="../images/455012571_813029807702096_1348271931005150055_n.jpg" alt="chemise">

            </div>
            <div class="sliders">
                <img src="../images/307713140_1721111898269381_3759543650082456051_n.jpg" alt="manequaine">

            </div>
            <div class="btns">
                <button id="prev">
                    <i class="fa-solid fa-angle-left"></i>
                </button>
                <button id="next">
                    <i class="fa-solid fa-angle-right"></i>
                </button>
            </div>
        </div>
        <div class="col-lg-4 third">
            <div class="parag_1">
                <h4>Façonnez votre style avec nos différentes collections </h4>
                <p>Rendez-vous dès à présent dans toutes nos boutiques
                    pour célébré et découvrir avec nous notre sélections de rééditions
                    spéciale 35ème anniversaire.
                </p>
                <a href="collections.php" type="button">Explorez</a>
            </div>
            <div class="picture">
                <div class="slid active">
                    <img src="../images/femme_copie.jpg" alt="manequin">
                </div>
                <div class="slid ">
                    <img src="../images/tunique_copie.jpg" alt="tunique">
                </div>
                <div class="slid ">
                    <img src="../images/couper_homme.jpg" alt="manequin">
                </div>
            </div>

        </div>
    </div>
    <div class="row col-lg-12 ciss_boutique">
        <div class="col-lg-8 be_ciss">
            <div class="creator">
                <h1>Soyez différent Soyez Ciss St Moïse</h1>
                <hr>
                <p>Ciss St Moïse créateur de mode mais aussi acteur engagé dans la promotion de la culture
                    panafricaine. contribue à l'automatisation des jeune talents à travers des styles divers
                    et variés
                </p>
                <a href="35_ans.php" type="button">Lire plus</a>
            </div>
        </div>
        <div class="col-lg-4 ciss_img">
            <img src="../images/ciss_radius.png" alt="ciss_star">
        </div>
    </div>
    <!-- <div class="find_store col-lg-12">
        <h2>Trouvez la boutique Ciss St Moïse la plus proche</h2>
        <div class="row col-lg-12 film_img">
            <div class="store col-lg-6">
                <img src="../images/2023-12-06.jpg" alt="magazin">
            </div>
            <div class="store col-lg-6">
                <img src="../images/unnamed.jpg" alt="magazin">
            </div>
           
        </div>
    </div> -->
    <div class="store_ciss">
        <h2>Trouvez la boutique Ciss St Moïse <span class="jaune">la plus proche</span></h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper centers">
                <div class="swiper-slide">
                    <img src="../images/2023-12-06.jpg" alt="magazin">
                    <div class="store_name">Ciss St Moïse <span class="jaune">Treichville</span></div>
                </div>
                <div class="swiper-slide">
                    <img src="../images/unnamed.jpg" alt="magazin">
                    <div class="store_name">Ciss St Moïse <span class="jaune">2 Plateaux</span></div>

                </div>
                <div class="swiper-slide">
                    <img src="../images/PROFILE.JPG" alt="magazin">
                    <div class="store_name">Ciss St Moïse <span class="jaune">Koumassi</span></div>

                </div>
                <div class="swiper-slide">
                    <img src="../images/_Q6A1543.jpg" alt="magazin">
                    <div class="store_name">Ciss St Moïse <span class="jaune">Palmeraie</span></div>

                </div>
                <div class="swiper-slide">
                    <img src="../images/Interieur PLAYCE.JPG" alt="magazin">
                    <div class="store_name">Ciss St Moïse <span class="jaune">Yopougon</span></div>

                </div>

            </div>
            <div class="swiper-pagination"></div>

            
        </div>
    </div>
</div>
<?php
require_once("footer.php");
?>