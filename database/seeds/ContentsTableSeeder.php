<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            "title" => "Business Management System",
            "slug" => str_slug("Business Management System", '-'),
            "shortDesc" => "Complete solution for Acme.",
            "type" => 1,
            "status" => 1,
            "body" => 1,
            ]);
        DB::table('contents')->insert([
            "title" => "East Lancashire Table Tennis League",
            "slug" => str_slug("East Lancashire Table Tennis League", '-'),
            "shortDesc" => "Fixture, team and player management.",
            "type" => 1,
            "status" => 1,
            "body" => 1,
            ]);
        DB::table('contents')->insert([
            "title" => "AudioVisual Online",
            "slug" => str_slug("AudioVisual Online", '-'),
            "shortDesc" => "Bespoke audio visual e-commerce platform.",
            "type" => 1,
            "status" => 1,
            "body" => 1,
            ]);
        DB::table('contents')->insert([
            "title" => "Github",
            "slug" => str_slug("Github", '-'),
            "shortDesc" => "Various projects.",
            "type" => 1,
            "status" => 1,
            "body" => 1,
            ]);
    }
}
