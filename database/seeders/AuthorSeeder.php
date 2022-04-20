<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $authors = [
            [
                2 => ['author' => 'mEm lnc', 'company' => true,],
                1 => ['author' => 'Stewart, Rufus',],
            ],
            [
                1 => ['author' => 'Goodrich, Michael T.',],
                2 => ['author' => 'Tamassia, Roberto',],
                3 => ['author' => 'Goldwasser, Michael H.',],
            ],

            [1 => ['author' => 'Ramalho, Luciano',],],
            [1 => ['author' => 'Wainwright, Peter',],],
            [1 => ['author' => 'A.Shaw, Zed',],],
            [1 => ['author' => 'Hoberman, Steve',],],
            [1 => ['author' => 'Stauffer, Matt',],],
            [1 => ['author' => 'Racz, Cary',],],
            [1 => ['author' => 'Vincent, William S.',],],
            [1 => ['author' => 'Hoque, Shama',],],
            [1 => ['author' => 'Pulver, Tim',],],
            [1 => ['author' => 'Dasadia, Cyrus',],],
            [1 => ['author' => 'Pfister, Cuno',],],
            [1 => ['author' => 'Gupta, Aditya',],],
            [1 => ['author' => 'Tamboli, Anand',],],
            [1 => ['author' => 'Captain, Fidel A',],],
            [1 => ['author' => 'Hernandez, Michael J',],],
            [1 => ['author' => 'Fiori, Alessandro',],],
            [1 => ['author' => 'Celko, Joe',],],
        ];

// Start inserts
        $countAuthors = 0;

        foreach ($authors as $author_list) {
            foreach ($author_list as $author) {
                $exploded = explode(', ', $author['author']);
                $family = $exploded[0]; // This will also hold company names
                $given = $exploded[1] ?? null;
                $company = $author['company'] ?? false;
                $newAuthor = [
                    'given_name' => trim($given),
                    'family_name' => trim($family),
                    'company' => $company,

                    'created_at' => now(),
                    'updated_at' => now(),
                ];
                Author::create($newAuthor);
                $countAuthors++;
            }
        }
// End Inserts
        $this->command->getOutput()->writeln("<info>            Added {$countAuthors} new authors.</info> ");
    }
}
