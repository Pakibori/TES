<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class kategori extends Model
{
  
    use HasFactory;
    protected $table ='kategori';
    protected $fillable = [
        'nama_kategori',
        'nama_satuan',
        'created_at',
        'updated_at',
        
    ];
    public function getCreatedAttribut()
    {
        return Carbon::parse($this->attributes['create_at'])
        ->translatedFormat('1, d F Y');
        
    }
       
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
