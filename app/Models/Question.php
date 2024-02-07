<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title','body'];

    //membuat relasi dengan table user
    public function user()
{
    return $this->belongsTo(User::class);
}

//mmembuat method setter
public function setTitleAttribute($value) {
    $this->attributes['title'] = $value;
    $this->attributes['slug'] = Str::slug($value);
}

}
