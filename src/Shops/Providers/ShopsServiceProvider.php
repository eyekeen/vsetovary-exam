<?php

namespace Shops\Providers;

use Illuminate\Support\ServiceProvider;

class ShopsServiceProvider extends ServiceProvider
{
    protected array $policies  =  [
        'Shops\Domain\Models\Shop' => 'Shops\Application\Policies\ShopPolicy',
    ];

    public function register()
    {
        
    }


    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes.php');

        $this->loadMigrationsFrom(__DIR__ . '/../Infrastructure/Database/Migrations');
    }
}
