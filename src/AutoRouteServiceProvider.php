<?php
/**
 * Laravel IDE Helper Generator
 *
 * @author    Thomas Ricci <grisouricci@gmail.com>
 * @copyright 2014 Grisou13
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://github.com/Grisou13/AutoRoute
 */

namespace Grisou13\AutoRoute;

use Illuminate\Support\ServiceProvider;
use Grisou13\AutoRoute\Console\GenerateCommand;
use Grisou13\AutoRoute\Console\EditCommand;

class AutoRouteServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        
        
        $this->app['command.route.generate'] = $this->app->share(
            function ($app) {
                return new GenerateCommand();
            }
        );

        $this->app['command.route.edit'] = $this->app->share(
            function () {
                return new EditCommand();
            }
        );

        $this->commands('command.route.generate', 'command.router.edit');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('command.ide-helper.generate', 'command.ide-helper.models');
    }
}