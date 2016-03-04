<?php

namespace	Joseomar94\Table;
/**
 *
 *
 */
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\App;


class TableServiceprovider extends ServiceProvider{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../themes', 'themes');

        $this->publishes([
            __DIR__.'/../themes' => base_path('resources/views/joseomar94/themes'),
        ]);

        $this->publishes([
            __DIR__.'/../config.php' => config_path('table.php'),
        ]);
    }



    public function register()
    {
        $this->registerTable();
    }


    protected function registerTable()
    {
        $this->app['table'] = $this->app->share(function($app)
        {
            return new TableComponent;
        });
    }


    protected function registerTableFacades()
    {
        $this->app->booting(function()
        {
            $loader = AliasLoader::getInstance();
            $loader->alias('Table', 'Joseomar94\Table\Facades\TableFacade');
        });

    }



    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('Table');
    }





}