<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Auth\RoleUserProvider;

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
        Auth::provider('role_eloquent', function ($app, array $config) {
            $roleCondition = $config['role'] ?? null;
            return new RoleUserProvider($app['hash'], $config['model'], $roleCondition);
        });
    }
}