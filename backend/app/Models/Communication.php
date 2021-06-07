<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    use HasFactory;
	
	protected $table = "communications";//communicationsテーブルと連携するために「protected $table」で指定しています。
	protected $fillable = ["file_name","file_path","name","passwold","message"];
}
