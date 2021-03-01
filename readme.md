# QuickCalculator

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This is simple package to do A summation and Subtraction

## Installation

Via Composer

``` bash
composer require takielias/quickcalculator
```

## Usage

``` bash
use TakiElias\QuickCalculator\Facades\QuickCalculator;
```

``` bash
$calculator = QuickCalculator::plus(10, 2)->minus(2, 1);
$result = $calculator->summation()->get();
```

## Security

If you discover any security related issues, please email taki.elias@gmail.com instead of using the issue tracker.

## Credits

- [Taki Elias][link-author]

## License

MIT.

[ico-version]: https://img.shields.io/packagist/v/takielias/quickcalculator.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/takielias/quickcalculator.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/takielias/quickcalculator/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/takielias/quickcalculator
[link-downloads]: https://packagist.org/packages/takielias/quickcalculator
[link-travis]: https://travis-ci.org/takielias/quickcalculator
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/takielias
