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
            [
                'title' => 'Pro Apache',
                'subtitle' => 'Install, Build, Configure and Test a Web Server',
                // 'author'=> 'Peter Wainwright'
                'isbn_10' => '1590593006',
                'isbn_13_print' => '9781590593004',
                'year_pub' => 2004,
                'edition' => 3,
                'description' => null,
                'pages' => 0,
            ],
            [
                'title' => 'Learn Python 3 the Hard Way',
                'subtitle' => 'A Very Simple Introduction to the Terrifyingly Beautiful World of Computers and Code',
                // 'author'=> 'A. Shaw, Zed'
                'isbn_10' => '0134692888',
                'isbn_13_print' => '9780134692883',
                'year_pub' => 2017,
                'edition' => null,
                'description' => null,
                'pages' => 320,
            ],
            [
                'title' => 'Learn More Python the Hard Way',
                'subtitle' => 'The Next Step For New Python Programmers ',
                // 'author'=> 'A. Shaw, Zed'
                'isbn_10' => '0134123484',
                'isbn_13_print' => '9780134123486',
                'year_pub' => 2017,
                'edition' => null,
                'description' => null,
                'pages' => 240,
            ],
            [
                'title' => 'Data Modeling for MongoDB',
                'subtitle' => 'Building Well-Designed and Supportable MongoDB Databases',
                // 'author'=> 'Steve Hoberman'
                'isbn_10' => '1935504703',
                'isbn_13_print' => '9781935504702',
                'year_pub' => 2014,
                'edition' => null,
                'description' => null,
                'pages' => 0,
            ],
            [
                'title' => 'Laravel: Up & Running: A Framework for Building Modern PHP Apps',
                'subtitle' => '',
                // 'author'=> ' Matt Stauffer'
                'isbn_10' => '1492041211',
                'isbn_13_print' => '9781492041214',
                'year_pub' => 2019,
                'edition' => 2,
                'description' => null,
                'pages' => 554,
            ],
            [
                'title' => 'LARAVEL Framework',
                'subtitle' => 'Learn Primary Skills Of LARAVEL Fast And Easily',
                // 'author'=> 'Cary Racz'
                'isbn_10' => null,
                'isbn_13_print' => '9798530236709',
                'year_pub' => 2021,
                'edition' => null,
                'description' => null,
                'pages' => 110,
            ],
            [
                'title' => 'Django for Beginners',
                'subtitle' => 'Build websites with Python and Django',
                // 'author'=> 'Vincent, William S.'
                'isbn_10' => '1735467200',
                'isbn_13_print' => '9781735467207',
                'year_pub' => 2020,
                'edition' => null,
                'description' => null,
                'pages' => 0,
            ],
            [
                'title' => 'Full-Stack React Projects',
                'subtitle' => 'Learn MERN stack development by building modern web apps using MongoDB, Express, React, and Node.js',
                // 'author'=> 'Shama Hoque'
                'isbn_10' => '1839215410',
                'isbn_13_print' => '9781839215414',
                'year_pub' => 2020,
                'edition' => 2,
                'description' => null,
                'pages' => 716,
            ],
            [
                'title' => 'Hands-On Internet of Things with MQTT',
                'subtitle' => 'Build connected IoT devices with Arduino and MQ Telemetry Transport (MQTT)',
                // 'author'=> 'Tim Pulver '
                'isbn_10' => '1789341787',
                'isbn_13_print' => '9781789341782',
                'year_pub' => 2019,
                'edition' => null,
                'description' => null,
                'pages' => 350,
            ],
            [
                'title' => 'Data Structures and Algorithms in Python',
                'subtitle' => null,
                // 'author'=> 'Michael T. Goodrich, Roberto Tamassia, Michael H. Goldwasser'
                'isbn_10' => '812656217X',
                'isbn_13_print' => '9788126562176',
                'year_pub' => 2016,
                'edition' => null,
                'description' => null,
                'pages' => 0,
            ],
            [
                'title' => "MongoDB Administrator's Guide",
                'subtitle' => 'Over 100 practical recipes to efficiently maintain and administer your MongoDB solution',
                // 'author'=> ' Cyrus Dasadia '
                'isbn_10' => '178712648X',
                'isbn_13_print' => '9781787126480',
                'year_pub' => 2017,
                'edition' => null,
                'description' => null,
                'pages' => 0,
            ],
            [
                'title' => " Laravel",
                'subtitle' => "The Ultimate Beginner's Guide to Learn Laravel Step by Step",
                // 'author'=> 'Rufus Stewart (Author), mEm lnc (Author)'
                'isbn_10' => '178712648X',
                'isbn_13_print' => '9781787126480',
                'year_pub' => 2020,
                'edition' => 2,
                'description' => null,
                'pages' => 137,
            ],
            [
                'title' => "Getting Started with the Internet of Things",
                'subtitle' => "Connecting Sensors and Microcontrollers to the Cloud",
                // 'author'=> 'Cuno Pfister'
                'isbn_10' => '1449393578',
                'isbn_13_print' => '9781449393571',
                'year_pub' => 2011,
                'edition' => null,
                'description' => null,
                'pages' => 194,
            ],
            [
                'title' => "The IoT Hacker's Handbook",
                'subtitle' => "A Practical Guide to Hacking the Internet of Things",
                // 'author'=> 'Aditya Gupta'
                'isbn_10' => '1484242998',
                'isbn_13_print' => '9781484242995',
                'year_pub' => 2019,
                'edition' => null,
                'description' => null,
                'pages' => 340,
            ],
            [
                'title' => 'Build Your Own IoT Platform',
                'subtitle' => 'Develop a Fully Flexible and Scalable Internet of Things Platform in 24 Hours',
                // 'author'=> 'Anand Tamboli '
                'isbn_10' => '1484244974',
                'isbn_13_print' => '9781484244975',
                'year_pub' => 2019,
                'edition' => null,
                'description' => null,
                'pages' => 242,
            ],
            [
                'title' => 'Six-Step Relational Database Design™',
                'subtitle' => 'A step by step approach to relational database design and development',
                // 'author'=> 'Fidel A Captain '
                'isbn_10' => '1481942727',
                'isbn_13_print' => '9781481942720',
                'year_pub' => 2013,
                'edition' => 2,
                'description' => null,
                'pages' => 234,
            ],
            [
                'title' => 'Database Design for Mere Mortals',
                'subtitle' => 'A step by step approach to relational database design and development',
                // 'author'=> 'Michael J Hernandez'
                'isbn_10' => '0136788041',
                'isbn_13_print' => '9780136788041',
                'year_pub' => 2020,
                'edition' => 4,
                'description' => null,
                'pages' => 680,
            ],
            [
                'title' => 'Design with MongoDB',
                'subtitle' => 'Best models for applications',
                // 'author'=> 'Alessandro Fiori'
                'isbn_10' => null,
                'isbn_13_print' => '9788557417884',
                'year_pub' => 2020,
                'edition' => null,
                'description' => null,
                'pages' => 107,
            ],
            [
                'title' => "Joe Celko's SQL Puzzles and Answers ",
                'subtitle' => null,
                // 'author'=> 'Joe Celko'
                'isbn_10' => null,
                'isbn_13_print' => '9781558604537',
                'year_pub' => 1997,
                'edition' => null,
                'description' => null,
                'pages' => 200,
            ],
            [
                'title' => "Joe Celko's SQL Puzzles and Answers ",
                'subtitle' => null,
                // 'author'=> 'Joe Celko'
                'isbn_10' => '0123735963',
                'isbn_13_print' => '9780123735966',
                'year_pub' => 2006,
                'edition' => 2,
                'description' => null,
                'pages' => 352,
            ],
        ];

        foreach ($books as $book){
            Book::create($book);
        }
    }
}
