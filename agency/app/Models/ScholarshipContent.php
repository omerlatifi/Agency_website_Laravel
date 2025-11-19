<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'heading1', 'paragraph1',
        'heading2', 'paragraph2',
        'heading3', 'paragraph3',
        'heading4', 'paragraph4',
        'heading5', 'paragraph5',
    ];
}
