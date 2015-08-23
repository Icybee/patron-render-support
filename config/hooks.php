<?php

namespace Patron\RenderSupport;

$hooks = Hooks::class . '::';

return [

	'patron.markups' => [

		'render' => [ $hooks . 'markup_render', [

			'select' => [ 'expression' => true ]

		] ]

	]

];
