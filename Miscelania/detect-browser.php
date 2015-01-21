<!DOCTYPE html>
<html>
<head>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>

<script type="text/javascript">
	/* Função que detecta o browser do usuário e a sua versão */
	function detectBrowserVersion(){
		var userAgent = navigator.userAgent.toLowerCase();
		$.browser.chrome = /chrome/.test(navigator.userAgent.toLowerCase());
		var browser = '';
		var version = 0;

		// Is this a version of IE?
		if($.browser.msie){
			userAgent = $.browser.version;
			userAgent = userAgent.substring(0,userAgent.indexOf('.'));
			
			browser = 'msie';
			version = userAgent;
		}

		// Is this a version of Chrome?
		if($.browser.chrome){
			userAgent = userAgent.substring(userAgent.indexOf('chrome/') +7);
			userAgent = userAgent.substring(0,userAgent.indexOf('.'));
			
			browser = 'chrome';
			version = userAgent;
			
			// If it is chrome then jQuery thinks it's safari so we have to tell it it isn't
			$.browser.safari = false;
		}

		// Is this a version of Safari?
		if($.browser.safari){
			userAgent = userAgent.substring(userAgent.indexOf('safari/') +7);	
			userAgent = userAgent.substring(0,userAgent.indexOf('.'));
			
			browser = 'safari';
			version = userAgent;	
		}

		// Is this a version of Mozilla?
		if($.browser.mozilla){
			//Is it Firefox?
			if(navigator.userAgent.toLowerCase().indexOf('firefox') != -1){
				userAgent = userAgent.substring(userAgent.indexOf('firefox/') +8);
				userAgent = userAgent.substring(0,userAgent.indexOf('.'));
				
				browser = 'mozilla';
				version = userAgent;
			}
			// If not then it must be another Mozilla
			else{
				// ...
			}
		}

		// Is this a version of Opera?
		if($.browser.opera){
			userAgent = userAgent.substring(userAgent.indexOf('version/') +8);
			userAgent = userAgent.substring(0,userAgent.indexOf('.'));
			
			browser = 'opera';
			version = userAgent;
		}
		
		return { 'browser' : browser,'version' : version };
	}

	var info = detectBrowserVersion();
	alert(info.browser + ' version ' + info.version);
</script>

</body>
</html>