<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $fillable = ['date'];
    /** @use HasFactory<\Database\Factories\DateFactory> */
    use HasFactory;

    public function task(){
        return $this->hasMany(Task::class);
    }
}
