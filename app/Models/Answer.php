<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question_id',
        'answer',
        'answer_image',
        'is_correct',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
