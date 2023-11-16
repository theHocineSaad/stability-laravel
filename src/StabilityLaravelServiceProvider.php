<?php

namespace TheHocineSaad\StabilityLaravel;

use Illuminate\Support\ServiceProvider;
use Stability\Client;
use TheHocineSaad\StabilityLaravel\Exceptions\MissingApiKey;

class StabilityLaravelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'stability');

        if(! config('stability.api_key'))
        {
            throw MissingApiKey::exception();
        }

        $this->app->bind('stability', function ($app) {
            $client = new Client(config('stability.api_key'));

            if (config('stability.accept_header')) {
                $client->withOrganizationHeader(config('stability.accept_header'));
            }

            if (config('stability.organization')) {
                $client->withOrganizationHeader(config('stability.organization'));
            }

            if (config('stability.client_id')) {
                $client->withStabilityClientIdHeader(config('stability.client_id'));
            }

            if (config('stability.client_version')) {
                $client->withStabilityClientVersionHeader(config('stability.client_version'));
            }

            return $client;
        });
    }

    public function boot()
    {
        //
    }
}
