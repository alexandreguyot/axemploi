<nav>
    <div class="container mx-auto flex justify-between items-center p-4">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="{{ asset('img/axemploi.jpg')}}" alt="Logo" class="mr-4">
            <span class="text-lg font-bold uppercase text-axemploiBlue">Recrutement spécialisé et Approche directe</span>
        </div>

        <!-- Boutons à droite -->
        <div class="flex flex-col items-end space-y-2">
            <!-- Bouton Facebook -->
            <a href="https://facebook.com" target="_blank" class="bg-axemploiBlue hover:bg-axemploiBlue text-white py-2 px-4 rounded">
                Facebook
            </a>
            <!-- Bouton Offres d'emploi -->
            <a href="#" class="text-black py-2 px-4 rounded border-2">
                Offres d'emploi
            </a>
        </div>
    </div>
       <!-- Menu principal -->
       <div class="flex bg-axemploiBlue">
        <div class="container mx-auto hidden justify-between items-center p-4 md:flex space-x-4">
            <div class="relative group">
                <a href="#" class="text-white hover:bg-axemploiBlue px-3 py-2 rounded uppercase">Axemploi</a>
                <div class="absolute hidden group-hover:block bg-axemploiBlue text-white space-y-2 mt-2 p-4 rounded">
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Savoir recruter</a>
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Approche directe</a>
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Sourcing</a>
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Annonces</a>
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Recrutements réalisés</a>
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Notre passion, le recrutement</a>
                </div>
            </div>

            <!-- Entreprises avec sous-menu -->
            <div class="relative group">
                <a href="#" class="text-white hover:bg-axemploiBlue px-3 py-2 rounded uppercase">Entreprises</a>
                <div class="absolute hidden group-hover:block bg-axemploiBlue text-white space-y-2 mt-2 p-4 rounded">
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Recrutement</a>
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Top management</a>
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Approches executive search</a>
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Transmettre son entreprise</a>
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Formulaire entreprise</a>
                </div>
            </div>

            <!-- Candidats avec sous-menu -->
            <div class="relative group">
                <a href="#" class="text-white hover:bg-axemploiBlue px-3 py-2 rounded uppercase">Candidats</a>
                <div class="absolute hidden group-hover:block bg-axemploiBlue text-white space-y-2 mt-2 p-4 rounded">
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Offres d'emploi</a>
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Coaching</a>
                    <a href="#" class="block px-4 py-2 hover:bg-axemploiBlue">Déposer votre candidature spontanée</a>
                </div>
            </div>

            <a href="#" class="text-white hover:bg-axemploiBlue px-3 py-2 rounded uppercase">Secteurs d'activités</a>
            <a href="#" class="text-white hover:bg-axemploiBlue px-3 py-2 rounded uppercase">Actualités</a>
            <a href="#" class="text-white hover:bg-axemploiBlue px-3 py-2 rounded uppercase">Contact</a>
        </div>

        <!-- Menu mobile -->
        <div class="md:hidden">
            <button id="menu-button" class="text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
    </div>

    <!-- Menu mobile avec sous-menus -->
    <div id="mobile-menu" class="hidden md:hidden bg-blue-600">
        <a href="#" class="block text-white hover:bg-axemploiBlue px-3 py-2">Axemploi</a>

        <!-- Entreprises avec sous-menu -->
        <div>
            <button id="toggle-entreprises" class="block w-full text-left text-white hover:bg-axemploiBlue px-3 py-2">Entreprises</button>
            <div id="entreprises-submenu" class="hidden space-y-2 pl-4">
                <a href="#" class="block text-white hover:bg-blue-600 px-3 py-2">Service 1</a>
                <a href="#" class="block text-white hover:bg-blue-600 px-3 py-2">Service 2</a>
            </div>
        </div>

        <!-- Candidats avec sous-menu -->
        <div>
            <button id="toggle-candidats" class="block w-full text-left text-white hover:bg-axemploiBlue px-3 py-2">Candidats</button>
            <div id="candidats-submenu" class="hidden space-y-2 pl-4">
                <a href="#" class="block text-white hover:bg-blue-600 px-3 py-2">Profil 1</a>
                <a href="#" class="block text-white hover:bg-blue-600 px-3 py-2">Profil 2</a>
            </div>
        </div>

        <a href="#" class="block text-white hover:bg-axemploiBlue px-3 py-2">Secteurs d'activités</a>
        <a href="#" class="block text-white hover:bg-axemploiBlue px-3 py-2">Actualités</a>
        <a href="#" class="block text-white hover:bg-axemploiBlue px-3 py-2">Contact</a>
    </div>
</nav>

@pushOnce('scripts')
<script>
    // Toggle le menu mobile
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Sous-menus mobiles
    const toggleEntreprises = document.getElementById('toggle-entreprises');
    const entreprisesSubMenu = document.getElementById('entreprises-submenu');

    toggleEntreprises.addEventListener('click', () => {
        entreprisesSubMenu.classList.toggle('hidden');
    });

    const toggleCandidats = document.getElementById('toggle-candidats');
    const candidatsSubMenu = document.getElementById('candidats-submenu');

    toggleCandidats.addEventListener('click', () => {
        candidatsSubMenu.classList.toggle('hidden');
    });
</script>
@endPushOnce
