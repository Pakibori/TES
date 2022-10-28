<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class kadaluwarsa extends Model
{
    use HasFactory;
    protected $table ='kadaluwarsa';
    protected $fillable = [
        'kode_exp',
        'id_master',
        'id_obat_masuk',
        'jumlah',
        'keterangan',
        'created_at',
        'updated_at',
        
    ];

    public function kadaluwarsa(){
        return $this->hasMany(obat_masuk::class);
    }
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
