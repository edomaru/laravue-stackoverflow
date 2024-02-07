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

// //mmembuat method setter
// public function setTitleAttribute($value) {
//     $this->attributes['title'] = $value;
//     $this->attributes['slug'] = Str::slug($value);
// }

// //membuat method getter
// public function getUrlAttribute() {
//     return route('questions.show',$this->id);
// }

// //membuat method getter ke.2
// public function getCreatedDateAttribute() {
//     return $this->created_at->diffForHumans();
// }

//get status question
public function getStatusAttribute() {
    if($this->answer > 0){
        if($this->best_answer_id){
            return "jawaban terbaik";
        }else{
            return "sudah terjawab";
        }
    }else{
        return "belum terjawab";
    }
}

}
