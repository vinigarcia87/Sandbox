<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bootstrap 3 Kitchen Sink</title>
		
   		<!--[if lt IE 9]><script src="./assets/vendor/html5shiv/3.7.2/html5shiv.js"></script><![endif]-->
		<!--[if lt IE 9]><script src="./assets/vendor/respond/1.4.2/respond.min.js"></script><![endif]-->
   
        <script src="./assets/vendor/jquery/1.10.2/jquery.min.js"></script>  

        <!-- <link href="./assets/vendor/bootstrap/3.3.1/css/bootstrap.min.css"/> -->
        <script src="./assets/vendor/bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" media="all" href="./assets/vendor/font-awesome/4.2.0/css/font-awesome.min.css">

		<!-- Meu estilo -->
		<link rel="stylesheet" href="./assets/vendor/bootstrap/springtones-lavish-bootstrap/css/bootstrap.min.css"/>

	</head>
	<body>
	
	<div class="container">
	
	  <h1>Stack Bootstrap modals nicely
		<br/><small>http://codepen.io/maouida/pen/NPGaaN</small></h1>
	  
	  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#test-modal">Show Modal</button>

		<div class="modal fade" id="test-modal" data-modal-index="1">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Modal title 1</h4>
			  </div>
			  <div class="modal-body">
				<p>One fine body&hellip;</p>
					 <button class="btn btn-default" data-toggle="modal" data-target="#test-modal-2">Launch Modal 2</button>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div class="modal fade" id="test-modal-2" data-modal-index="2">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Modal title 2</h4>
			  </div>
			  <div class="modal-body">
				<p>One fine body&hellip;</p>
				<button class="btn btn-default" data-toggle="modal" data-target="#test-modal-3">Launch Modal 3</button>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div class="modal fade" id="test-modal-3">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Modal title 3</h4>
			  </div>
			  <div class="modal-body">
				<p>One fine body&hellip;</p>
				
				<button class="btn btn-default" data-toggle="modal" data-target="#test-modal-4">Launch Modal 4</button>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div class="modal fade" id="test-modal-4">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">Modal title 4</h4>
		  </div>
		  <div class="modal-body">
			<p>One fine body&hellip;</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	</div>
	
	</body>
	
	<style>
	
		/* distance between stacked modals */
		/* The first modal translateZ value */
		.container {
		  margin: 5em auto;
		}
		.modal.in {
		  -webkit-perspective: 2000px;
		  -moz-perspective: 2000px;
		  -ms-perspective: 2000px;
		  -o-perspective: 2000px;
		  perspective: 2000px;
		}
		.modal.in .modal-dialog.aside {
		  -webkit-transform: -340px;
		  -moz-transform: -340px;
		  -o-transform: -340px;
		  -ms-transform: -340px;
		  transform: -340px;
		  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(-340px);
		  -ms-transform: scale(0.8) rotateY(45deg) translateZ(-340px);
		  -o-transform: scale(0.8) rotateY(45deg) translateZ(-340px);
		  transform: scale(0.8) rotateY(45deg) translateZ(-340px);
		  -webkit-transform-style: preserve-3d;
		  -ms-transform-style: preserve-3d;
		  -o-transform-style: preserve-3d;
		  transform-style: preserve-3d;
		}
		.modal.in .modal-dialog.aside.aside-1 {
		  -webkit-transform: calc(-300px);
		  -moz-transform: calc(-300px);
		  -o-transform: calc(-300px);
		  -ms-transform: calc(-300px);
		  transform: calc(-300px);
		  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-300px));
		  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-300px));
		  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-300px));
		  transform: scale(0.8) rotateY(45deg) translateZ(calc(-300px));
		}
		.modal.in .modal-dialog.aside.aside-2 {
		  -webkit-transform: calc(-260px);
		  -moz-transform: calc(-260px);
		  -o-transform: calc(-260px);
		  -ms-transform: calc(-260px);
		  transform: calc(-260px);
		  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-260px));
		  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-260px));
		  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-260px));
		  transform: scale(0.8) rotateY(45deg) translateZ(calc(-260px));
		}
		.modal.in .modal-dialog.aside.aside-3 {
		  -webkit-transform: calc(-220px);
		  -moz-transform: calc(-220px);
		  -o-transform: calc(-220px);
		  -ms-transform: calc(-220px);
		  transform: calc(-220px);
		  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-220px));
		  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-220px));
		  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-220px));
		  transform: scale(0.8) rotateY(45deg) translateZ(calc(-220px));
		}
		.modal.in .modal-dialog.aside.aside-4 {
		  -webkit-transform: calc(-180px);
		  -moz-transform: calc(-180px);
		  -o-transform: calc(-180px);
		  -ms-transform: calc(-180px);
		  transform: calc(-180px);
		  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-180px));
		  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-180px));
		  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-180px));
		  transform: scale(0.8) rotateY(45deg) translateZ(calc(-180px));
		}
		.modal.in .modal-dialog.aside.aside-5 {
		  -webkit-transform: calc(-140px);
		  -moz-transform: calc(-140px);
		  -o-transform: calc(-140px);
		  -ms-transform: calc(-140px);
		  transform: calc(-140px);
		  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-140px));
		  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-140px));
		  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-140px));
		  transform: scale(0.8) rotateY(45deg) translateZ(calc(-140px));
		}

	</style>
	
	<script>
		$('.btn[data-toggle=modal]').on('click', function(){
			var $btn = $(this);
			var currentDialog = $btn.closest('.modal-dialog'),
			targetDialog = $($btn.attr('data-target'));;
			if (!currentDialog.length)
				return;
			targetDialog.data('previous-dialog', currentDialog);
			currentDialog.addClass('aside');
			var stackedDialogCount = $('.modal.in .modal-dialog.aside').length;
			if (stackedDialogCount <= 5){
				currentDialog.addClass('aside-' + stackedDialogCount);
			}
		});

		$('.modal').on('hide.bs.modal', function(){
			var $dialog = $(this);  
			var previousDialog = $dialog.data('previous-dialog');
			if (previousDialog){
			previousDialog.removeClass('aside');
				$dialog.data('previous-dialog', undefined);
			}
		});
	</script>
 </html>
