<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        
        //  'email' => 'test@example.com',
        
        //]);

        $sports = array(
        "3x3 Basketball",
        "Archery",
        "Artistic Gymnastics" ,
        "Artistic Swimming",
        "Athletics",
        "Badminton",
        "Baseball Softball",
        "Basketball",
        "Beach Volleyball",
        "Boxing",
        "Canoe Slalom",
        "Canoe Sprint",
        "Cycling BMX Freestyle",
        "Cycling BMX Racing",
        "Cycling Mountain Bike",
        "Cycling Road",
        "Cycling Track",
        "Diving",
        "Equestrian",
        "Fencing",
        "Football",
        "Golf",
        "Handball",
        "Hockey",
        "Judo",
        "Karate",
        "Marathon Swimming",
        "Modern Pentathlon",
        "Rhythmic Gymnastics",
        "Rowing",
        "Rugby Sevens",
        "Sailing",
        "Shooting",
        "Skateboarding",
        "Sport Climbing",
        "Surfing",
        "Swimming",
        "Table Tennis",
        "Taekwondo",
        "Tennis",
        "Trampoline Gymnastics",
        "Triathlon",
        "Volleyball",
        "Water Polo",
        "Weightlifting",
        "Wrestling"
        
        );

        \App\Models\Category::factory()->create([
            'name' => 'Test User',
        
         'email' => 'test@example.com',
        
        ]);
    }
}
