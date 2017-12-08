<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    protected $fillable = ['alamat'];

    public function users()
    {
      return $this->belongsTo(User::class);
    }

    public function bukus()
    {
      return $this->hasMany(Buku::class);
    }
}
