<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
  public function edit(User $user, Job $job)
  {
 // Check if the authenticated user is the employer of the job
      // If the user is not the creator of the job, they are not authorized to edit it
      return $job->employer->user->is($user);
  }
}
