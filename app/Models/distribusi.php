<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class distribusi extends Model
{
    use HasFactory;
    protected $table ='distribusi';
    protected $fillable = [
        'id_master',
        'id_user',
        'jumlah_distribusi',
        'tanggal_distribusi',
        'keterangan_distribusi',
        'tanggal_exp_date',
        'created_at',
        'updated_at',
        
    ];

    public function distribusi(){
        return $this->hasMany(pustu::class);
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
