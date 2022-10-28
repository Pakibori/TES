<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class puskesmas extends Model
{
    use HasFactory;
    protected $table ='puskesmas';
    protected $fillable = [
        'id',
        'nama_puskesmas',
        'email_puskesmas',
        'no_telp_puskesmas',
        'alamat_puskesmas',
        'kepala_puskesmas',
        'created_at',
        'updated_a'

    ];

    public function Satuan(){
        return $this->belongsTo(Kategori::class);
    }

    protected $hidden = 
    [
        'id_satuan',
        'created_at',
        'updated_at',
    ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
