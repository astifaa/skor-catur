<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
  use HasFactory;

  protected $table='peserta';
  protected $primaryKey='id_peserta';
  public $incrementing =false;
  public $timestamps=true;

  protected $fillable = [
    'nama_lengkap',
    'jenis_kelamin',
    'tempat_lahir',
    'tanggal_lahir',
    'alamat',
    'no_hp',
    'id_jobdes',
 ];
}
