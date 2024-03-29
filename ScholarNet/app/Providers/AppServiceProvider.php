<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Contact;
use App\Models\Resource;
use Illuminate\Support\Facades\Auth;
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
    public function boot()
    {
        $unreadMessageCount = Contact::where('is_read', false)->count();
        view()->share('unreadMessageCount', $unreadMessageCount);

       





    }


}
