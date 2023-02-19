<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireMeSubmissions extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_of_business',
        'project_budget',
        'required_pages',
        'designCreatedOrProvided',
        'websitesForInspiration',
        'project_start_date',
        'project_complete_date',
        'other_details',
        'first_name',
        'last_name',
        'email_address',
        'phone_number',
    ];
}
