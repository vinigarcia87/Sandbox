<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
		<title>JBCountDown</title>
		
		<script src="jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="jbcountdown/css/jbcountdown.skin.5.css" />
        <script src="jbcountdown/js/jbcountdown.js"></script>

        <?php
			/* Set start and end dates here */
			$startDate  = strtotime('09 November 2013 17:00:00 GMT-3');
			$endDate    = strtotime('03 October 2015 17:00:00 GMT-3');
        ?>
		<script type="text/javascript">
            $(document).ready(function(){
                JBCountDown({
                    secondsColor : '#FFF',
                    secondsGlow  : 'none',
                    
                    minutesColor : '#FFF',
                    minutesGlow  : 'none',
                    
                    hoursColor   : '#FFF',
                    hoursGlow    : 'none',
                    
                    daysColor    : '#FFF',
                    daysGlow     : 'none',
                    
                    startDate   : '<?php echo $startDate; ?>',
                    endDate     : '<?php echo $endDate; ?>',
                    now         : '<?php echo strtotime('now');?>'
                });
            });
        </script>
    </head>

    <body>

        <div class="wrapper" style="margin-top:250px;">

            <h1>This website is under construction!</h1>
            <h4>We will be live in:</h4>

            <div class="clock">
                <!-- Days -->
                <div class="clock_days">
                    <div class="bgLayer">
                        <canvas id="canvas_days" width="122" height="122">
                            Your browser does not support the HTML5 canvas tag.
                        </canvas>
                        <p class="val">0</p>
                        <p class="type_days">Days</p>
                    </div>
                </div>
                <!-- Days -->
                <!-- Hours -->
                <div class="clock_hours">
                    <div class="bgLayer">
                        <canvas id="canvas_hours" width="122" height="122">
                            Your browser does not support the HTML5 canvas tag.
                        </canvas>

                        <p class="val">0</p>
                        <p class="type_hours">Hours</p>
                    </div>
                </div>
                <!-- Hours -->
                <!-- Minutes -->
                <div class="clock_minutes">
                    <div class="bgLayer">
                        <canvas id="canvas_minutes" width="122" height="122">
                            Your browser does not support the HTML5 canvas tag.
                        </canvas>
                        <div class="text">
                            <p class="val">0</p>
                            <p class="type_minutes">Minutes</p>
                        </div>
                    </div>
                </div>
                <!-- Minutes -->
                <!-- Seconds -->
                <div class="clock_seconds">
                    <div class="bgLayer">
                        <canvas id="canvas_seconds" width="122" height="122">
                            Your browser does not support the HTML5 canvas tag.
                        </canvas>
                        <p class="val">0</p>
                        <p class="type_seconds">Seconds</p>
                    </div>
                </div>
                <!-- Seconds -->
            </div>

        </div><!--/wrapper -->

    </body>
</html>
