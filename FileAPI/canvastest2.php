<html>
<head>
    <title>toDataURL example</title>
  <script type="text/javascript">
		function draw() {
			// Create some graphics.    
			var canvas = document.getElementById("MyCanvas");
			if (canvas.getContext) {
				var ctx = canvas.getContext("2d");

				var img = new Image();
				img.src = "Tulips.jpg"
				img.onload = function () {
					ctx.drawImage(img,0,0);
				}
				/*
				ctx.fillStyle = "white";
				ctx.beginPath();
				ctx.rect(5, 5, 300, 250);
				ctx.fill();
				ctx.stroke();
				ctx.arc(150, 150, 100, 0, Math.PI, false);
				ctx.stroke();
				*/
			}
		}
		function putImage() {
			var canvas1 = document.getElementById("MyCanvas");
			if (canvas1.getContext) {
				var ctx = canvas1.getContext("2d");                // Get the context for the canvas.
				var myImage = canvas1.toDataURL("image/png");      // Get the data as an image.
			}
			var imageElement = document.getElementById("MyPix");  // Get the img object.
			imageElement.src = myImage;                           // Set the src to data from the canvas.
		}
  </script>
</head>
<body onload="draw()" >
      <div>
        <button onclick="putImage()">Copy graphic using toDataURL</button>        
      </div>
      <div>
        <canvas id="MyCanvas" width="400" height="400" >This browser or document mode doesn't support canvas</canvas>
        <img id="MyPix" />
      </div>
  </body>
</html> 