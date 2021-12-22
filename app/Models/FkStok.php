<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FkStok extends Model
{
    use HasFactory;

    protected $table = 'fk_pk_obt';

    protected $fillable = [
        'kode_obat',
        'id_user',
        'stok',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function obat()
    {
        return $this->belongsTo(MasterObat::class, 'kode_obat');
    }
}
