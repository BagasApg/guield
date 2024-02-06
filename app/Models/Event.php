<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    

    public function formatDate(){
        return Carbon::parse($this->date)->format('l, jS \\of F Y');
    }
}
