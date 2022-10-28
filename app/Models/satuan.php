<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
   
    use HasFactory;
    protected $table ='satuan';
    protected $fillable = [
        'id_satuan',
        'id_obat',
        'id_kategori',
        'nama_satuan',
        'jumlah_satuan',
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
