<?php

/*
 * This file is part of the Patron package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/../vendor/icybee/patron/config/hooks.php';

foreach ($config['patron.markups'] as $name => $definition)
{
	Patron\Hook::add($name, $definition);
}
