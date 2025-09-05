<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {

  use HasFactory;

  // 1st approach:    - useful if there is already existing "Job table" for this "class"
  // 2nd approach:    - Rename "class" to "JobListings"
  protected $table = 'job_listings';

  // required fields and only fields that eloquent will save to db
  protected $fillable = ['title', 'salary', 'employer_id'];

  // job belongs to employer
  // job = mark, employer = intellect
  public function employer() {
    return $this->belongsTo(Employer::class);
  }

  public function tags () {
    return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
  }
}