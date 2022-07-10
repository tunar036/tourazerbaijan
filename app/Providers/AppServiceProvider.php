<?php

namespace App\Providers;

use App\Models\Address;
use App\Models\Social;
use Doctrine\DBAL\Schema\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        $phone1 = Social::where('name', 'phone1')->value('content') ?? '';
        $phone2 = Social::where('name', 'phone2')->value('content') ?? '';
        $email = Social::where('name', 'email')->value('content') ?? '';
        $instagram = Social::where('name', 'instagram')->value('content') ?? '';
        $facebook = Social::where('name', 'facebook')->value('content') ?? '';
        view()->share([
            'phone1' => $phone1,
            'phone2' => $phone2,
            'email' => $email,
            'instagram' => $instagram,
            'facebook' => $facebook,
        ]);

        Paginator::useBootstrap();

    }
}
