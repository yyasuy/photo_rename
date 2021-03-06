<?php
define( TARGET_DIRS,	array(
				'/Users/yasuhiro/Dropbox/カメラアップロード/',
				'/Users/yasuhiro/Dropbox/スクリーンショット/',
			)
);
	
foreach( TARGET_DIRS as $dir ){
	$files = scandir( $dir );
	foreach( $files as $file ){
		$pattern = '|[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9\s].+|';
		if( preg_match( $pattern, $file, $matches ) ){
			// e.g. 写真 2018-01-23 04 05 06.jp -> 2018-01-23 04 05 06.jpg
			rename( $dir . $file, $dir . $matches[ 0 ] );
		}
	}
}

?>
