<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lpo_puskesmas extends Model
{
    use HasFactory;
    protected $table ='puskesmas_lplpo';
    protected $fillable = [
 
        'id_obat',
        'kode_lplpo',
        'stok_awal',
        'penerimaan',
        'persediaan',
        'pemakaian',
        'sisa_stok',
        'stok_opname',
        'permintaan',
        'pemberian',
        'keterangan',

    ];
    public function lplpo(){
        return $this->hasMany(obat::class);
    }

    protected $hidden = 
    [
        'created_at',
        'updated_at',
    ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
