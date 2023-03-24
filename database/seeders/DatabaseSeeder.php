<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {  // $rental = \App\Models\Rental::factory()->create();
        // $rental = \App\Models\Rental::factory()->create([
        //     'fin_location' => '1988-07-06 13:58:00'
        // ]);

         $user = \App\Models\User::factory()->create([
            'name' => 'Giovani',
            'email' => 'giovanidesouza999@gmail.com',
            'password' => bcrypt('giovani'),
            'isAdmin' => 1
         ]);

         \App\Models\Car::factory()->create([
            'name' => 'Escalade 2022',
            'brand' => 'Cadillac',
            'price' => 85000,
            'places' => 5,
            'kilometrage' => 105,
            'description' => "Le modèle Luxe en début de gamme vient aussi avec le fameux écran incurvé à DELO d'une longueur de 38 pouces sur la planche de bord exclusive de l'Escalade. Une chaîne audio à 19 haut-parleurs est également de la liste d'équipements standards, tout comme une liste assez longue de dispositifs de sécurité.",
            'picture' => 'pictures/ryA0jELSYrWB2ZxkMAOkmsdpekIM4mpYxu0QL5JD.jpg'
         ]);
         \App\Models\Car::factory()->create([
            'name' => 'RAV4 2022',
            'brand' => 'Toyota',
            'price' => 46500,
            'places' => 5,
            'kilometrage' => 39,
            'description' => "Le RAV4 de cinquième génération, introduit pour 2019, offre la plus vaste sélection de modèles à ce jour, y compris le tout premier RAV4 TRD Off-Road, l'Hybride offert dans les modèles LE, XLE, XLE Premium, XSE et Limited et le produit phare RAV4 Prime PHEV avec une cote estimée par l'EPA de 42 miles sur la seule alimentation par batterie électrique. Pour 2022, le RAV4 XSE se pare d'une nouvelle couleur audacieuse Calvary Blue avec un toit noir. Calvary Blue fera également son chemin sur le TRD Off-Road existant.",
            'picture' => 'pictures/QmB6R6IRzJ47lLeVKa3XGVVlbUblEDH1sEu2UXST.jpg'
         ]);
         \App\Models\Car::factory()->create([
            'name' => 'X6 (G06)',
            'brand' => 'BMW',
            'price' => 46500,
            'places' => 5,
            'kilometrage' => 77,
            'description' => "Dans la Nouvelle BMW X6, la dynamique sportive maximale rencontre un design athlétique et un équipement luxueux: Moteur puissant à combustion interne BMW M TwinPower Turbo 8 cylindres de 530 ch (390 kW)
            Confort de conduite maximal grâce au pack xOffroad et à la boîte de vitesses Steptronic Sport à 8 rapports
            Présence puissante grâce à la calandre BMW lumineuse « Iconic Glow » et au kit M Sport de série
            Technologies modernes et matériaux haut de gamme tels que les appliques en verre « CraftedClarity »",
            'picture' => 'pictures/1LsK2R3GsPxuMbtC3f3dt9bYyJC7NuEsOHbO6bSc.webp'
         ]);
         \App\Models\Car::factory()->create([
            'name' => 'Evoque Nuevo',
            'brand' => 'Range Rover',
            'places' => 5,
            'kilometrage' => 86,
            'description' => "Le SUV le plus vendu de Land Rover est déjà dans notre pays. Le design extérieur de pointe de ce camion a été encore amélioré grâce à une sélection de révisions soigneusement choisies. Ces mises à jour incluent un nouveau pare-chocs avant, deux nouveaux modèles de calandre, des feux entièrement à LED et trois nouveaux modèles de jantes en alliage. Il est livré avec un moteur turbocompressé de 2,0 L. Si4, une puissance maximale de 240 ch et un couple de 250 lb-pi. Il offre une motricité 4X4 permanente et la boîte de vitesses automatique à 9 rapports. En termes de sécurité, il intègre le verrouillage centralisé avec télécommande, l'alarme périmétrique avec antidémarrage, le système et les systèmes de démarrage \"sans clé\" (HDC - Descent Control, ETC - Electronic Traction Control, freins à disque ventilé ABS à 4 canaux, EBD - Répartiteur électronique de freinage , entre autres.",
            'picture' => 'pictures/urYqn3V9jS2eDiErVHN6ji8Rmk5DrfugUgixfhxB.jpg'
         ]);
         \App\Models\Car::factory()->create([
            'name' => 'CX-5',
            'brand' => 'Mazda',
            'places' => 5,
            'kilometrage' => 49,
            'description' => "Où que les chemins vous mènent, vous pouvez compter sur l’agrément de conduite supérieur du Mazda CX-5 2023 et sur sa technologie Mazda M Hybrid plus économe en carburant. Doté de technologies de sécurité dernier cri, ce SUV fera la joie des familles actives. Son design éblouissant ne laisse personne indifférent, notamment avec son nouveau coloris extérieur Rhodium White.",
            'picture' => 'pictures/gYmrNWtNeHHOLZQs8LtfuBQpZ6POhHuVtQg25Cre.jpg'
         ]);
         \App\Models\Car::factory()->create([
            'name' => 'Talisman',
            'brand' => 'Renault',
            'places' => 4,
            'kilometrage' => 38,
            'description' => "La Talisman est une berline trois volumes, type de carrosserie plus statutaire et plus apprécié dans le segment des familiales routières que les berlines avec hayon. Elle entre en concurrence avec la Citroën C5, la Ford Mondeo, la Peugeot 508 I, la Škoda Superb ou la Volkswagen Passat.",
            'picture' => 'pictures/H69BqPjR7yUujFUii7ITyrOcKtwUfCmvdqdMMSIF.jpg'
         ]);
         \App\Models\Car::factory()->create([
            'name' => 'Range Rover',
            'brand' => 'Renault',
            'places' => 4,
            'kilometrage' => 38,
            'description' => "La voiture qui répond a toutes vos attentes.",
            'picture' => 'pictures/noimage.jpeg'
         ]);




    }
}
