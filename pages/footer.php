<footer>
    <div class="bg_green">
        <div class="items_liste">
            <ul class="liste">
                <li class="nav-item">
                    <a class="ligne" aria-current="page" href="index.php"> <span class="px-4">Acceuil</span> <i
                            class="fa-solid fa-circle"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="ligne" aria-current="page" href="boutique.php"><span class="px-4">Boutique</span> <i
                            class="fa-solid fa-circle"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="ligne" aria-current="page" href="collections.php"><span class="px-4">Collections</span><i
                            class="fa-solid fa-circle"></i>
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
            <div class="pays">
                <img src="../images/world-wide-web (3).png" alt="langue">
                <p>CÔTE D'IVOIRE - FRANCAIS</p>
            </div>
        </div>

        <div class="reseaux" id="ancreur">
            <img src="../images/instagram (3).png" alt="instagram">
            <img src="../images/facebook-app-symbol.png" alt="facebook">
            <img src="../images/whatsapp (2).png" alt="whatsap">
        </div>
        <div class="politique">
            <p>Condition d'utilisations</p>
            <p>politique de confidentialité</p>
            <p>Contact</p>
            <p>Mention légales</p>
        </div>
    </div>
    <div class="logo_1">
        <div class="img1"> <img src="../images/329353955_5442177182550632_6254963249237364124_n.jpg" alt="logo1"></div>
        <div class="d-flex align-items-center justify-content-center">
            <img src="../images/copyright_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.png" alt="copyright" width="25px">
            <span class="ms-2">2024 Ciss St Moïse, tout droit réservés.</span>
        </div>
    </div>
</footer>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../slide/slick.js"></script>

<script src="../js/main.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->


<script>
    // Récupère tous les sliders
    let currentIndex = 0;

    const firstSlider = document.querySelectorAll('.first .slide');
    const secondSlider = document.querySelectorAll('.second .sliders');
    const thirdSlider = document.querySelectorAll('.third .slid');

    const totalSlides = firstSlider.length;

    // Fonction pour mettre à jour les slides
    function updateSlides(index) {
        // Mise à jour du premier slider
        firstSlider.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });

        // Mise à jour du deuxième slider
        secondSlider.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });

        // Mise à jour du troisième sliders
        thirdSlider.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
    }

    // Gérer le bouton "Next"
    document.getElementById('next').addEventListener('click', function () {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlides(currentIndex);
    });

    // Gérer le bouton "Prev"
    document.getElementById('prev').addEventListener('click', function () {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlides(currentIndex);
    });


</script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<!-- carte (map) -->

<!-- <script>
    // Initialisation de la carte
    var map = L.map('map').setView([5.316667, -4.033333], 13); // Position initiale (Abidjan par exemple)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    var currentMarker; // Pour garder une référence au marqueur actuel

    document.querySelectorAll('.city').forEach(function (city) {
        city.addEventListener('click', function (event) {
            event.preventDefault(); // Empêche le lien de recharger la page
            var lat = parseFloat(this.getAttribute('data-lat'));
            var lng = parseFloat(this.getAttribute('data-lng'));

            // Centrer la carte sur la ville
            map.setView([lat, lng], 13);

            // Si un marqueur existe déjà, le retirer
            if (currentMarker) {
                map.removeLayer(currentMarker);
            }

            // Ajouter un nouveau marqueur
            currentMarker = L.marker([lat, lng]).addTo(map)
                .bindPopup(this.querySelector('h4').textContent)
                .openPopup();
        });
    });
</script> -->

<!-- <script>

    // Initialisation de la carte

    var map = L.map('map').setView([5.316667, -4.033333], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    var currentMarker;

    // Fonction pour centrer la carte et ajouter un marqueur

    function centerMap(lat, lng, name) {
        map.setView([lat, lng], 13);
        if (currentMarker) {
            map.removeLayer(currentMarker);
        }
        currentMarker = L.marker([lat, lng]).addTo(map)
            .bindPopup(name)
            .openPopup();
    }

    // Événement pour chaque ville

    document.querySelectorAll('.city').forEach(function (city) {
        city.addEventListener('click', function (event) {
            event.preventDefault();
            var lat = parseFloat(this.getAttribute('data-lat'));
            var lng = parseFloat(this.getAttribute('data-lng'));
            var name = this.querySelector('h4').textContent;
            centerMap(lat, lng, name);
        });
    });

    // Fonction de recherche

    document.getElementById('research').addEventListener('input', function () {
        var query = this.value.toLowerCase();
        document.querySelectorAll('.city').forEach(function (city) {
            var name = city.querySelector('h4').textContent.toLowerCase();
            if (name.includes(query)) {
                city.style.display = ''; // Affiche l'élément
            } else {
                city.style.display = 'none'; // Cache l'élément
            }
        });
    });
    
</script> -->

<script>
    // Initialisation de la carte
    
    var map = L.map('map').setView([5.316667, -4.033333], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);
    var currentMarker;

    // Fonction pour centrer la carte et ajouter un marqueur

    function centerMap(lat, lng, name) {
        map.setView([lat, lng], 13);
        if (currentMarker) {
            map.removeLayer(currentMarker);
        }
        currentMarker = L.marker([lat, lng]).addTo(map)
            .bindPopup(name)
            .openPopup();
    }

    // Événement pour chaque ville

    document.querySelectorAll('.city').forEach(function (city) {
        city.addEventListener('click', function (event) {
            event.preventDefault();
            var lat = parseFloat(this.getAttribute('data-lat'));
            var lng = parseFloat(this.getAttribute('data-lng'));
            var name = this.querySelector('h4').textContent;
            centerMap(lat, lng, name);
        });
    });

    // Fonction de recherche

    document.getElementById('research').addEventListener('input', function () {
        var query = this.value.toLowerCase();
        var count = 0; // Compteur de magasins trouvés

        document.querySelectorAll('.city').forEach(function (city) {
            var name = city.querySelector('h4').textContent.toLowerCase();
            if (name.includes(query)) {
                city.style.display = ''; // Affiche l'élément
                count++; // Incrémente le compteur
            } else{
                city.style.display = 'none'; // Cache l'élément
            }
        });

        // Afficher le nombre de magasins trouvés
        
        if (count === 0) {
            document.getElementById('result-count').textContent = `Aucun magasin trouvé`;
        } else if(count === 1){
            document.getElementById('result-count').textContent = `${count} Magasin près de toi`;
        }
        else {
            document.getElementById('result-count').textContent = `${count} Magasins près de toi`;
        }

    });
</script>

</body>

</html>