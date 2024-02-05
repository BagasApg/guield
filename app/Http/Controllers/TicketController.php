<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    public function scan(Request $request){
        // dd($ticket->id);
        $ticket = Ticket::where('unique', $request->unique)->first();

        if($ticket == null){
            return 0;
        } 
        
        $ticket['status'] = 1;
        return response()->json($ticket);
    }
}
