<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
    use HasFactory;
    protected $fillable = ['kode_masuk','tanggal_masuk','kode_admin','kode_supplier','total masuk'];
}
