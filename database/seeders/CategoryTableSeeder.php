<?php


namespace Database\Seeders;


use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        $category = new Category();
        $category->category_name = "jeux vidéos";
        $category->save();*/

        $category = new Category();
        $category->category_name = "Starwars";
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category = new Category();
        $category->category_name = "The Joker";
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category = new Category();
        $category->category_name = "Pokemon";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new Category();
        $category->category_name = "Dragon ball";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new Category();
        $category->category_name = "Rick & Morty";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new Category();
        $category->category_name = "star Trek";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new Category();
        $category->category_name = "One Piece";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new Category();
        $category->category_name = "marvel";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new Category();
        $category->category_name = "Ac/Dc";
        $category->is_online = 1;
        $category->parent_id = 3;
        $category->save();

        $category = new Category();
        $category->category_name = "Tik Tok";
        $category->is_online = 1;
        $category->parent_id = 3;
        $category->save();

        $category = new Category();
        $category->category_name = "Gameboy";
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();

        $category = new Category();
        $category->category_name = "Geek";
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();

        $category = new Category();
        $category->category_name = "Centipède";
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();

        $category = new Category();
        $category->category_name = "Atari";
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();

    }
}
