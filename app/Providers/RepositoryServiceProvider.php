<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\DictionaryRepositoryInterface;
use App\Repositories\DictionaryRepository;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DictionaryRepositoryInterface::class, DictionaryRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
