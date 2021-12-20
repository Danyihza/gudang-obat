<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksiObat extends Model
{
    use HasFactory;

    protected $table = 'detail_transaksi';
    public $primaryKey = 'no_batch';
    public $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'no_batch', 
        'kode_transaksi',
        'kode_obat',
        'nomor_faktur',
        'kadaluarsa',
        'harga',
        'jumlah',
        'tipe_transaksi'
    ];

    public function masterObat()
    {
        return $this->belongsTo(MasterObat::class, 'kode_obat', 'kode_obat');
    }

    public function transaksiObat()
    {
        return $this->belongsTo(TransaksiObat::class, 'kode_transaksi', 'kode_transaksi');
    }
}
