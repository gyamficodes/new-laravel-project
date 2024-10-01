<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use App\Models\job;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    Model::preventLazyLoading();

    // Define a Gate for editing jobs
    // Gate::define('edit-job', function (User $user, Job $job) {
    //   // Check if the authenticated user is the employer of the job
    //   // If the user is not the creator of the job, they are not authorized to edit it
    //   return $job->employer->user->is($user);
    // });
  }
}
