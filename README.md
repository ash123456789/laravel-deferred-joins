# Laravel Deferred Joins

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ash123456789/laravel-deferred-joins.svg?style=flat-square)](https://packagist.org/packages/ash123456789/laravel-deferred-joins)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ash123456789/laravel-deferred-joins/run-tests?label=tests)](https://github.com/ash123456789/laravel-deferred-joins/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ash123456789/laravel-deferred-joins/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ash123456789/laravel-deferred-joins/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ash123456789/laravel-deferred-joins.svg?style=flat-square)](https://packagist.org/packages/ash123456789/laravel-deferred-joins)

A simple Laravel package to improve pagination performance through the usage of deferred joins.

The code is originally by [Aaron Francis](https://github.com/aarondfrancis), all I did was put it into a composer package to make life easier for myself to use it in a few projects.

While this package allows you to quickly implement deferred join pagination, you will still need to add a covering index where needed. See [here](https://aaronfrancis.com/2022/efficient-pagination-using-deferred-joins#deferred-joins-and-covering-indexes) for more information.

You can read more about the benefits [here](https://aaronfrancis.com/2022/efficient-pagination-using-deferred-joins).

## Installation

You can install the package via composer:

```bash
composer require ash123456789/laravel-deferred-joins
```

## Usage

You can use deferred pagination on any model query, like so:

```php
User::query()->deferredPaginate(24);

User::deferredPaginate(24);
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Aaron Francis](https://github.com/aarondfrancis)
- [Ash](https://github.com/ash123456789)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
