<?php

namespace Shops\Providers;

use App\Helpers\DomainServiceProvider;

class ShopsServiceProvider extends DomainServiceProvider
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
