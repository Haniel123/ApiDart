<?php

namespace App\Models;
use App\Models\HinhAnhDiaDanh;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaDanh extends Model
{
  use HasFactory;
    protected $table='dia_danhs';
    protected $fillable = [
      'TenDiaDanh',
      'ViTri',
      'MoTa',
  ];
  public function HinhAnhDiaDanh()
  {
      return $this->hasOne(HinhAnhDiaDanh::class, 'id','DiaDanhId');
  }
}
