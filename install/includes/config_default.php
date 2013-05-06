<?php
	$settings = array(


		###### ADMIN ######
		'admin' => array(
			'max_upload_size' => '5242880',
		),
		########


		###### SYMPHONY ######
		'symphony' => array(
			'pagination_maximum_rows' => '20',
			'association_maximum_rows' => '5',
			'lang' => 'en',
			'pages_table_nest_children' => 'no',
			'version' => '2.3.3beta2',
			'cookie_prefix' => 'sym-',
			'session_gc_divisor' => '10',
		),
		########


		###### LOG ######
		'log' => array(
			'archive' => '1',
			'maxsize' => '102400',
		),
		########


		###### DATABASE ######
		'database' => array(
			'host' => 'localhost',
			'port' => '3306',
			'user' => null,
			'password' => null,
			'db' => null,
			'tbl_prefix' => 'sym_',
		),
		########


		###### PUBLIC ######
		'public' => array(
			'display_event_xml_in_source' => 'no',
		),
		########


		###### GENERAL ######
		'general' => array(
			'sitename' => 'Your book name',
		),
		########


		###### FILE ######
		'file' => array(
			'write_mode' => '0644',
		),
		########


		###### DIRECTORY ######
		'directory' => array(
			'write_mode' => '0755',
		),
		########


		###### REGION ######
		'region' => array(
			'time_format' => 'H:i:s',
			'date_format' => 'Y-m-d',
			'datetime_separator' => ' ',
			'timezone' => 'America/Chicago',
		),
		########


		###### IMAGE ######
		'image' => array(
			'cache' => '1',
			'quality' => '90',
			'disable_regular_rules' => 'no',
			'disable_upscaling' => 'no',
		),
		########


		###### USERAGENT_DETAILS ######
		'useragent_details' => array(
			'geoplugin' => 'yes',
		),
		########


		###### APIPAGE ######
		'apipage' => array(
			'default-format' => 'xml',
			'param-selector' => 'url-format',
			'jsonp-var' => 'api_read',
			'jsonp-callback' => 'api_page',
			'header-override' => 'no',
		),
		########


		###### MAINTENANCE_MODE ######
		'maintenance_mode' => array(
			'enabled' => 'no',
		),
		########


		###### ELASTICSEARCH ######
		'elasticsearch' => array(
			'host' => 'http://localhost:9200/',
			'index-name' => '',
			'reindex-batch-size' => '20',
			'reindex-batch-delay' => '0',
			'per-page' => '20',
			'sort' => '_score',
			'direction' => 'desc',
			'highlight-fragment-size' => '200',
			'highlight-per-field' => '1',
			'build-entry-xml' => 'no',
			'default-sections' => null,
			'default-language' => null,
			'log-searches' => 'yes',
			'username' => null,
			'password' => null,
		),
		########


		###### DOCUMENTATION ######
		'documentation' => array(
			'text-formatter' => 'markdown_with_purifier',
			'button-text' => 'Documentation',
		),
		########


		###### PLATEN_COOKIES ######
		'platen_cookies' => array(
			'bookslug' => '',
		),
		########


		###### GLOBALRESOURCELOADER ######
		'globalresourceloader' => array(
			'ds-names' => 'useragent_details',
			'ds-pages' => '6,7,3,11',
		),
		########
	);
