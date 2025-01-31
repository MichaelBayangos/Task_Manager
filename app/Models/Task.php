<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name','task','priority','date_id'];
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    public function date(){
        return $this->belongsTo(Date::class);
    }
}
