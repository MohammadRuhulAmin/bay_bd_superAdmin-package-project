<?php
namespace TeamBravo\SuperAdmin;

use Illuminate\Support\ServiceProvider;

class SuperAdminServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views',"SuperAdmin");
        $this->publishes([__DIR__.'/assets'=>public_path('superadmin_pkg')],'assets');
    }
    public function register(){


    }

}
