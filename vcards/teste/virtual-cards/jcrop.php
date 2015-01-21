<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" /> 
		<title>Jcrop &raquo; Tutorials &raquo; aspectRatio w/ Preview</title>
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.Jcrop.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />
		<link rel="stylesheet" href="files/demos.css" type="text/css" />
		<script type="text/javascript">

		jQuery(function($){
			// Create variables (in this scope) to hold the API and image size
			var jcrop_api, boundx, boundy;

			$('#target').Jcrop({
					onChange: updatePreview,
					onSelect: updatePreview,
					aspectRatio: 1.8
				},function(){
					// Use the API to get the real image size
					var bounds = this.getBounds();
					boundx = bounds[0];
					boundy = bounds[1];
					// Store the API in the jcrop_api variable
					jcrop_api = this;
				});

				function updatePreview(c)
				{
					if (parseInt(c.w) > 0)
					{
						var rx = 270 / c.w;
						var ry = 150 / c.h;

						$('#preview').css({
							width: Math.round(rx * boundx) + 'px',
							height: Math.round(ry * boundy) + 'px',
							marginLeft: '-' + Math.round(rx * c.x) + 'px',
							marginTop: '-' + Math.round(ry * c.y) + 'px'
						});
					}
				};
			});
		</script>
	</head>
	<body>
		<h1>Jcrop - Aspect ratio w/ preview pane</h1>

		<table>
			<tr>
				<td>
					<img src="files/pool.jpg" id="target" alt="Flowers" />
				</td>
				<td>
					<div style="width:270px;height:150px;overflow:hidden;">
						<img src="files/pool.jpg" id="preview" alt="Preview" class="jcrop-preview" />
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>
