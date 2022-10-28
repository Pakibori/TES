<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class master extends Model
{
    use HasFactory;
    protected $table ='master';
    protected $fillable = [
        'id',
        // 'id_ketagori',
        'kode_obat',
        'nama_obat',
        'no_obat',
        'created_at',
        'updated_at',
        
    ];

    public function getCreatedAttribut()
    {
        return Carbon::parse($this->attributes['create_at'])
        ->translatedFormat('1, d F Y');
        
    }

    protected $hidden = 
    [
        'id',
        'created_at',
        'updated_at',
    ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
