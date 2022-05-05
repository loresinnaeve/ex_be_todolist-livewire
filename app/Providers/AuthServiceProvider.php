<?php

namespace App\Providers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('remove-todo', function(User $user, Todo $todo){
            //dd($user);
           if($todo->user->is($user)) {
               return true;
           }
        });


        Gate::before(function(User $user){
            if($user->isAdmin()){
                return true;
            }
        });
    }
}
