<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::firstOrCreate(
            ['id' => 1],
            [
                'title' => 'Welcome to the LSi Coding Exercise',
                'content' => '<p>Thank you for applying and congratulations for getting to the next stage of our interview process!</p><p>There are a few small tasks we\'d like you to complete. Feel free to refresh your memory by checking out the readme.md file or visiting <a href="https://github.com/scott-lsi/exercise">https://github.com/scott-lsi/exercise</a>.</p><p>Good luck!</p>',
            ]
        );
    }
}
