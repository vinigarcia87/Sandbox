<html>
<head>
	<script type="text/javascript" src="./recursos/jquery/jquery-1.5.2.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$('a').mouseover(function() {
				var classe = $(this).attr("class");
				$(".x_y_z").css("border","3px solid red");
				$('a').filter(
					function () {
						return /^x_.*_z_.*/.test($(this).attr("class"));
					}
				).css("border","3px solid red");
			});
		});
	</script>
	<style type="text/css">
		a.x_y_z {
			color: #000000;
			text-decoration: none;
			cursor: default;
		}
		a.t_s_q {
		
		}
		a.x_b_z_t {
		
		}
		a.x_y_r {
		
		}
	</style>
</head>
<body>
	<a name="x" href="" class="x_y_z">ola! classe x_y_z</a><br/>
	<a name="y" href="" class="x_y_z">ola! classe x_y_z</a><br/>
	<a name="u" href="" class="t_s_q">tchau! classe t_s_q</a><br/>
	<a name="xd" href="" class="t_s_q">tchau! classe t_s_q</a><br/>
	<a name="xes" href="" class="x_b_z_t">bleh! classe x_b_z_t</a><br/>
	<a name="q" href="" class="x_y_r">blu! classe x_y_r</a><br/>
</body>
</html>