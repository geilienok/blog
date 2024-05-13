<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article -a extends Model
{
    public function snippet(): Attribute {
        return Attribute::get(function (){
            return substr($this->body, 0, 300);
        })
    }
}
