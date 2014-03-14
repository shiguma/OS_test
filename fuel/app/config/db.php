<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
	'active' => 'default',
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=OS_test_db',
			'username'   => 'OS_test_user',
			'password'   => 'vbserver'
		),
	),
);
