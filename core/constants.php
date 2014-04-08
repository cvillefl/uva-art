<?php
// Use trailing slashes
define("ENV", "p1at0");

switch (ENV) {
	case 'evan-dev':
		$doc_root = '/art/';
		$home_url = 'http://localhost/art/';
		break;
	case 'dev':
		$doc_root = '/Art/';
		$home_url = 'http://localhost/Art/';
		break;
	case 'p1at0':
		$doc_root = '/www/www.p1at0.com/uva-art/';
		$home_url = 'http://p1at0.com/uva-art/';
		break;
	case 'live':
		$doc_root = '';
		$home_url = '';
		break;
}

define("DOCUMENT_ROOT",         $doc_root);
define("WEB_ROOT",              DOCUMENT_ROOT);
define("LOG_DIRECTORY",         WEB_ROOT . "core/logs/");
define("HOME",                  $home_url);
?>