<?php
variable('slim', !getQueryParameter('intros')); //TODO: remove once all introductions are made

domain::add('spanda', __DIR__, true, new domain([
		'folder' => 'spanda/',
		'heading' => 'Spanda.org',
		'local' => 'http://localhost/spanda/%subfol%/%site%/',
		'live' => 'https://spanda.amadeusweb.in/%subfol%/%site%/',
		'local-base' => 'http://localhost/amadeusweb/%subfol%/',
		'live-base' => 'https://spanda.amadeusweb.in/%subfol%/',
	],
	['%folder%www', '%folder%sites/semar', '%folder%sites/sahlan-momo'],
	[
		'projects',
		'sites',
		'culture',
	],
));
