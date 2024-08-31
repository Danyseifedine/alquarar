<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'alquarar@gmail.com',
            'password' => Hash::make('alquarar@12'),
            'email_verified_at' => now(),
        ]);

        $categories = [
            'سياسة',
            'اقتصاد',
            'رياضة',
            'تكنولوجيا',
            'صحة',
            'تعليم',
            'فن',
            'ثقافة',
            'علوم',
            'بيئة',
            'مجتمع',
            'أمن',
            'سياحة',
            'طقس',
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create(['name' => $category]);
        }
    }
}
