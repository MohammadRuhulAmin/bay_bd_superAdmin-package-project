<?php
namespace TeamBravo\SuperAdmin;

use Illuminate\Support\ServiceProvider;

class SuperAdminServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views',"SuperAdmin");
    }
    public function register(){


    }

}
