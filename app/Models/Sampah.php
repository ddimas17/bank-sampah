<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }
}
