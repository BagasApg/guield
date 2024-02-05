<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Ticket;
use Carbon\Carbon;
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

        $tickets = [
            (object)[
                'event_id'=> 1,
                'user_id'=> 1,
                'unique' => 123456789,
                'name' => 'Bagasap',
                'registered_at' => Carbon::now()
            ],
            (object)[
                'event_id'=> 1,
                'user_id'=> 3,
                'unique' => 987654321,
                'name' => 'Kinnarasarp',
                'registered_at' => Carbon::now()

            ],
            (object)[
                'event_id'=> 1,
                'user_id'=> 2,
                'unique' => 123789456,
                'name'=> 'achmad06',
                'registered_at' => Carbon::now()
            ],
            ];

        foreach ($tickets as $ticket) {
            $t = new Ticket();
            $t->event_id = $ticket->event_id;
            $t->user_id = $ticket->user_id;
            $t->unique = $ticket->unique;
            $t->name = $ticket->name;
            $t->registered_at = $ticket->registered_at;
            $t->save();
        }
    }
}
