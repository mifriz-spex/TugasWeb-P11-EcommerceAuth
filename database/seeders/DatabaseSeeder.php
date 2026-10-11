<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat User (Admin, Editor, User)
        \App\Models\User::factory()->create(['name' => 'Admin Boss', 'email' => 'admin@tes.com', 'role' => 'admin']);
        \App\Models\User::factory()->create(['name' => 'Si Editor', 'email' => 'editor@tes.com', 'role' => 'editor']);
        \App\Models\User::factory()->create(['name' => 'User Biasa', 'email' => 'user@tes.com', 'role' => 'user']);

        // Buat 5 Kategori
        for($i=1; $i<=5; $i++) {
            \App\Models\Category::create(['name' => "Kategori $i", 'slug' => "kategori-$i"]);
        }

        // Buat 50 Produk pake factory tadi
        \App\Models\Product::factory(50)->create();
    }
}
