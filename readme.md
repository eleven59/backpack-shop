# BackpackShop

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This packages adds customizable models, CRUD panels, and order functionality for building a webshop with [Backpack for Laravel](https://backpackforlaravel.com). 

Functionality:
- Create product categories and products
- Add custom product attributes and statuses
- Process orders and payments
- Customizable shipping rules based on location, package size and/or weight
- Fully featured CRUD panels for all of the above
- Shopping cart helper
- Automated installer
- Fully translatable CRUD using default lang files (EN and NL included)

## Requirements

First, make sure you are running `PHP 8.1+` and have installed:

- Backpack (`5.x`) ([install guide](https://backpackforlaravel.com/docs/5.x/installation))
- Backpack Pro (sorry, it's required for now; see [pricing](https://backpackforlaravel.com/pricing))

This package was tested extensively with Laravel 8 and Backpack 5. It seemed fine with Laravel 9 and 10, and Backpack 6 as well, but no guarantees (yet). I will be updating the package for Backpack 6 compatibility, but I have no idea on the ETA for that.

I'm also planning to make Backpack Pro optional, so it will be more accessible. Again, no ETA.

## Installation

### Step 1 - require package

Install the package via Composer

```bash
composer require eleven59/backpack-shop
```

### Step 2 - run installer

Then run the installer, which publishes the config file, runs all required migrations, and adds shop items to the sidebar_contents file.

```bash
php artisan backpack-shop:install
```

### Step 3 - config

Please check `config/eleven59/backpack-shop.php` since some things will need to be configured for your particular use case.

### Step 4 - minimum requirements

After updating the config file, almost everything should run out of the box, but a couple of things will need to be done in the Backpack Admin to use the package effectively (i.e., prevent unexpected errors). The bare minimum is:

- Define at least one VAT class in the `VAT classes` CRUD panel
- Define at least one package size (if using, see config) using the `Shipping sizes` CRUD panel
- Create at least one shipping rule on the `Shipping rules` CRUD panel

### Step 5 (optional but recommened) - pick or build payment provider

This package does not come with a payment provider included. It does, however, come with a "No payment" provider. This is the default, and works in all cases where customers don't have to pay online (i.e., they pay using bank transfer, you only offer pay and collect, or everything in the store is free).

If you do need a payment provider, I have written one for [Mollie](https://mollie.com), which you can find here: [eleven59/backpack-shop-mollie](https://github.com/eleven59/backpack-shop-mollie). Install instructions and how to configure are also in the readme for that package.

It's also relatively easy to write your own if you already have code to talk with your payment provider of choice and only need to integrate it with the shopping cart and checkout functionality of this package. See [payment-providers.md](./docs/payment-providers.md) for the documentation.

## Usage

See [docs/usage.md](./docs/usage.md).

## Change log

Changes are documented here on Github. Please browse the commit history.

Breaking changes will be listed here, however. None so far.

## Testing

This package provides no testing.

## Contributing

Please see [contributing.md](contributing.md) for a todolist and howtos.

## Security

If you discover any security related issues, please email info@eleven59.nl instead of using the issue tracker.

## Credits

- Author: [eleven59.nl](https://eleven59.nl) (github: [eleven59](https://github.com/eleven59))
- Built with [Backpack for Laravel](https://backpackforlaravel.com). Special thanks to [Cristian Tăbăcitu](https://github.com/tabacitu) and the rest of the Backpack team for the awesome work.

## License

This project was released under MIT, so you can install it on top of any Backpack & Laravel project. Please see the [license file](license.md) for more information. 

However, please note that you do need Backpack Pro (note: 5.x) installed, which is proprietary software. Please refer to their [pricing](https://backpackforlaravel.com/pricing) page to get started.

A version that does not require Backpack Pro but only the open core source is planned, but will probably not be released for a while.


[ico-version]: https://img.shields.io/packagist/v/eleven59/backpack-shop.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/eleven59/backpack-shop.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/eleven59/backpack-shop
[link-downloads]: https://packagist.org/packages/eleven59/backpack-shop
