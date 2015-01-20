<!DOCTYPE html>
<html class="no-js" lang="pt-BR">
	<head>
		<title>Bootstrap</title>
		<!--
		<link type="text/css" href="./assets/vendor/bootstrap/3.2.0/dist/css/bootstrap.min.css" rel="stylesheet" media="all">
		-->
		<link type="text/css" href="./assets/vendor/bootstrap/cosmo/css/bootstrap.min.css" rel="stylesheet" media="all">
		<script src="./assets/vendor/jquery/1.10.2/jquery.min.js?ver=1.10.2" type="text/javascript"></script>
		<script src="./assets/vendor/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
	</head>
	<body>
		<h1>BOOTSTRAP</h1>
		<hr/>

		<div class="page-header">
			<h1>Typography</h1>
		</div>
		<h1>Super header h1 <small>com pequeno textinho</small></h1>
		<h2>Super header h2 <small>com pequeno textinho</small></h2>
		<h3>Super header h3 <small>com pequeno textinho</small></h3>
		<h4>Super header h4 <small>com pequeno textinho</small></h4>
		<h5>Super header h5 <small>com pequeno textinho</small></h5>
		<h6>Super header h6 <small>com pequeno textinho</small></h6>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vulputate mattis nisi varius interdum. Sed aliquet turpis enim, et viverra mi hendrerit sed. Ut id nibh vel tellus placerat dapibus et eu tortor. Nam vitae leo id odio pharetra auctor sed non magna. Sed dictum varius dolor sodales pulvinar. Ut sit amet neque urna. Integer volutpat erat neque, ut condimentum erat bibendum eu. Cras feugiat viverra mattis. Sed vulputate vehicula leo non placerat. Nunc fermentum interdum metus sit amet pulvinar. Quisque rutrum libero nec sem tempus, eu hendrerit nisi volutpat.</p>

		<div class="page-header">
			<h1>Breadcrumb</h1>
		</div>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Library</a></li>
			<li class="active">Data</li>
		</ol>

		<div class="page-header">
			<h1>Dropdown</h1>
		</div>
		<div class="btn-group"><button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Action <span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>

		<div class="page-header">
			<h1>Modal</h1>
		</div>
		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch demo modal</button>
		<div id="myModal" class="modal fade" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header"><button class="close" type="button" data-dismiss="modal">×<span class="sr-only">Close</span></button>
						<h4 id="myModalLabel" class="modal-title">Bootstrap Modal Title</h4>
					</div>
					<div class="modal-body">

						...

					</div>
					<div class="modal-footer">
						<button class="btn btn-default" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button>
					</div>
				</div>
			</div>
		</div>

		<div class="page-header">
			<h1>Form</h1>
		</div>
		<form>
			<div class="form-group"><label for="exampleInputEmail1">Email address</label> <input id="exampleInputEmail1" class="form-control" style="background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII='); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;" autocomplete="off" type="email" placeholder="Enter email" /></div>
			<div class="form-group"><label for="exampleInputPassword1">Password</label> <input id="exampleInputPassword1" class="form-control" style="background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII='); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;" autocomplete="off" type="password" placeholder="Password" /></div>
			<div class="form-group"><label for="exampleInputFile">File input</label> <input id="exampleInputFile" type="file" /><p class="help-block">Example block-level help text here.</p></div>
			<div class="checkbox"><label> <input type="checkbox" /> Check me out </label></div>
			<button class="btn btn-default" type="submit">Submit</button>
		</form>

		<div class="page-header">
			<h1>Form Inline</h1>
		</div>
		<form class="form-inline">
			<div class="form-group"><label class="sr-only" for="exampleInputEmail2">Email address</label> <input id="exampleInputEmail2" class="form-control" style="background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII='); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;" autocomplete="off" type="email" placeholder="Enter email" /></div>
			<div class="form-group"><label class="sr-only" for="exampleInputPassword2">Password</label> <input id="exampleInputPassword2" class="form-control" style="background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII='); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;" autocomplete="off" type="password" placeholder="Password" /></div>
			<div class="checkbox"><label> <input type="checkbox" /> Remember me </label></div>
			<button class="btn btn-default" type="submit">Sign in</button>
		</form>

		<div class="page-header">
			<h1>Checkboxes</h1>
		</div>
		<div class="checkbox"><label><input type="checkbox" value="" />Option one is this and that—be sure to include why it's great</label></div>
		<br/>
		<div class="checkbox disabled"><label><input disabled="disabled" type="checkbox" value="" />Option two is disabled</label></div>
		<br/>

		<div class="page-header">
			<h1>Buttons</h1>
		</div>
		<button class="btn btn-default" type="button">Default</button>
		<button class="btn btn-primary" type="button">Primary</button>
		<button class="btn btn-success" type="button">Success</button>
		<button class="btn btn-info" type="button">Info</button>
		<button class="btn btn-warning" type="button">Warning</button>
		<button class="btn btn-danger" type="button">Danger</button>
		<button class="btn btn-link" type="button">Link</button>

		<div class="page-header">
			<h1>Tables</h1>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
			</tbody>
		</table>

		<div class="jumbotron">
			<h1>Hello, world!</h1>
			This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.

			<a class="btn btn-primary btn-lg" href="#">Learn more »</a>

		</div>
		<div class="page-header">
			<h1>Buttons</h1>
		</div>
		<button class="btn btn-lg btn-default" type="button">Default</button> <button class="btn btn-lg btn-primary" type="button">Primary</button> <button class="btn btn-lg btn-success" type="button">Success</button> <button class="btn btn-lg btn-info" type="button">Info</button> <button class="btn btn-lg btn-warning" type="button">Warning</button> <button class="btn btn-lg btn-danger" type="button">Danger</button> <button class="btn btn-lg btn-link" type="button">Link</button>
		<br/>
		<button class="btn btn-default" type="button">Default</button> <button class="btn btn-primary" type="button">Primary</button> <button class="btn btn-success" type="button">Success</button> <button class="btn btn-info" type="button">Info</button> <button class="btn btn-warning" type="button">Warning</button> <button class="btn btn-danger" type="button">Danger</button> <button class="btn btn-link" type="button">Link</button>
		<br/>
		<button class="btn btn-sm btn-default" type="button">Default</button> <button class="btn btn-sm btn-primary" type="button">Primary</button> <button class="btn btn-sm btn-success" type="button">Success</button> <button class="btn btn-sm btn-info" type="button">Info</button> <button class="btn btn-sm btn-warning" type="button">Warning</button> <button class="btn btn-sm btn-danger" type="button">Danger</button> <button class="btn btn-sm btn-link" type="button">Link</button>
		<br/>
		<button class="btn btn-xs btn-default" type="button">Default</button> <button class="btn btn-xs btn-primary" type="button">Primary</button> <button class="btn btn-xs btn-success" type="button">Success</button> <button class="btn btn-xs btn-info" type="button">Info</button> <button class="btn btn-xs btn-warning" type="button">Warning</button> <button class="btn btn-xs btn-danger" type="button">Danger</button> <button class="btn btn-xs btn-link" type="button">Link</button>
		<div class="page-header">
			<h1>Tables</h1>
		</div>
		<div class="row">
			<div class="col-md-6">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td rowspan="2">1</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<td>Mark</td>
							<td>Otto</td>
							<td>@TwBootstrap</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<td>3</td>
							<td colspan="2">Larry the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				<table class="table table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<td>3</td>
							<td colspan="2">Larry the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="page-header">
			<h1>Thumbnails</h1>
		</div>
		&nbsp;
		<div class="page-header">
			<h1>Labels</h1>
		</div>
		<h1><span class="label label-default">Default</span> <span class="label label-primary">Primary</span> <span class="label label-success">Success</span> <span class="label label-info">Info</span> <span class="label label-warning">Warning</span> <span class="label label-danger">Danger</span></h1>
		&nbsp;
		<h2><span class="label label-default">Default</span> <span class="label label-primary">Primary</span> <span class="label label-success">Success</span> <span class="label label-info">Info</span> <span class="label label-warning">Warning</span> <span class="label label-danger">Danger</span></h2>
		&nbsp;
		<h3><span class="label label-default">Default</span> <span class="label label-primary">Primary</span> <span class="label label-success">Success</span> <span class="label label-info">Info</span> <span class="label label-warning">Warning</span> <span class="label label-danger">Danger</span></h3>
		&nbsp;
		<h4><span class="label label-default">Default</span> <span class="label label-primary">Primary</span> <span class="label label-success">Success</span> <span class="label label-info">Info</span> <span class="label label-warning">Warning</span> <span class="label label-danger">Danger</span></h4>
		&nbsp;
		<h5><span class="label label-default">Default</span> <span class="label label-primary">Primary</span> <span class="label label-success">Success</span> <span class="label label-info">Info</span> <span class="label label-warning">Warning</span> <span class="label label-danger">Danger</span></h5>
		&nbsp;
		<h6><span class="label label-default">Default</span> <span class="label label-primary">Primary</span> <span class="label label-success">Success</span> <span class="label label-info">Info</span> <span class="label label-warning">Warning</span> <span class="label label-danger">Danger</span></h6>
		&nbsp;

		<span class="label label-default">Default</span> <span class="label label-primary">Primary</span> <span class="label label-success">Success</span> <span class="label label-info">Info</span> <span class="label label-warning">Warning</span> <span class="label label-danger">Danger</span>
		<div class="page-header">
			<h1>Badges</h1>
		</div>
		<a href="#">Inbox <span class="badge">42</span></a>
		<ul class="nav nav-pills">
			<li class="active"><a href="#">Home <span class="badge">42</span></a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Messages <span class="badge">3</span></a></li>
		</ul>
		<div class="page-header">
			<h1>Dropdown menus</h1>
		</div>
		<div class="dropdown theme-dropdown clearfix"><a id="dropdownMenu1" class="btn dropdown-toggle" href="#" data-toggle="dropdown">Dropdown </a>
			<ul class="dropdown-menu">
				<li class="active"><a tabindex="-1" href="#">Action</a></li>
				<li><a tabindex="-1" href="#">Another action</a></li>
				<li><a tabindex="-1" href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a tabindex="-1" href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="page-header">
			<h1>Navs</h1>
		</div>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Messages</a></li>
		</ul>
		&nbsp;
		<ul class="nav nav-pills">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Messages</a></li>
		</ul>
		<div class="page-header">
			<h1>Navbars</h1>
		</div>
		<div class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header"><button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> </button> <a class="navbar-brand" href="#">Project name</a></div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
						<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Dropdown </a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="dropdown-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!--/.nav-collapse --></div>
		</div>
		&nbsp;
		<div class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header"><button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> </button> <a class="navbar-brand" href="#">Project name</a></div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
						<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Dropdown </a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="dropdown-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!--/.nav-collapse --></div>
		</div>
		<div class="page-header">
			<h1>Alerts</h1>
		</div>
		<div class="alert alert-success"><strong>Well done!</strong> You successfully read this important alert message.</div>
		<div class="alert alert-info"><strong>Heads up!</strong> This alert needs your attention, but it's not super important.</div>
		<div class="alert alert-warning"><strong>Warning!</strong> Best check yo self, you're not looking too good.</div>
		<div class="alert alert-danger"><strong>Oh snap!</strong> Change a few things up and try submitting again.</div>
		<div class="page-header">
			<h1>Progress bars</h1>
		</div>
		<div class="progress">
			<div class="progress-bar" style="width: 60%;"><span class="sr-only">60% Complete</span></div>
		</div>
		<div class="progress">
			<div class="progress-bar progress-bar-success" style="width: 40%;"><span class="sr-only">40% Complete (success)</span></div>
		</div>
		<div class="progress">
			<div class="progress-bar progress-bar-info" style="width: 20%;"><span class="sr-only">20% Complete</span></div>
		</div>
		<div class="progress">
			<div class="progress-bar progress-bar-warning" style="width: 60%;"><span class="sr-only">60% Complete (warning)</span></div>
		</div>
		<div class="progress">
			<div class="progress-bar progress-bar-danger" style="width: 80%;"><span class="sr-only">80% Complete (danger)</span></div>
		</div>
		<div class="progress">
			<div class="progress-bar progress-bar-striped" style="width: 60%;"><span class="sr-only">100% Complete</span></div>
		</div>
		<div class="progress">
			<div class="progress-bar progress-bar-success" style="width: 35%;"><span class="sr-only">35% Complete (success)</span></div>
			<div class="progress-bar progress-bar-warning" style="width: 20%;"><span class="sr-only">20% Complete (warning)</span></div>
			<div class="progress-bar progress-bar-danger" style="width: 10%;"><span class="sr-only">10% Complete (danger)</span></div>
		</div>
		<div class="page-header">
			<h1>List groups</h1>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<ul class="list-group">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				</ul>
			</div>
			<!-- /.col-sm-4 -->
			<div class="col-sm-4">
				<div class="list-group"><a class="list-group-item active" href="#"> Cras justo odio </a> <a class="list-group-item" href="#">Dapibus ac facilisis in</a> <a class="list-group-item" href="#">Morbi leo risus</a> <a class="list-group-item" href="#">Porta ac consectetur ac</a> <a class="list-group-item" href="#">Vestibulum at eros</a></div>
			</div>
			<!-- /.col-sm-4 -->
			<div class="col-sm-4">
				<div class="list-group">
					<h4 class="list-group-item-heading">List group item heading</h4>
					<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>

					<h4 class="list-group-item-heading">List group item heading</h4>
					<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>

					<h4 class="list-group-item-heading">List group item heading</h4>
					<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>

				</div>
			</div>
			<!-- /.col-sm-4 --></div>
		<div class="page-header">
			<h1>Panels</h1>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">Panel content</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">Panel content</div>
				</div>
			</div>
			<!-- /.col-sm-4 -->
			<div class="col-sm-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">Panel content</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">Panel content</div>
				</div>
			</div>
			<!-- /.col-sm-4 -->
			<div class="col-sm-4">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">Panel content</div>
				</div>
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">Panel content</div>
				</div>
			</div>
			<!-- /.col-sm-4 -->
		</div>
		<div class="page-header">
			<h1>Wells</h1>
		</div>
		<div class="well">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.
		</div>
	</body>
</html>