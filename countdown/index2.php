<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
		<title>Jquery CountDown</title>
	
		<script src="jquery/1.10.2/jquery.min.js"></script>
		
        <!-- STEP 1: INCLUDE CSS AND JS FILES TO YOUR <HEAD> -->
        <link href="jquery.countdown/countdown.css" rel="stylesheet" />
        <script src="jquery.countdown/countdown.js"></script>
        
        <?php
			/* Set start and end dates here */
			$startDate  = strtotime('09 November 2013 17:00:00 GMT-3');
			$endDate    = strtotime('03 October 2015 17:00:00 GMT-3');
        ?>
		
        <!-- STEP 2: SETUP CLOCK INSTANCES -->
        <script>
            
            jQuery(document).ready(function(){
                // CLOCK VARIANT 1
                jQuery('.my-clock-place1').buildCounter({
                    now_timestamp      : '<?php echo strtotime('now');?>', /* Current time. Fill if you are using server side unix timestamp like PHP strtotime('now'); */
                    stardate_timestamp : '<?php echo $startDate; ?>', /* Start date. Fill if you are using server side unix timestamp like PHP strtotime('25 May 2013 11:00:00'); */
                    enddate_timestamp  : '<?php echo $endDate; ?>', /* End date. Fill if you are using server side unix timestamp like PHP strtotime('25 May 2013 00:00:00'); */
                    
                    startdate        : '1 January 2015 00:00:00 GMT', /* Client-Side time. Start Date. This is overwrited if unix timestamp exists. */
                    enddate          : '31 December 2015 00:00:00 GMT', /* Client-Side time. End Date. This is overwrited if unix timestamp exists. */
                    color1           : '#ffc937', /* Days Circle Color */
                    color2           : '#ff7c00', /* Hours Circle Color */
                    color3           : '#ff6b53', /* Minutes Circle Color */
                    color4           : '#c44f3f', /* Seconds Circle Color */
                    backgroundcolor1 : '#e3dfdf',    /* Days Circle Background Color */
                    backgroundcolor2 : '#e3dfdf',    /* Hours Circle Background Color */
                    backgroundcolor3 : '#e3dfdf',    /* Minutes Circle Background Color */
                    backgroundcolor4 : '#e3dfdf',    /* Seconds Circle Background Color */
                    glow1            : '', /* Days Circle Color Glow */
                    glow2            : '', /* Hours Circle Color Glow */
                    glow3            : '', /* Minutes Circle Color Glow */
                    glow4            : '', /* Seconds Circle Color Glow */
                    glowwidth1       : '0',       /* Days Circle Glow Width */
                    glowwidth2       : '0',       /* Hours Circle Glow Width */
                    glowwidth3       : '0',       /* Minutes Circle Glow Width */
                    glowwidth4       : '0',       /* Seconds Circle Glow Width */
                    backgroundwidth1 : '30',      /* Days Circle Background Width */
                    backgroundwidth2 : '30',      /* Hours Circle Background Width */
                    backgroundwidth3 : '30',      /* Minutes Circle Background Width */
                    backgroundwidth4 : '30',      /* Seconds Circle Background Width */
                    frontwidth1      : '30',      /* Days Circle Width */
                    frontwidth2      : '30',      /* Hours Circle Width */
                    frontwidth3      : '30',      /* Minutes Circle Width */
                    frontwidth4      : '30',      /* Seconds Circle Width */
                    size1            : '150',     /* Days Clock Size */
                    size2            : '150',     /* Hours Clock Size */
                    size3            : '150',     /* Minutes Clock Size */ 
                    size4            : '150',     /* Seconds Clock Size */
                    textsize1        : '14',      /* Days Font Size */
                    textsize2        : '14',      /* Hours Font Size */
                    textsize3        : '14',      /* Minutes Font Size */
                    textsize4        : '14',      /* Seconds Font Size */
                    countsize1       : '30',      /* Days Count Font Size */
                    countsize2       : '30',      /* Hours Count Font Size */
                    countsize3       : '30',      /* Minutes Count Font Size */
                    countsize4       : '30',      /* Seconds Count Font Size */
                    textcolor1       : '#868686', /* Days Font Color */
                    textcolor2       : '#868686', /* Hours Font Color */
                    textcolor3       : '#868686', /* Minutes Font Color */ 
                    textcolor4       : '#868686', /* Seconds Font Color */
                    countcolor1      : '#313131', /* Days Count Font Color */
                    countcolor2      : '#313131', /* Hours Count Font Color */
                    countcolor3      : '#313131', /* Minutes Count Font Color */
                    countcolor4      : '#313131', /* Seconds Count Font Color */
                    layout           : 'dhms',    /* Clock layouts: dhms, hms, ms, s */
                    callback         : function(){
                        alert('Countdown is complete!');
                    }
                }); 
                
                // CLOCK VARIANT 2
                jQuery('.my-clock-place2').buildCounter({
                    now_timestamp      : '<?php echo strtotime('now');?>', /* Current time. Fill if you are using server side unix timestamp like PHP strtotime('now'); */
                    stardate_timestamp : '<?php echo $startDate; ?>', /* Start date. Fill if you are using server side unix timestamp like PHP strtotime('25 May 2013 11:00:00'); */
                    enddate_timestamp  : '<?php echo $endDate; ?>', /* End date. Fill if you are using server side unix timestamp like PHP strtotime('25 May 2013 00:00:00'); */
                    
                    startdate        : '1 January 2015 00:00:00 GMT', /* Client-Side time. Start Date. This is overwrited if unix timestamp exists. */
                    enddate          : '31 December 2015 00:00:00 GMT', /* Client-Side time. End Date. This is overwrited if unix timestamp exists. */
                    color1           : '', /* Days Circle Color */
                    color2           : '#37a3ff', /* Hours Circle Color */
                    color3           : '#e05fdb', /* Minutes Circle Color */
                    color4           : '#ff7891', /* Seconds Circle Color */
                    backgroundcolor1 : '',    /* Days Circle Background Color */
                    backgroundcolor2 : '#e3dfdf',    /* Hours Circle Background Color */
                    backgroundcolor3 : '#e3dfdf',    /* Minutes Circle Background Color */
                    backgroundcolor4 : '#e3dfdf',    /* Seconds Circle Background Color */
                    glow1            : '', /* Days Circle Color Glow */
                    glow2            : '', /* Hours Circle Color Glow */
                    glow3            : '', /* Minutes Circle Color Glow */
                    glow4            : '', /* Seconds Circle Color Glow */
                    glowwidth1       : '',       /* Days Circle Glow Width */
                    glowwidth2       : '0',       /* Hours Circle Glow Width */
                    glowwidth3       : '0',       /* Minutes Circle Glow Width */
                    glowwidth4       : '0',       /* Seconds Circle Glow Width */
                    backgroundwidth1 : '',      /* Days Circle Background Width */
                    backgroundwidth2 : '25',      /* Hours Circle Background Width */
                    backgroundwidth3 : '25',      /* Minutes Circle Background Width */
                    backgroundwidth4 : '25',      /* Seconds Circle Background Width */
                    frontwidth1      : '',      /* Days Circle Width */
                    frontwidth2      : '15',      /* Hours Circle Width */
                    frontwidth3      : '15',      /* Minutes Circle Width */
                    frontwidth4      : '15',      /* Seconds Circle Width */
                    size1            : '',     /* Days Clock Size */
                    size2            : '130',     /* Hours Clock Size */
                    size3            : '130',     /* Minutes Clock Size */ 
                    size4            : '130',     /* Seconds Clock Size */
                    textsize1        : '',      /* Days Font Size */
                    textsize2        : '12',      /* Hours Font Size */
                    textsize3        : '12',      /* Minutes Font Size */
                    textsize4        : '12',      /* Seconds Font Size */
                    countsize1       : '',      /* Days Count Font Size */
                    countsize2       : '18',      /* Hours Count Font Size */
                    countsize3       : '18',      /* Minutes Count Font Size */
                    countsize4       : '18',      /* Seconds Count Font Size */
                    textcolor1       : '', /* Days Font Color */
                    textcolor2       : '#868686', /* Hours Font Color */
                    textcolor3       : '#868686', /* Minutes Font Color */ 
                    textcolor4       : '#868686', /* Seconds Font Color */
                    countcolor1      : '', /* Days Count Font Color */
                    countcolor2      : '#313131', /* Hours Count Font Color */
                    countcolor3      : '#313131', /* Minutes Count Font Color */
                    countcolor4      : '#313131', /* Seconds Count Font Color */
                    layout           : 'hms',    /* Clock layouts: dhms, hms, ms, s */
                    callback         : function(){
                        alert('Countdown is complete!');
                    }
                }); 
                
                // CLOCK VARIANT 3
                jQuery('.my-clock-place3').buildCounter({
                    now_timestamp      : '<?php echo strtotime('now');?>', /* Current time. Fill if you are using server side unix timestamp like PHP strtotime('now'); */
                    stardate_timestamp : '<?php echo $startDate; ?>', /* Start date. Fill if you are using server side unix timestamp like PHP strtotime('25 May 2013 11:00:00'); */
                    enddate_timestamp  : '<?php echo $endDate; ?>', /* End date. Fill if you are using server side unix timestamp like PHP strtotime('25 May 2013 00:00:00'); */
                    
                    startdate        : '1 January 2015 00:00:00 GMT', /* Client-Side time. Start Date. This is overwrited if unix timestamp exists. */
                    enddate          : '31 December 2015 00:00:00 GMT', /* Client-Side time. End Date. This is overwrited if unix timestamp exists. */
                    color1           : '', /* Days Circle Color */
                    color2           : '', /* Hours Circle Color */
                    color3           : '#fff', /* Minutes Circle Color */
                    color4           : '#6e6e6e', /* Seconds Circle Color */
                    backgroundcolor1 : '',    /* Days Circle Background Color */
                    backgroundcolor2 : '',    /* Hours Circle Background Color */
                    backgroundcolor3 : '#313131',    /* Minutes Circle Background Color */
                    backgroundcolor4 : '#313131',    /* Seconds Circle Background Color */
                    glow1            : '', /* Days Circle Color Glow */
                    glow2            : '', /* Hours Circle Color Glow */
                    glow3            : '', /* Minutes Circle Color Glow */
                    glow4            : '', /* Seconds Circle Color Glow */
                    glowwidth1       : '',       /* Days Circle Glow Width */
                    glowwidth2       : '',       /* Hours Circle Glow Width */
                    glowwidth3       : '0',       /* Minutes Circle Glow Width */
                    glowwidth4       : '0',       /* Seconds Circle Glow Width */
                    backgroundwidth1 : '',      /* Days Circle Background Width */
                    backgroundwidth2 : '',      /* Hours Circle Background Width */
                    backgroundwidth3 : '10',      /* Minutes Circle Background Width */
                    backgroundwidth4 : '10',      /* Seconds Circle Background Width */
                    frontwidth1      : '',      /* Days Circle Width */
                    frontwidth2      : '',      /* Hours Circle Width */
                    frontwidth3      : '20',      /* Minutes Circle Width */
                    frontwidth4      : '20',      /* Seconds Circle Width */
                    size1            : '',     /* Days Clock Size */
                    size2            : '',     /* Hours Clock Size */
                    size3            : '110',     /* Minutes Clock Size */ 
                    size4            : '110',     /* Seconds Clock Size */
                    textsize1        : '',      /* Days Font Size */
                    textsize2        : '',      /* Hours Font Size */
                    textsize3        : '12',      /* Minutes Font Size */
                    textsize4        : '12',      /* Seconds Font Size */
                    countsize1       : '',      /* Days Count Font Size */
                    countsize2       : '',      /* Hours Count Font Size */
                    countsize3       : '18',      /* Minutes Count Font Size */
                    countsize4       : '18',      /* Seconds Count Font Size */
                    textcolor1       : '', /* Days Font Color */
                    textcolor2       : '', /* Hours Font Color */
                    textcolor3       : '#868686', /* Minutes Font Color */ 
                    textcolor4       : '#868686', /* Seconds Font Color */
                    countcolor1      : '', /* Days Count Font Color */
                    countcolor2      : '', /* Hours Count Font Color */
                    countcolor3      : '#313131', /* Minutes Count Font Color */
                    countcolor4      : '#313131', /* Seconds Count Font Color */
                    layout           : 'ms',    /* Clock layouts: dhms, hms, ms, s */
                    callback         : function(){
                        alert('Countdown is complete!');
                    }
                }); 
                
                // CLOCK VARIANT 4
                jQuery('.my-clock-place4').buildCounter({
                    now_timestamp      : '<?php echo strtotime('now');?>', /* Current time. Fill if you are using server side unix timestamp like PHP strtotime('now'); */
                    stardate_timestamp : '<?php echo $startDate; ?>', /* Start date. Fill if you are using server side unix timestamp like PHP strtotime('25 May 2013 11:00:00'); */
                    enddate_timestamp  : '<?php echo $endDate; ?>', /* End date. Fill if you are using server side unix timestamp like PHP strtotime('25 May 2013 00:00:00'); */
                    
                    startdate        : '1 January 2015 00:00:00 GMT', /* Client-Side time. Start Date. This is overwrited if unix timestamp exists. */
                    enddate          : '31 December 2015 00:00:00 GMT', /* Client-Side time. End Date. This is overwrited if unix timestamp exists. */
                    color1           : '', /* Days Circle Color */
                    color2           : '', /* Hours Circle Color */
                    color3           : '', /* Minutes Circle Color */
                    color4           : '#1cceff', /* Seconds Circle Color */
                    backgroundcolor1 : '',     /* Days Circle Background Color */
                    backgroundcolor2 : '',     /* Hours Circle Background Color */
                    backgroundcolor3 : '',     /* Minutes Circle Background Color */
                    backgroundcolor4 : '#fff', /* Seconds Circle Background Color */
                    glow1            : '', /* Days Circle Color Glow */
                    glow2            : '', /* Hours Circle Color Glow */
                    glow3            : '', /* Minutes Circle Color Glow */
                    glow4            : '#52d4ff', /* Seconds Circle Color Glow */
                    glowwidth1       : '',       /* Days Circle Glow Width */
                    glowwidth2       : '',       /* Hours Circle Glow Width */
                    glowwidth3       : '',       /* Minutes Circle Glow Width */
                    glowwidth4       : '5',     /* Seconds Circle Glow Width */
                    backgroundwidth1 : '',      /* Days Circle Background Width */
                    backgroundwidth2 : '',      /* Hours Circle Background Width */
                    backgroundwidth3 : '',      /* Minutes Circle Background Width */
                    backgroundwidth4 : '15',    /* Seconds Circle Background Width */
                    frontwidth1      : '',      /* Days Circle Width */
                    frontwidth2      : '',      /* Hours Circle Width */
                    frontwidth3      : '',      /* Minutes Circle Width */
                    frontwidth4      : '5',     /* Seconds Circle Width */
                    size1            : '',     /* Days Clock Size */
                    size2            : '',     /* Hours Clock Size */
                    size3            : '',     /* Minutes Clock Size */ 
                    size4            : '110',   /* Seconds Clock Size */
                    textsize1        : '',      /* Days Font Size */
                    textsize2        : '',      /* Hours Font Size */
                    textsize3        : '',      /* Minutes Font Size */
                    textsize4        : '10',    /* Seconds Font Size */
                    countsize1       : '',      /* Days Count Font Size */
                    countsize2       : '',      /* Hours Count Font Size */
                    countsize3       : '',      /* Minutes Count Font Size */
                    countsize4       : '12',      /* Seconds Count Font Size */
                    textcolor1       : '', /* Days Font Color */
                    textcolor2       : '', /* Hours Font Color */
                    textcolor3       : '', /* Minutes Font Color */ 
                    textcolor4       : '#868686', /* Seconds Font Color */
                    countcolor1      : '', /* Days Count Font Color */
                    countcolor2      : '', /* Hours Count Font Color */
                    countcolor3      : '', /* Minutes Count Font Color */
                    countcolor4      : '', /* Seconds Count Font Color */
                    layout           : 's',    /* Clock layouts: dhms, hms, ms, s */
                    callback         : function(){
                        alert('Countdown is complete!');
                    }
                }); 
            
				// CLOCK VARIANT 5
                jQuery('.my-clock-place5').buildCounter({
                    now_timestamp      : '<?php echo strtotime('now');?>', /* Current time. Fill if you are using server side unix timestamp like PHP strtotime('now'); */
                    stardate_timestamp : '<?php echo $startDate; ?>', /* Start date. Fill if you are using server side unix timestamp like PHP strtotime('25 May 2013 11:00:00'); */
                    enddate_timestamp  : '<?php echo $endDate; ?>', /* End date. Fill if you are using server side unix timestamp like PHP strtotime('25 May 2013 00:00:00'); */
                    
                    startdate        : '', /* Client-Side time. Start Date. This is overwrited if unix timestamp exists. */
                    enddate          : '', /* Client-Side time. End Date. This is overwrited if unix timestamp exists. */
                    color1           : '#ffffff', /* Days Circle Color */
                    backgroundcolor1 : '#68bdda',    /* Days Circle Background Color */
                    glow1            : '#68bdda', /* Days Circle Color Glow */
                    glowwidth1       : '1',       /* Days Circle Glow Width */
                    backgroundwidth1 : '25',      /* Days Circle Background Width */
                    frontwidth1      : '25',      /* Days Circle Width */
                    size1            : '130',     /* Days Clock Size */
                    textsize1        : '12',      /* Days Font Size */
                    countsize1       : '18',      /* Days Count Font Size */
                    textcolor1       : '#868686', /* Days Font Color */
                    countcolor1      : '#313131', /* Days Count Font Color */
                    callback         : function(){
                        alert('Countdown is complete!');
                    }
                }); 
			});
        </script>
        <!-- /STEP 2: SETUP CLOCK INSTANCES -->
        
        <!-- THIS CSS IS FOR DEMO PURPOSE ONLY -->
        <style>
            .my-clock-place1,
            .my-clock-place2,
            .my-clock-place3,
            .my-clock-place4,
			.my-clock-place5
            {
                display: table;
                margin:0 auto;
            }
            
            .my-clock-place1 {
                margin-top:150px;
            }
        </style>
        <!-- /THIS CSS IS FOR DEMO PURPOSE ONLY -->
        
    </head>

    <body style="background:#ececec">
        <div class="my-clock-place1"></div> <!-- CLOCK VARIANT 1 -->
        <div class="my-clock-place2"></div> <!-- CLOCK VARIANT 2 -->
        <div class="my-clock-place3"></div> <!-- CLOCK VARIANT 3 -->
        <div class="my-clock-place4"></div> <!-- CLOCK VARIANT 4 -->
		<hr/>
		<div class="my-clock-place5"></div> <!-- CLOCK VARIANT 5 -->
    </body>
</html>