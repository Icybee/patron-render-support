<?php

namespace Patron\RenderSupport;

$hooks = __NAMESPACE__ . '\Hooks::';

return [

	'events' => [

		'ICanBoogie\Render\EngineCollection::alter' => $hooks . 'on_alter_engine_collection'

	],

	'patron.markups' => [

		'render' => [ $hooks . 'markup_render', [

			'select' => [ 'expression' => true ]

		] ]

	]

];
