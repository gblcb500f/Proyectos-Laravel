<?php

namespace App;

use App\Http\Requests\Files;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded = [];
    protected $table = 'project_images';
}
