<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title>PHP Countdown</title>
		<script src="jquery/1.10.2/jquery.min.js"></script>
    </head>
    <body>
		<?php
			// Namoro    19 June 2010 17:00:00;
			// Noivado   09 November 2013 17:00:00;
			// Casamento 03 October 2015 17:00:00;

			/* Set start and end dates */
			$nowDate = new DateTime();
			$startDate = new DateTime('2013-11-09 17:00:00');
			$endDate = new DateTime('2015-10-03 17:00:00');
			$countdown = $endDate->diff($nowDate);
			
			$doPlural = function($nb, $str){
				if ($nb > 1) {
					switch ($str) {
						case 'mês':
							return 'meses';
						default:
							return $str.'s';
					}
				} else
					return $str;
			}; // adds plurals
		   
			$format = array();
			if($countdown->y !== 0) {
				$format[] = '%y '.$doPlural($countdown->y, 'ano');
			}
			if($countdown->m !== 0) {
				$format[] = '%m '.$doPlural($countdown->m, 'mês');
			}
			if($countdown->d !== 0) {
				$format[] = '%d '.$doPlural($countdown->d, 'dia');
			}
			if($countdown->h !== 0) {
				$format[] = '%h '.$doPlural($countdown->h, 'hora');
			}
			if($countdown->i !== 0) {
				$format[] = '%i '.$doPlural($countdown->i, 'minuto');
			}
			if($countdown->s !== 0) {
				$format[] = '%s '.$doPlural($countdown->s, 'segundo');
			}

			if(!count($format)) {
				echo 'Chegou a hora!';
			}
			
			// We use the two biggest parts
			if(count($format) > 1) {
				$format = array_shift($format).' e '.array_shift($format);
			} else {
				$format = array_pop($format);
			} 
			
			echo $nowDate->format('d/m/Y h:i:s').'<br/>';
			echo $endDate->format('d/m/Y h:i:s').'<br/>';
			echo $countdown->format('%a dias %h horas %i minutos %s segundos').'<br/>';

			echo '<hr/>';
			
			echo $countdown->format($format).'<br/>';
						
			if(count($countdown) == 0)
				echo 'Chegou a hora!!!';
			else
				if($countdown->days > 0)
					if($countdown->d == 0)
						echo $countdown->format('Faltam %m meses (%a dias) para o evento').'<br/>';
					else
						echo $countdown->format('Faltam %m meses e %d dias (%a dias) para o evento').'<br/>';
				else
					echo $countdown->format('Faltam %H horas %I minutos %S segundos').'<br/>';
				
			echo '<hr/>';
		?>
		<script>
			$(document).ready(function() {
				var startDate = '<?php echo strtotime('2013-11-09 17:00:00');?>';
				var endDate = '<?php echo strtotime('2015-10-03 17:00:00');?>';
				var now = '<?php echo strtotime('now');?>';
				
				total   = Math.floor((endDate - startDate)/86400);
				days    = Math.floor((endDate - now ) / 86400);
				hours   = 24 - Math.floor(((endDate - now) % 86400) / 3600);
				minutes = 60 - Math.floor((((endDate - now) % 86400) % 3600) / 60) ;
				seconds = 60 - Math.floor((endDate - now) % 86400 % 3600 % 60);
				
				$('#clock').html('JS: ' + days + ' dias ' + hours + ' horas ' + minutes + ' minutos ' + seconds + ' segundos');
			});
			
			function startTimer(duration, display) {
				var timer = duration, minutes, seconds;
				setInterval(function () {
					minutes = parseInt(timer / 60, 10);
					seconds = parseInt(timer % 60, 10);

					minutes = minutes < 10 ? "0" + minutes : minutes;
					seconds = seconds < 10 ? "0" + seconds : seconds;

					display.text(minutes + ":" + seconds);

					if (--timer < 0) {
						timer = duration;
					}
				}, 1000);
			}

			$(function ($) {
				var fiveMinutes = 60 * 5,
					display = $('#timer');
				startTimer(fiveMinutes, display);
			});
		</script>
		<div id="clock"></div>
		<div id="timer"></div>
    </body>
</html>
