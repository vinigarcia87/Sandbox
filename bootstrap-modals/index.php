<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bootstrap 3 Modals</title>
		
   		<!--[if lt IE 9]><script src="./assets/vendor/html5shiv/3.7.2/html5shiv.js"></script><![endif]-->
		<!--[if lt IE 9]><script src="./assets/vendor/respond/1.4.2/respond.min.js"></script><![endif]-->
   
        <script src="./assets/vendor/jquery/1.10.2/jquery.min.js"></script>  

        <link rel="stylesheet" href="./assets/vendor/bootstrap/3.3.4/css/bootstrap.min.css"/>
        <script src="./assets/vendor/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<style>

		</style>
		
		<script>
			$(function() {
				$(document)  
					.on('show.bs.modal', '.modal', function(event) {
						console.log($(this).attr('id') + ' working!');
						console.log( $(this).parent('.modal').attr('id') );
						$(this).appendTo($('body'));
						// Fonte: http://stackoverflow.com/questions/29837294/jquery-appendto-bug
						event.stopPropagation(); // stop the event from bubbling further up
					})
					.on('shown.bs.modal', '.modal.in', function(event) {
						//setModalsAndBackdropsOrder();
					})
					.on('hidden.bs.modal', '.modal', function(event) {
						//setModalsAndBackdropsOrder();
					});

				function setModalsAndBackdropsOrder() {  
					var modalZIndex = 1040;
					$('.modal.in').each(function(index) {
						var $modal = $(this);
						modalZIndex++;
						$modal.css('zIndex', modalZIndex);
						$modal.next('.modal-backdrop.in').addClass('hidden').css('zIndex', modalZIndex - 1);
					});
					$('.modal.in:visible:last').focus().next('.modal-backdrop.in').removeClass('hidden');
				}
			});
		</script>
	</head>
	<body>
		<button class="btn btn-primary" data-toggle="modal" data-target="#modal-1">open 1st modal</button>

		<div id="modal-1" class="modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" style="width: 400px;">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>×</span></button>
				<h4 class="modal-title">Modal 1</h4>
			  </div>
			  <div class="modal-body">

				<button class="btn btn-primary" data-toggle="modal" data-target="#modal-2">Open 2nd modal</button>

			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>

		<div id="modal-2" class="modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" style="width: 600px;">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>×</span></button>
				<h4 class="modal-title">Modal 2</h4>
			  </div>
			  <div class="modal-body">
			  
				<button class="btn btn-primary" data-toggle="modal" data-target="#modal-3">Open 3nd modal</button>
				
				<div id="modal-3" class="modal" tabindex="-1" role="dialog">
				  <div class="modal-dialog" style="width: 700px;">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span>×</span></button>
						<h4 class="modal-title">Modal 3</h4>
					  </div>
					  <div class="modal-body">
					  
						...
						
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>
				  </div>
				</div>
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
	</body>
 </html>
