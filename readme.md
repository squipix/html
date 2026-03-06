
# Squipix HTML (Fork of LaravelCollective/html)

This package is a **drop-in replacement** for [collective/html](https://github.com/LaravelCollective/html), updated for Laravel 12 and PHP 8.2+ compatibility.

## What is this?

Squipix HTML is a fork of the original LaravelCollective/html library, maintained to support modern Laravel versions (11, 12+) and recent PHP releases. It preserves all original APIs and functionality, so you can switch from `collective/html` with minimal changes.

## Why fork?

LaravelCollective/html is no longer maintained and does not support Laravel 12. This fork updates dependencies, fixes compatibility issues, and resolves PHP deprecations.

## Installation

Install via Composer:

```
composer require squipix/html
```

## Usage

All usage is identical to `collective/html`. Replace your package references and service provider/aliases as follows:

**Service Provider:**

```
Squipix\Html\HtmlServiceProvider
```

**Aliases:**

```
Form => Squipix\Html\FormFacade
Html => Squipix\Html\HtmlFacade
```

## Changelog

- Updated for Laravel 12 and PHP 8.2+
- Fixed all PHP and PHPUnit deprecations
- Composer package name changed to `squipix/html`
- All namespaces changed to `Squipix\Html`

## Credits

Forked from [LaravelCollective/html](https://github.com/LaravelCollective/html).
Original authors: Adam Engebretson, Taylor Otwell, and contributors.
