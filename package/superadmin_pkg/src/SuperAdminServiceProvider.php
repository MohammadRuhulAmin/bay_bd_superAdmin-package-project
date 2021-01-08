<?php
namespace TeamBravo\SuperAdmin;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Blade;
class SuperAdminServiceProvider extends ServiceProvider{

    public function boot(){
        
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views',"SuperAdmin");
        $this->publishes([__DIR__.'/assets'=>public_path('superadmin_pkg')],'assets');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
   
        

    }
    public function register(){


    }

}
