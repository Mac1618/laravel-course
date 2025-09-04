<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    // employer has many jobs
    // employer = intellect, job = developer, VPO, HR, Manager
    public function jobs () {
        return $this->hasMany(Job::class);
    }
}
