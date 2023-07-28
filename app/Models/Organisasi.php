<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'organisasis';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_organisasi',
        'id_anggota',
        'jumlah_anggota',
        'struktur',
        'anggota',
        'created_at', 
        'updated_at'
    ];
     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Users()
    {
        return $this->hasMany(User::class);
    }

    public function Forums()
    {
        return $this->hasMany(Forum::class);
    }
    public function News()
    {
        return $this->hasMany(News::class);
    }
}