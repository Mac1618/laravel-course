<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model {

  // 1st approach:    - useful if there is already existing "Job table" for this "class"
  // 2nd approach:    - Rename "class" to "JobListings"
  protected $table = 'job_listings';

  // required fields and only fields that eloquent will save to db
  protected $fillable = ['title', 'salary'];
}