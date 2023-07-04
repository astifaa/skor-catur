<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertandingan extends Model
{
  use HasFactory;

  protected $table='pertandingan_peserta';
  protected $primaryKey='id_pertandingan_peserta';
  public $incrementing =false;
  public $timestamps=true;

  protected $fillable = [
    'id_peserta',
    'babak_1',
    'babak_2',
    'babak_3',
    'babak_4',
    'babak_5',
    'babak_6',
    'babak_7',
    'babak_8',
    'babak_9',
 ];
}
