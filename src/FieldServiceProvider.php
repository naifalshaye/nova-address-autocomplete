<?php

namespace Naif\AddressAutocomplete;

use Illuminate\Support\Facades\Config;
use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/address_autocomplete.php' => base_path('config/address_autocomplete.php'),
            ], 'config');
        }

        Nova::serving(function (ServingNova $event) {
            Nova::script('address_autocomplete_gmaps', $this->googleMapsSource());
            Nova::script('address_autocomplete', __DIR__.'/../dist/js/field.js');
            Nova::style('address_autocomplete', __DIR__.'/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/address_autocomplete.php', 'address_autocomplete');
    }

    private function googleMapsSource()
    {
        return vsprintf(
            'https://maps.googleapis.com/maps/api/js?key=%s&language=%s&libraries=places',
            [
                Config::get('address_autocomplete.api_key'),
                Config::get('address_autocomplete.language'),
            ]
        );
    }
}
