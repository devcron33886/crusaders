<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trainee extends Model
{
    use SoftDeletes;
    public const CATEGORY_SELECT = [
        'Fundamental program' => 'Fundamental program',
        'Elite program'       => 'Elite program',
    ];
    protected $guarded = [];
}
