# Patron support for ICanBoogie/Render

[![Release](https://img.shields.io/packagist/v/icybee/patron-render-support.svg)](https://packagist.org/packages/icybee/patron-render-support)
[![Build Status](https://img.shields.io/travis/Icybee/patron-render-support.svg)](http://travis-ci.org/Icybee/patron-render-support)
[![HHVM](https://img.shields.io/hhvm/icybee/patron-render-support.svg)](http://hhvm.h4cc.de/package/icybee/patron-render-support)
[![Code Quality](https://img.shields.io/scrutinizer/g/Icybee/patron-render-support.svg)](https://scrutinizer-ci.com/g/Icybee/patron-render-support)
[![Code Coverage](https://img.shields.io/coveralls/Icybee/patron-render-support.svg)](https://coveralls.io/r/Icybee/patron-render-support)
[![Packagist](https://img.shields.io/packagist/dt/icybee/patron-render-support.svg)](https://packagist.org/packages/icybee/patron-render-support)

The package **icybee/patron-render-support** provides Patron support to [icanboogie/render][],
which consists mainly in an engine to render ".patron" templates and the `render` markup.





----------





## Requirement

The package requires PHP 5.5 or later.





## Installation

The recommended way to install this package is through [Composer](http://getcomposer.org/):

```
$ composer require icybee/patron-render-support
```





### Cloning the repository

The package is [available on GitHub](https://github.com/Icybee/patron-render-support), its repository can
be cloned with the following command line:

	$ git clone https://github.com/Icybee/patron-render-support.git





## Documentation

The package is documented as part of the [ICanBoogie][] framework
[documentation](http://icanboogie.org/docs/). You can generate the documentation for the package and its dependencies with the `make doc` command. The documentation is generated in the `build/docs` directory. [ApiGen](http://apigen.org/) is required. The directory can later be cleaned with the `make clean` command.





## Testing

The test suite is ran with the `make test` command. [PHPUnit](https://phpunit.de/) and [Composer](http://getcomposer.org/) need to be globally available to run the suite. The command installs dependencies as required. The `make test-coverage` command runs test suite and also creates an HTML coverage report in "build/coverage". The directory can later be cleaned with the `make clean` command.

The package is continuously tested by [Travis CI](http://about.travis-ci.org/).

[![Build Status](https://img.shields.io/travis/Icybee/patron-render-support.svg)](https://travis-ci.org/Icybee/patron-render-support)
[![Code Coverage](https://img.shields.io/coveralls/Icybee/patron-render-support.svg)](https://coveralls.io/r/Icybee/patron-render-support)





## License

This package is licensed under the New BSD License - See the [LICENSE](LICENSE) file for details.





[icanboogie/render]: https://github.com/ICanBoogie/Render
[ICanBoogie]: https://github.com/ICanBoogie/ICanBoogie
