<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class obat_keluar extends Model
{
    use HasFactory;
    protected $table ='obat_keluar';
    protected $fillable = [
        'id',
        'id_master',
        'id_obat',
        'kd_transaksi_ok',
        'jumlah_keluar',
        'tanggal_exp',
        'keterangan',
        'created_at',
        'updated_at',
        
    ];

    public function obat(){
        return $this->hasMany(obat::class);
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
