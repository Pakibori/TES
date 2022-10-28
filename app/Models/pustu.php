<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pustu extends Model
{
    use HasFactory;
    protected $table ='pustu';
    protected $fillable = [
        'id',
        'email_pus',
        'nama_pus',
        'no_telp_pus',
        'alamat_pus',
        'kepala_pus',
        'created_at',
        'updated_a'

    ];

    public function pustu(){
        return $this->hasMany(distribusi::class);
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
