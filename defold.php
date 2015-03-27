<?
	
	function defold($dfilter = '', $fstart = '') {

		
		if (isset($_SERVER['SERVER_NAME']){
		
			if (isset($_SERVER['REQUEST_SCHEME'])
				$def_method = $_SERVER['REQUEST_SCHEME']
			else
				$def_method = 'http';	
	
			define('SITE', $def_method.'://'.str_replace('www.', '', $_SERVER['SERVER_NAME']).'/');
		}
		

		if ($pos = strrpos(__DIR__, 'vendor'){
			$dir = substr(__DIR__, 0, $pos);
		}
		elseif 
			define('SITEPATH', __DIR__);

		define('PUB', __DIR__.DIRECTORY_SEPARATOR);
		define('IMGPATH', PUB.DIRECTORY_SEPARATOR.);
		define('IMGCACHE', IMGCACHE.DIRECTORY_SEPARATOR.'preview/');
		define('VIEW', PUB.'views');


	}
	

	


	//folders
	define ('SITEPATH', __DIR__.DIRECTORY_SEPARATOR); //sitepath
	
	define ('APP', SITEPATH.'/app');

	define('PUB', __DIR__.DIRECTORY_SEPARATOR);
	define('IMGPATH', PUB.DIRECTORY_SEPARATOR.);
	define('IMGCACHE', IMGCACHE.DIRECTORY_SEPARATOR.'preview/');
	define('VIEW', PUB.'views');



	