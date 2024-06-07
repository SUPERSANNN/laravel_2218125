<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $primaryKey = 'id_item';
    public $incrementing = true;
    protected $fillable = ['nama_item', 'harga_item', 'stok'];
    public $timestamps = false;
}
