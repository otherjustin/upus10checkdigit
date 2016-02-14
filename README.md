This is small package for generating UPU S10 check digits. While attempting to automatically generate labels for Deutsche Post, I discovered that they are using a UPU S10 check digit in the tracking code, and thus this library was born.

## Installation
Composer is the recommended way to install this package:

```
composer require otherjustin/upus10checkdigit
```

## Small usage example

This is fairly easy to use:

```php
$checkdigit = CheckDigit::generateCheckDigit(12345678);
```

## License
This package is published under `MIT` license, which can be found in LICENSE.txt. 

## Copyright
[Justin Scott](http://www.justinscott.net)