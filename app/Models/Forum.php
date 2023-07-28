<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'forums';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_anggota',
        'id_organisasi',
        'Judul_forum',
        'isi',
        'jumlah_komentar',
        'created_at',
        'updated_at'
    ];
    public function organisasis()
    {
        return $this->belongsTo(Organisasi::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
