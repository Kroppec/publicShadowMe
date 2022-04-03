<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id',
      'profession',
      'organisation',
      'task_1',
      'task_2',
      'task_3',
      'step_1',
      'step_2',
      'step_3',
      'radio_1',
      'comment_1',
      'radio_2',
      'comment_2',
      'radio_3',
      'comment_3',
      'radio_4',
      'comment_4',
      'radio_5',
      'comment_5',
      'radio_6',
      'comment_6',
      'analysis',
      'submitted',
    ];
}
