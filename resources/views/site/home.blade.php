@extends('layouts.site')
@section('content')
section('content')
<div class="">
    <!-- Contenu principal -->
    <main class="flex-grow container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Composant 1 -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold text-axemploiBlue">Composant 1</h2>
                <p class="text-gray-700">Voici le contenu du premier composant. Tu peux y mettre des informations, des images, ou tout ce que tu souhaites.</p>
            </div>

            <!-- Composant 2 -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold text-axemploiBlue">Composant 2</h2>
                <p class="text-gray-700">Voici le contenu du deuxième composant. N'hésite pas à le personnaliser comme tu le souhaites.</p>
            </div>
        </div>
    </main>
</div>

@endsection

