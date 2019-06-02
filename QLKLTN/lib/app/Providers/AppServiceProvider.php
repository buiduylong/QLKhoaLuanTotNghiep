<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{ThanhVien,ThongBao};
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        // view()->share($data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
