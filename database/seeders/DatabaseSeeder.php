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

        //TABLE BOOKS
        DB::table('books')->insert([
            'title' => 'Supernova', 
            'description' => 'A story about Bintang', 
            'author' => 'Dee Lestari', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('books')->insert([
            'title' => 'A Wrinkle in Time',
            'description' => 'A young girl goes on a mission to save her father who has gone missing after working on a mysteriious project called a tesseract.', 
            'author' => 'Medelaine L. Engle', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);
        
        //TABLE AUTHORS
        DB::table('authors')->insert([
            'name' => 'Medelaine L. Engle',
            'gender' => 'male', 
            'biography' => 'Engle Camp was an American writer of fiction, non-fiction, poetry, and young adult fiction, including A Wrinkle in Time and its sequels: A Wind in the Door, A Swiftly Tilting Planet, Many Waters, and An Acceptable Time. Her works reflect both her Christian faith and her strong interest in modern science.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('authors')->insert([
            'name' => 'Dee Lestari',
            'gender' => 'female', 
            'biography' => 'seorang penulis dan penyanyi asal Indonesia. Dee pertama kali dikenal masyarakat sebagai anggota trio vokal Rida Sita Dewi.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('authors')->insert([
            'name' => 'George Bernard Shaw',
            'gender' => 'male', 
            'biography' => 'Bernard Shaw, was an Irish playwright, critic, polemicist and political activist. His influence on Western theatre, culture and politics extended from the 1880s to his death and beyond.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);
    }
}
