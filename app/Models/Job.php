<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
  // get all jobs
  public static function all(): array {
    return [
        [
            'id' => 1,
            'title' => 'Software Engineer',
            'salary' => '$60,000'
        ],
        [
            'id' => 2,
            'title' => "Teacher",
            'salary' => '$35,000'
        ],
        [
            'id' => 3,
            'title' => 'Communication Development',
            'salary' => '$85,000'
        ]
      ];
  }

  // find job by id
  public static function findId($id): array {
    // filter jobs by id
    $job = Arr::first(static::all(), fn($job) => $job['id'] === (int) $id);
        
    // if no job found
    if(!$job) {
      return abort(404);
    }

    return $job;
  }
}