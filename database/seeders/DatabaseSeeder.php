<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Wiki;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Community;
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
        //     'email' => 'test@example.com',
        // ]);

        $communities = [
            (object)[
                'name' => "Growtopia",
                'slug' => "growtopia"
            ],
            (object)[
                'name' => "Genshin Impact",
                'slug' => "genshin-impact"
            ],
        ];

        $wikis = [
            (object) [
                'community_id' => 1,
                'slug' => "Rayman's_Fist",
                'title' => "Rayman's Fist",
                'body' => "<p>Rayman's Fist best item omg</p>"
            ],
            (object) [
                'community_id' => 2,
                'slug' => "Ganyu",
                'title' => "Ganyu",
                'body' => "<p>Ganyu geming</p>"
            ],
            (object) [
                'community_id' => 1,
                'slug' => "MAGPLANT_5000",
                'title' => "MAGPLANT 5000",
                'body' => "<p>MAGPLANT 5000 best item omg\nbased on how <b>RARE</b> it is.</p>"
            ]
            ];

            foreach($communities as $community){
                $c = new Community();
                $c->name = $community->name;
                $c->slug = $community->slug;
                $c->save();
            }

            foreach($wikis as $wiki){
                $w = new Wiki();
                $w->community_id = $wiki->community_id;
                $w->slug = $wiki->slug;
                $w->title = $wiki->title;
                $w->body = $wiki->body;
                $w->save();
            }
    }
}
