<?php
namespace Mohaimen\RepositoryMake;

use Illuminate\Support\ServiceProvider;

class RepositoryMakeCommandServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }

    protected function registerCommands(): void
    {
        $this->commands([
            RepositoryMakeCommand::class,
        ]);
    }

}