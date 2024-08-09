<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criação de usuário usando o facade DB
        DB::table('users')->insert([
            'name' => env('BLOG_USER_NAME'),
            'email' => env('BLOG_USER_EMAIL'),
            'password' => Hash::make(env('BLOG_USER_PASSWORD')),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Outros seeders podem ser adicionados aqui se necessário
    }
}
