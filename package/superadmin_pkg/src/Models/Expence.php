<?php

namespace TeamBravo\SuperAdmin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expence extends Model
{
    use HasFactory;
    protected $fillable=['sector','amount','date','month','year'];
}
