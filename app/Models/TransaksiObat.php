<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiObat extends Model
{
    use HasFactory;

    protected $table = 'transaksi_obat';
    public $primaryKey = 'kode_transaksi';
    public $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'kode_transaksi', 
        'terima_dari',
        'nama_pengirim',
        'kirim_ke',
        'nama_penerima',
        'tanggal',
        'tipe_transaksi',
        'catatan'
    ];

    public static function generateKodePenerimaan($kodePuskesmas = null)
    {
        $kode_transaksi = self::latest()->first()->kode_transaksi;
        $kode_transaksi = explode('-', $kode_transaksi);
        $kode_transaksi = (int) $kode_transaksi[2];
        return $kode_transaksi;
    }

    public function detailTransaksiObat()
    {
        return $this->hasMany(DetailTransaksiObat::class, 'kode_transaksi', 'kode_transaksi');
    }
}
