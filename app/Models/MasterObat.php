<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterObat extends Model
{
    use HasFactory;

    protected $table = 'master_obat';
    public $primaryKey = 'kode_obat';
    public $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'kode_obat', 'nama_obat', 'kode_gol_obat', 'kode_satuan_kecil', 'kode_satuan_besar', 'kode_terapi_obat'
    ];

    public function detailTransaksiObat()
    {
        return $this->hasMany(DetailTransaksiObat::class, 'kode_obat', 'kode_obat');
    }

    public function stok()
    {
        return $this->hasMany(FkStok::class, 'kode_obat', 'kode_obat');
    }
}
