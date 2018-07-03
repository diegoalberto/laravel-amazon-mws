<?php
/**
 * Created by PhpStorm.
 * User: zenkr
 * Date: 2018/7/1
 * Time: 22:17
 */

namespace ASTGroup\LaravelAmazonMws;

use Illuminate\Support\ServiceProvider;

class MwsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the Mws Instances to be set up with the API-key.
     * Then, the IoC-container can be used to get Mws instances ready for use.
     *
     * @return void
     */
    public function register()
    {
        //Register Aliases
        foreach (glob(__DIR__.'/Classes/*.php') as $filename) {
            $amz_alias_name = basename($filename, ".php");
            $amz_alias_path = 'Classes'.'/'.$amz_alias_name;
            if ($amz_alias_name != 'environment')
            {
                $this->app->alias($amz_alias_name, $amz_alias_path);
            }
        }
    }

    /**
     * Set up the MWS configuration
     */
    public function boot()
    {

        $this->publishes([
            __DIR__.'/../config.default.php' => config_path('amazon-mws.php'),
        ]);

    }
}