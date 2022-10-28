<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class puskesmas_lplpo extends Model
{
    use HasFactory;
    protected $table ='puskesmas_lplpo';
    protected $fillable = [
 
        'id',
        'id_master',
        'id_kategori',
        'kode_lplpo',
        'penerimaan',
        'persediaan',
        'pemakaian',
        'sisa_stok',
        'stok_opname',
        'permintaan',
        'pemberian',
        'keterangan',
        'status',

    ];
    public function lplpo(){
        return $this->hasMany(obat::class);
    }
    public function getCreatedAttribut()
    {
        return Carbon::parse($this->attributes['create_at'])
        ->translatedFormat('1, d F Y');
        
    }

    protected $hidden = 
    [   'id',
        'created_at',
        'updated_at',
    ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
