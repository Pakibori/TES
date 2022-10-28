<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;
    protected $table ='obat';
    protected $fillable = [
        'id',
        'id_master',
        'id_kategori',
        'stok',
        'lemari',
        'rak',
        'stok_awal',
        'created_at',
        'updated_at',
        
    ];

    public function obat(){
        return $this->hasMany(Kategori::class);
    }
    public function obats()
    {
       return $this->belongsTo(User::class);
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
