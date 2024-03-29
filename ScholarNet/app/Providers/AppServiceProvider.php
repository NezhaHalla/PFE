<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Contact;
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
        // Retrieve the unread message count
        $unreadMessageCount = Contact::where('is_read', false)->count();

        // Share the unread message count with all views
        view()->share('unreadMessageCount', $unreadMessageCount);
    }
}
