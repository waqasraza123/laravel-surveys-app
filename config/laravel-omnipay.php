<?php

return [

	// The default gateway to use
	'default' => 'Stripe',

	// Add in each gateway here
	'gateways' => [
		'Stripe' => [
			'driver'  => 'Stripe',
			'options' => [
				'solutionType'   => '',
				'landingPage'    => '',
				'headerImageUrl' => ''
			]
		]
	]

];
