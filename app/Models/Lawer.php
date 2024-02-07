<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawer extends Model
{
    use HasFactory;

    protected $fillable = ['lfirm','lname','laddress','lnumber','lemail','ldetails','llanguage','lcategory'];
}
