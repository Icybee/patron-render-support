<?php

/*
 * This file is part of the Patron package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Patron\RenderSupport;

use ICanBoogie\Render\EngineInterface;

/**
 * Bridge to the _Patron_ engine.
 *
 * @package Patron\RenderSupport
 */
class PatronEngine implements EngineInterface
{
	/**
	 * @inheritdoc
	 */
	public function render($template_pathname, $thisArg, array $variables, array $options = [])
	{
		$template = file_get_contents($template_pathname);
		$patron = \Patron\get_patron();

		return $patron($template, $thisArg, [

			'file' => $template_pathname,
			'variables' => $variables

		]);
	}
}
