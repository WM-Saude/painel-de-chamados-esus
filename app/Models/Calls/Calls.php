<?php

namespace App\Models\Calls;

use App\Models\Departaments\Departaments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calls extends Model
{
    use HasFactory;

    protected $fillable = [
        'departaments_id',
        'patients_name',
        'call_attempts',
        'call_closed',
        'calling',
        'bip'
    ];

    protected $with = [
        'departament'
    ];

    public function departament()
    {
        return $this->hasOne(Departaments::class, 'id', 'departaments_id');
    }

    public function getDepartamentNameAttribute()
    {
        return $this->departament()->name;
    }
}
