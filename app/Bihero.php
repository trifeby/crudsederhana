<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Bihero extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'biheros';

    protected $fillable = [
    'image', 'nama', 'asal', 'lahirwafat', 'penetapan', 'ringkasan', 'penjelasan', 'created_at'];
}
