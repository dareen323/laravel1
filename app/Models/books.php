<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Books extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    use HasFactory,SoftDeletes ;
    public $timestamps = false;

}
