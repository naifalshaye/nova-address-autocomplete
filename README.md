## Nova Address AutoComplete Field

An address field that autocomplete the user input to show suggested addressess using Google Place service.

## Installation

You can install the package in to a Laravel app that uses Nova via composer:

```bash
composer require naif/address_autocomplete
```

## Usage:
Add the below to Nova/User.php resource:

```php

AddressAutocomplete::make('Address'),
                
```

Add the below to nova/resources/views/layout.blade.php

```php

<script src="https://maps.googleapis.com/maps/api/js?key={{env('ADDRESS_AUTOCOMPLETE_API_KEY')}}&libraries=places"></script>
             
```

Add the below to your .env file

Create an app and enable Places API and create credentials to get your API key
https://console.developers.google.com

```php

ADDRESS_AUTOCOMPLETE_API_KEY=############################

```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
