<?php
$title = "Ciss St Moïse";
require_once("header.php");
?>

<div class="compte">
    <div class="row col-lg-12 map">
        <div class="find_mag col-lg-4">
            <div class="liste_mag0">
                <div class="sommet">
                    <h3>Trouvez un magazin</h3>
                    <div class="input">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" id="research" placeholder="Rechercher un emplacement">
                    </div>
                    <p id="result-count" class="nbr_mag"> 5 magazins près de toi</p>
                </div>
                <div class="liste_mag1">

                    <ul id="cities">
                        <li class="city" data-lat="5.372964591973704" data-lng="-3.9329152790744373">
                            <a href="#">
                                <h4>Ciss St Moise Boutique (Playce RIVIERA 3)</h4>
                                <p><span class="red">Fermé temporairement</span></p>
                            </a>
                        </li>

                        <li class="city" data-lat="5.303311684564882" data-lng="-4.005131236745683">
                            <a href="#">
                                <h4>Ciss St Moise Boutique (Treichville)</h4>
                                <p>Treichville<i class="fa-solid fa-circle"></i> 23 Avenue 21</p>
                                <p><span class="green">Ouvert</span><i class="fa-solid fa-circle"></i>Ferme à 17:30 <i
                                        class="fa-solid fa-circle"></i> 07 68 38 38 31</p>
                            </a>
                        </li>

                        <li class="city" data-lat="5.360922877522815" data-lng="-3.99760872140233">
                            <a href="#">
                                <h4>Ciss St Moise Boutique (2 Plateaux)</h4>
                                <p>2 plateaux Carrefour ENA <i class="fa-solid fa-circle"></i> Bd des Martyrs</p>
                                <p><span class="green">Ouvert</span><i class="fa-solid fa-circle"></i>Ferme à 18:00 <i
                                        class="fa-solid fa-circle"></i> 07 48 17 17 48</p>
                            </a>
                        </li>

                        <li class="city" data-lat="5.297544186964973" data-lng="-3.969206277225893">
                            <a href="#">
                                <h4>Ciss St Moise Boutique (Koumassi)</h4>
                                <p>Koumassi <i class="fa-solid fa-circle"></i> 26 BP 271 Abidjan 26</p>
                                <p><span class="green">Ouvert</span><i class="fa-solid fa-circle"></i>Ferme à 19:30 <i
                                        class="fa-solid fa-circle"></i> 05 76 45 35 35 35</p>
                            </a>
                        </li>

                        <li class="city" data-lat="5.348963062161544" data-lng="-4.074580959482353" >
                            <a href="#">
                                <h4>Ciss St Moise Boutique (Yopougon)</h4>
                                <p>Cosmos Yopougon <i class="fa-solid fa-circle"></i> 26 BP 271 Abidjan 26</p>
                                <p><span class="green">Ouvert</span><i class="fa-solid fa-circle"></i>Ferme à 20:00 <i
                                        class="fa-solid fa-circle"></i> 07 71 53 23 33</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="find_mag col-lg-8">
            <div id="map"></div>
        </div>
    </div>

</div>
<?php
require_once("footer.php");
?>