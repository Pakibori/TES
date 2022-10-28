<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;
    protected $table ='status';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'status_admin',
        'status_dinas',
        'status_gudang',
        'status_puskesmas',
    ];
    public function status(){
        return $this->hasMany(users::class);
    }

    protected $hidden = 
    [
        'created_at',
        'updated_at',
    ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
