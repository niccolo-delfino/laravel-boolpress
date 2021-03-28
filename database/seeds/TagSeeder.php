<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 5; $i++){
        $new_tag = new Tag();
        $new_tag->name = $faker->word(3, true);

        $slug =Str::slug($new_tag->name);
        $slug_base = $slug;
        $slug_presente = Tag::where('slug', $slug)->first();
        $contatore = 1;

        while ($slug_presente) {
          $slug = $slug_base . '-' .$contatore;
          $slug_presente = Tag::where('slug', $slug)->first();
          $contatore++;
          $tag_presente = Tag::where('slug', $slug)->first();
        }

        $new_tag->slug = $slug;

        $new_tag->save();
      }
    }
}
