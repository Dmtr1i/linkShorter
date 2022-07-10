<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#use Illuminate\Support\Facades\DB;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        "old_link",
        "short_link",
    ];

    protected $primaryKey = "id";
}
