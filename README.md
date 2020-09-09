# Laravel package to programatically run php cs fixer

[![Latest Version on Packagist](https://img.shields.io/packagist/v/acadea/fixer.svg?style=flat-square)](https://packagist.org/packages/acadea/fixer)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/acadea/fixer/run-tests?label=tests)](https://github.com/acadea/fixer/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/acadea/fixer.svg?style=flat-square)](https://packagist.org/packages/acadea/fixer)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

Learn how to create a 

Follow us on Youtube: 


## Installation

This package assumes you have [php-cs-fixer](https://github.com/FriendsOfPhp/PHP-CS-Fixer) installed at `/usr/local/bin/php-cs-fixer`

You can install the package via composer:

```bash
composer require acadea/fixer
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Acadea\Fixer\FixerServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Acadea\Fixer\FixerServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$fixer = new Acadea\Fixer();
echo $fixer->echoPhrase('Hello, Acadea!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email opensource@acadea.io instead of using the issue tracker.

## Credits

- [Sam Ngu](https://github.com/sam-ngu)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
