<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nim extends Model
{
    use HasFactory;

    public function user(){
        return $this ->belongsTo(User::class);
    }

    public function kelas(){
        return $this->hasMany(kelas::class);
    }

}
