<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalepageSection extends Model
{
    use HasFactory;

    public function getSalePageNameAttribute(){
        return substr($this->section, strrpos($this->section, ".") + 1);
    } 
}
