<?php
require_once SF_PATH . '/lib/Sass/scssphp/scss.inc.php';

use Leafo\ScssPhp\Compiler;

$src = SF_PATH . '/assets/sass/';
$dist = SF_PATH . '/assets/css/';

$scss = new Compiler();
// set the path where your _mixins are
$scss->setImportPaths( $src );

$files = array(
	'editor-style', 'storms', 'construction',
	'admin', 'adminbar', 'login',
);
foreach($files as $file) {
	// set css formatting @see http://leafo.net/scssphp/docs/#output_formatting
	//$scss->setFormatter( 'Leafo\ScssPhp\Formatter\Crunched' );

	//$style = $scss->compile( '@import "' . $file . '.scss";' );
	//file_put_contents( $dist . $file . '.css', $style );
}
