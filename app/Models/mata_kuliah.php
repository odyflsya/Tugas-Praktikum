<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mata_kuliah extends Model
{
    use HasFactory;
    protected $table = 'mata_kuliah';
    protected $primaryKey = 'id_matkul';
    protected $fillable = ['matkul'];
    public $time_stamps = false;

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }  
}
