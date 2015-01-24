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

use ICanBoogie\Render;
use ICanBoogie\Render\EngineCollection;

class Hooks
{
	/*
	 * Events
	 */

	/**
	 * Add the _Patron_ engine for ".patron" templates.
	 *
	 * @param EngineCollection\AlterEvent $event
	 * @param EngineCollection $target
	 */
	static public function on_alter_engine_collection(EngineCollection\AlterEvent $event, EngineCollection $target)
	{
		$target['.patron'] = __NAMESPACE__ . '\PatronEngine';
	}

	/*
	 * Markups
	 */

	static public function markup_render(array $args, $engine, $template)
	{
		$thisArg = $args['select'];
		unset($args['select']);

		$renderer = Render\get_renderer();

		$html = $renderer->render($thisArg, $args + [

			'locals' => $engine->context->to_array()

		]);

		return $template ? $engine($template, $html) : $html;
	}
}
