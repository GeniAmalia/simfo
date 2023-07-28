<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'news';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_organisasi',
        'judul_berita',
        'isi',
        'created_at', 
        'updated_at'
    ];
    public function organisasis()
    {
        return $this->belongsTo(Organisasi::class);
    }
}
