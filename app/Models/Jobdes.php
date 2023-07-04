<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobdes extends Model
{
  use HasFactory;

  protected $table='jobdes';
  protected $primaryKey='id_jobdes';
  public $incrementing =false;
  public $timestamps=true;

  protected $fillable = [
    'nama_jobdes',
 ];
}
