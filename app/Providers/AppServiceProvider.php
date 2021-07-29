<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        JsonResource::withoutWrapping();

        \Gate::define('view', function (User $user, $model) {
            return false;
            return $user->hasAccess("view_{$model}") || $user->hasAccess("edit_{$model}");
        });

        \Gate::define('view', fn (User $user, $model) => $user->hasAccess("edit_{$model}"));
    }
}
