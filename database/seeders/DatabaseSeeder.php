<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        DB::table('books')->insert([
            'title' => 'Supernova', 
            'description' => 'A story about Bintang', 
            'author' => 'Dee Lestari', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        // DB::table('books')->insert([
        //     'title' => 'A Wrinkle in Time',
        //     'description' => 'A young girl goes on a mission to save her father who has gone missing after working on a mysteriious project called a tesseract.', 
        //     'author' => 'Medelaine L. Engle', 
        //     'created_at' => Carbon::now(), 
        //     'updated_at' => Carbon::now()
        // ]);
    }
}
