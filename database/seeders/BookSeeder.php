<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $books=[
            [
                'title'=>'Fluent Python',
                'subtitle'=>'',
                // 'author'=> ' Luciano Ramalho'
                'isbn_10'=>null,
                'isbn_13_print'=>'9781492056355',
                'year_pub'=>2021,
                'edition'=>2,
                'pages'=>1012,
                'description'=>null,
            ],
            [
                'title'=>'History of Lorem Ipsum',
                'subtitle'=>'An Excerpt',
                // 'author'=> ' Luciano Ramalho'
                'isbn_10'=>'0941387569',
                'isbn_13_print'=>'9781492056355',
                'year_pub'=>1990,
                'edition'=>1,
                'pages'=>50,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mi ut sapien
                    commodo convallis at ac nisl. Donec vehicula lobortis consectetur. Curabitur lectus massa, gravida
                    nec dignissim ullamcorper, aliquam vitae purus. Quisque elit ante, luctus et fringilla ut,
                    congue eget diam. ',
            ],
        ];

        foreach ($books as $book){
            Book::create($book);
        }
    }
}
