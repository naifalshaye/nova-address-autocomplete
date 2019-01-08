## Nova Address AutoComplete Field

An address field that autocomplete the user input to show suggested addresses using Google Place service.

## Installation

You can install the package in to a Laravel app that uses Nova via composer:

```bash
composer require naif/address_autocomplete
```
## Configuration
Publish the package config file:
```bash
php artisan vendor:publish --provider="Naif\AddressAutocomplete\FieldServiceProvider"
```

Configuration will be published at [config/address_autocomplete.php].


Add the following keys to your `.env` and `.env.example`:

```
ADDRESS_AUTOCOMPLETE_API_KEY=

Optional: Set map and address language
ADDRESS_AUTOCOMPLETE_LANGUAGE=fr
```

_If you need a Google Maps API key, you can create an app and enable Places API and create credentials to get your API key https://console.developers.google.com._


## Usage:
Add the below to Nova/User.php resource:

```php

AddressAutocomplete::make('Address'),

//You can add a country or countries to autocomplete or leave empty for all.
          
// Specify a single country
AddressAutocomplete::make('Address')
          ->countries('US'),
                
// Specify multiple countries [array]
AddressAutocomplete::make('Address')
          ->countries(['US','AU']),
```

![Package screenshot](https://pbs.twimg.com/media/DlnCDrbX0AAi1fw.jpg)

## Support:
naif@naif.io

https://www.linkedin.com/in/naif

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
