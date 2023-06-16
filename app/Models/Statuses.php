<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuses extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_status',
    ];

    public function laporan()
    {
        return $this->belongsTo(Laporan::class);
    }
}
