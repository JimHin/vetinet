<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->product_name = "Sweat-Shirt AC/DC";
        $product->product_ht_price = 29.90;
        $product->product_description = "Pour les inconditionnels du groupe.";
        $product->product_main_photo = "products/sweat-shirt_ac_dc.jpeg";
        $product->category_id = 3;
        $product->save();

        $product1 = new Product();
        $product1->product_name = "Sweat-Shirt Tik Tok";
        $product1->product_ht_price = 24.80;
        $product1->product_description = "Fais toi une journée Tik Tok.";
        $product1->product_main_photo = "products/sweat-shirt_tik_tok.jpeg";
        $product1->category_id = 3;
        $product1->save();

        $product2 = new Product();
        $product2->product_name = "Sweat-Shirt Linux";
        $product2->product_ht_price = 23.90;
        $product2->product_description = "Pour les inconditionnels de l'Open source.";
        $product2->product_main_photo = "products/sweat-shirt_linux.jpeg";
        $product2->category_id = 4;
        $product2->save();

        $product3 = new Product();
        $product3->product_name = "Sweat-Shirt Gameboy";
        $product3->product_ht_price = 30;
        $product3->product_description = "Pour les nostalgiques de la console.";
        $product3->product_main_photo = "products/sweat-shirt_gameboy.jpeg";
        $product3->category_id = 4;
        $product3->save();

        $product4 = new Product();
        $product4->product_name = "Sweat-Shirt Geek";
        $product4->product_ht_price = 27.50;
        $product4->product_description = "Quand maman demande de faire la vaisselle.";
        $product4->product_main_photo = "products/sweat-shirt_geek.jpeg";
        $product4->category_id = 4;
        $product4->save();

        $product5 = new Product();
        $product5->product_name = "Sweat-Shirt Marvel";
        $product5->product_ht_price = 35;
        $product5->product_description = "Uniquement pour les super-héros.";
        $product5->product_main_photo = "products/sweat-shirt_marvel.jpeg";
        $product5->category_id = 2;
        $product5->save();

        $product6 = new Product();
        $product6->product_name = "Sweat-Shirt Star Trek";
        $product6->product_ht_price = 33.20;
        $product6->product_description = "Carnet de bord du Cpt Kirk.";
        $product6->product_main_photo = "products/sweat-shirt_rainbow.jpeg";
        $product6->category_id = 2;
        $product6->save();

        $product7 = new Product();
        $product7->product_name = "Sweat-Shirt Rick et Morty";
        $product7->product_ht_price = 27;
        $product7->product_description = "Un univers bien déjanté.";
        $product7->product_main_photo = "products/sweat-shirt_rick_morty.jpeg";
        $product7->category_id = 2;
        $product7->save();

        $product8 = new Product();
        $product8->product_name = "Sweat-Shirt Rubik's Cube";
        $product8->product_ht_price = 21.30;
        $product8->product_description = "Combien de temps pour le finir?";
        $product8->product_main_photo = "products/sweat-shirt_rubiscube.jpeg";
        $product8->category_id = 4;
        $product8->save();

        $product9 = new Product();
        $product9->product_name = "Sweat-Shirt Space Invaders";
        $product9->product_ht_price = 29.90;
        $product9->product_description = "Nostalgie quand tu nous tiens.";
        $product9->product_main_photo = "products/sweat-shirt_space_invader.jpeg";
        $product9->category_id = 4;
        $product9->save();

        $product10 = new Product();
        $product10->product_name = "T-Shirt Starwars";
        $product10->product_ht_price = 21;
        $product10->product_description = "Il était une fois dans une galaxie lointaine.";
        $product10->product_main_photo = "products/t-shirt_starwars.jpeg";
        $product10->category_id = 1;
        $product10->save();

        $product11 = new Product();
        $product11->product_name = "T-Shirt Atari";
        $product11->product_ht_price = 21;
        $product11->product_description = "Parce que les légendes ne meurent jamais.";
        $product11->product_main_photo = "products/t-shirt_atari.jpeg";
        $product11->category_id = 4;
        $product11->save();

        $product12 = new Product();
        $product12->product_name = "T-Shirt Centipède";
        $product12->product_ht_price = 25.50;
        $product12->product_description = "Le jeu culte par excellence.";
        $product12->product_main_photo = "products/t-shirt_centipede.jpeg";
        $product12->category_id = 4;
        $product12->save();

        $product13 = new Product();
        $product13->product_name = "T-Shirt Ecole de la tortue";
        $product13->product_ht_price = 19.90;
        $product13->product_description = "Le T-shirt des tortues géniales.";
        $product13->product_main_photo = "products/t-shirt_db.jpeg";
        $product13->category_id = 2;
        $product13->save();

        $product14 = new Product();
        $product14->product_name = "T-Shirt Sangoku";
        $product14->product_ht_price = 21.60;
        $product14->product_description = "Le Héros de 4 générations différentes.";
        $product14->product_main_photo = "products/t-shirt_dbz.jpeg";
        $product14->category_id = 2;
        $product14->save();

        $product15 = new Product();
        $product15->product_name = "T-Shirt Le Joker";
        $product15->product_ht_price = 23;
        $product15->product_description = "Son esprit est insondable comme sa souffrance.";
        $product15->product_main_photo = "products/t-shirt_joker.jpeg";
        $product15->category_id = 1;
        $product15->save();

        $product16 = new Product();
        $product16->product_name = "T-Shirt Minecraft";
        $product16->product_ht_price = 27.80;
        $product16->product_description = "En mode construction ou en mode survie.";
        $product16->product_main_photo = "products/t-shirt_minecraft.jpeg";
        $product16->category_id = 4;
        $product16->save();

        $product17 = new Product();
        $product17->product_name = "T-Shirt One Piece";
        $product17->product_ht_price = 28.50;
        $product17->product_description = "La vie de pirates.";
        $product17->product_main_photo = "products/t-shirt_one_peace.jpeg";
        $product17->category_id = 2;
        $product17->save();

        $product18 = new Product();
        $product18->product_name = "T-Shirt Pac-Man";
        $product18->product_ht_price = 21;
        $product18->product_description = "Le personnage légendaire du jeu d'arcade.";
        $product18->product_main_photo = "products/t-shirt_pacman.jpeg";
        $product18->category_id = 4;
        $product18->save();

        $product19 = new Product();
        $product19->product_name = "T-Shirt Pokemon";
        $product19->product_ht_price = 27;
        $product19->product_description = "Attrapez les tous.";
        $product19->product_main_photo = "products/t-shirt_pokemon.jpeg";
        $product19->category_id = 2;
        $product19->save();

    }
}
