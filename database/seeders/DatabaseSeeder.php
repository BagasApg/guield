<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Event;
use App\Models\Ticket;
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

        $events = [
            (object)[
                'name' => 'Diesnatalis 2024',
                'date' => Carbon::now(),
                'time' => Carbon::now()->toTimeString(),
                'quota' => 250
            ],
            (object)[
                'name' => 'Open Air 2k24',
                'date' => Carbon::yesterday(),
                'time' => Carbon::yesterday()->toTimeString(),
                'quota' => 250
            ],
        ];

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

        foreach ($events as $event) {
            $e = new Event();
            $e->name = $event->name;
            $e->date = $event->date;
            $e->time = $event->time;
            $e->quota = $event->quota;
            $e->save();
        }
    }
}
