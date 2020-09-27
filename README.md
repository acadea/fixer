# Laravel Fixer

[![Latest Version on Packagist](https://img.shields.io/packagist/v/acadea/fixer.svg?style=flat-square)](https://packagist.org/packages/acadea/fixer)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/acadea/fixer/run-tests?label=tests)](https://github.com/acadea/fixer/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/acadea/fixer.svg?style=flat-square)](https://packagist.org/packages/acadea/fixer)


A tiny Laravel package to programmatically fix code using PHP CS Fixer. 


## Support us 

Follow us on Youtube: [Acadea.io](https://www.youtube.com/channel/UCU5RsUGkVcPM9QvFHyKm1OQ)


## Installation

This package assumes you have [php-cs-fixer](https://github.com/FriendsOfPhp/PHP-CS-Fixer) installed at `./vendor/bin/php-cs-fixer`

You can install the package via composer:

```bash
composer require acadea/fixer
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Acadea\Fixer\FixerServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
    'binary' => 'path/to/bin',
    'rules' => [
        // php cs fixer rules, see the docs for more info
    ]   
];
```

## Usage

```php
use Acadea\Fixer\Facade\Fixer;

// ..

$fixed = Fixer::format($code);

```

## Testing

```bash
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
