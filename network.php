<?php
if ($pv = variable('preview')) {
	variables($d = [
		'default-search' => $mn = 'sahlanallpreviews',
		'searches' => [
			$mn => ['code' => '803ec2335211b42d3', 'name' => 'All 4 sites of Sahlan Momo', 'description' => '[description to follow]'],
		],
	]);
}
if (!$pv) {
	$temp = main::defaultSearches();
	variables($d = [
		'default-search' => $ds = 'imranali',
		'searches' => [
			$ds => $temp[$ds],
		],
	]);
}

//addStyle('network', 'network-static--common-assets');
//addStyle(SITENAME, 'network-static--common-assets');

variables([
	VAREmail => 'info@spanda.org',
	socialBuilder::variableName => socialBuilder::create()
		->addLinkedIn('company/spanda-foundation/', 'Spanda Foundation')
		//->addYoutube()
		//->addHR()->append(socialBuilder::default())
		->getItems(),
]);
