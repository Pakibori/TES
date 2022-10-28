<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lplpo extends Model
{
    use HasFactory;
    protected $table ='lplpo';
    protected $fillable = [
        'id',
        'id_obat',
        'kode_obat',
        'no_batch_lplpo',
        'penerimaan',
        'persediaan',
        'pemakaian',
        'sisa_stok',
        'stok_opname',
        'permintaan',
        'pemberian',
        'tanggal_berlaku',
        'keterangan',
        'status',
        'created_at',
        'updated_a'

    ];


    protected $hidden = 
    [   'id',
        'created_at',
        'updated_at',
    ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
