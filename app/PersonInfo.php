<?php

namespace cruiserplan;

use Illuminate\Database\Eloquent\Model;

class PersonInfo extends Model
{
    protected $fillable = ['first_name', 'last_name', 'gender', 'birth_date', 'anniv_date', 'mobile_no', 'cpconnect_question'];
}
