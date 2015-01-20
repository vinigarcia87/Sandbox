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
		<div class="navbar navbar-default navbar-static-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".header-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">Storms Websolutions</a>
			</div>
			
			<div class="collapse navbar-collapse header-collapse">
			  <ul class="nav navbar-nav">
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">CSS <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="#headings">Headings</a></li>
					<li><a href="#content-formatting">Content</a></li>
					<li><a href="#tables">Tables</a></li>
					<li><a href="#forms">Forms</a></li>
					<li><a href="#images">Images</a></li>
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Components <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="#dropdowns">Dropdowns</a></li>
					<li><a href="#input-groups">Input Groups</a></li>
					<li><a href="#navs">Navs</a></li>
					<li><a href="#navbar">Navbar</a></li>
					<li><a href="#pagination">Pagination</a></li>
					<li><a href="#alerts">Alerts</a></li>
					<li><a href="#labels">Labels</a></li>
					<li><a href="#progress">Progress</a></li>
					<li><a href="#media-object">Media Object</a></li>
					<li><a href="#list-groups">List Groups</a></li>
					<li><a href="#panels">Panels</a></li>
					<li><a href="#wells">Wells</a></li>
				  </ul>
				</li>
			  </ul>
			  <p class="navbar-text navbar-right">Bootstrap 3 Kitchen Sink by <a href="http://www.storms.com.br/" target="_blank">Storms Websolutions</a></p>
			</div>
		  </div>
		</div>
		<div class="container">
		  <div class="jumbotron">
			<h1>Bootstrap 3 Kitchen Sink</h1>
			<p>A quick preview of everything Bootstrap has to offer.</p>
			<p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
		  </div>
		  <div class="row">
			<div class="col-lg-6">
			  <div class="panel panel-default" id="headings">
				<div class="panel-heading">Headings</div>
				<div class="panel-body">
				<h1 class="page-header">Page Header <small>With Small Text</small></h1>
				<h1>This is an h1 heading</h1>
				<h2>This is an h2 heading</h2>
				<h3>This is an h3 heading</h3>
				<h4>This is an h4 heading</h4>
				<h5>This is an h5 heading</h5>
				<h6>This is an h6 heading</h6>
				</div>
			  </div>
			  <div class="panel panel-default" id="tables">
				<div class="panel-heading">Tables
				</div>
				<div class="panel-body">
				<table class="table table-hover">
				  <thead>
					<tr>
					  <th>#</th>
					  <th>First Name</th>
					  <th>Tables</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>1</td>
					  <td>Michael</td>
					  <td>Are formatted like this</td>
					</tr>
					<tr>
					  <td>2</td>
					  <td>Lucille</td>
					  <td>Do you like them?</td>
					</tr>
					<tr class="success">
					  <td>3</td>
					  <td>Success</td>
					  <td></td>
					</tr>
					<tr class="danger">
					  <td>4</td>
					  <td>Danger</td>
					  <td></td>
					</tr>
					<tr class="warning">
					  <td>5</td>
					  <td>Warning</td>
					  <td></td>
					</tr>
					<tr class="active">
					  <td>6</td>
					  <td>Active</td>
					  <td></td>
					</tr>
				  </tbody>
				</table>
				<table class="table table-striped table-bordered table-condensed">
				  <thead>
					<tr>
					  <th>#</th>
					  <th>First Name</th>
					  <th>Tables</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>1</td>
					  <td>Michael</td>
					  <td>This one is bordered and condensed</td>
					</tr>
					<tr>
					  <td>2</td>
					  <td>Lucille</td>
					  <td>Do you still like it?</td>
					</tr>
				  </tbody>
				</table>
				</div>
			  </div>
			</div>
			<div class="col-lg-6">
			  <div class="panel panel-default" id="content-formatting">
				<div class="panel-heading">Content Formatting
				</div>
				<div class="panel-body">
				<p class="lead">This is a lead paragraph.</p>
				<p>This is an <b>ordinary paragraph</b> that is <i>long enough</i> to wrap to <u>multiple lines</u> so that you can see how the line spacing looks.</p>
				<p class="text-muted">Muted color paragraph.</p>
				<p class="text-warning">Warning color paragraph.</p>
				<p class="text-danger">Danger color paragraph.</p>
				<p class="text-info">Info color paragraph.</p>
				<p class="text-success">Success color paragraph.</p>
				<p><small>This is text in a <code>small</code> wrapper. <abbr title="No Big Deal">NBD</abbr>, right?</small></p>
				<hr>
				<address>                <strong>Twitter, Inc.</strong><br>                795 Folsom Ave, Suite 600<br>                San Francisco, CA 94107<br>                <abbr title="Phone">P:</abbr> (123) 456-7890              </address><address class="col-6">                <strong>Full Name</strong><br>                <a href="mailto:#">first.last@example.com</a>              </address>
				<hr>
				<blockquote>Here's what a blockquote looks like in Bootstrap. <small>Use <code>small</code> to identify the source.</small>
				</blockquote>
				<hr>
				<div class="row">
				  <div class="col-xs-6">
					<ul>
					  <li>Normal Unordered List</li>
					  <li>Can Also Work
						<ul>
						  <li>With Nested Children</li>
						</ul>
					  </li>
					  <li>Adds Bullets to Page</li>
					</ul>
				  </div>
				  <div class="col-xs-6">
					<ol>
					  <li>Normal Ordered List</li>
					  <li>Can Also Work
						<ol>
						  <li>With Nested Children</li>
						</ol>
					  </li>
					  <li>Adds Bullets to Page</li>
					</ol>
				  </div>
				</div>
				<hr>
				<pre>function preFormatting() {  // looks like this;  var something = somethingElse;  return true;}</pre>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="panel panel-default" id="forms">
			<div class="panel-heading">Forms
			</div>
			<div class="panel-body">
			<form>
			  <fieldset>
				<legend>Legend</legend>
				<div class="form-group">
				  <label for="exampleInputEmail">Email address</label>
				  <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter email">
				</div>
				<div class="form-group">
				  <label for="exampleInputPassword">Password</label>
				  <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
				</div>
				<div class="form-group">
				  <label for="exampleInputFile">File input</label>
				  <input type="file" id="exampleInputFile">
				  <p class="help-block">Example block-level help text here.</p>
				</div>
				<div class="checkbox">
				  <label>
					<input type="checkbox">Check me out</label>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			  </fieldset>
			</form>
			<hr>
			<form class="form-inline">
			  <input type="text" class="form-control" placeholder="Email" style="width: 200px;">
			  <input type="password" class="form-control" placeholder="Password" style="width: 200px;">
			  <div class="checkbox">
				<label>
				  <input type="checkbox">Remember me</label>
			  </div>
			  <button type="submit" class="btn btn-default">Sign in</button>
			</form>
			<hr>
			<form class="form-horizontal">
			  <div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Email</label>
				<div class="col-lg-10">
				  <input type="text" class="form-control" id="inputEmail" placeholder="Email">
				</div>
			  </div>
			  <div class="form-group has-warning">
				<label for="inputEmail" class="col-lg-2 control-label">Email</label>
				<div class="col-lg-10">
				  <input type="text" class="form-control" id="inputEmail" placeholder="Email">
				</div>
			  </div>
			  <div class="form-group has-error">
				<label for="inputEmail" class="col-lg-2 control-label">Email</label>
				<div class="col-lg-10">
				  <input type="text" class="form-control" id="inputEmail" placeholder="Email">
				</div>
			  </div>
			  <div class="form-group has-success">
				<label for="inputEmail" class="col-lg-2 control-label">Email</label>
				<div class="col-lg-10">
				  <input type="text" class="form-control" id="inputEmail" placeholder="Email">
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputPassword" class="col-lg-2 control-label">Password</label>
				<div class="col-lg-10">
				  <input type="password" class="form-control" id="inputPassword" placeholder="Password">
				  <div class="checkbox">
					<label>
					  <input type="checkbox">Remember me</label>
				  </div>
				  <button type="submit" class="btn btn-default">Sign in</button>
				</div>
			  </div>
			</form>
			</div>
		  </div>
		  <div class="row">
			<div class="col-lg-8">
			  <div class="panel panel-default" id="buttons">
				<div class="panel-heading">Buttons
				</div>
				<div class="panel-body">
				  <p>
					<button type="button" class="btn btn-lg btn-default">Default</button>
					<button type="button" class="btn btn-lg btn-primary">Primary</button>
					<button type="button" class="btn btn-lg btn-success">Success</button>
					<button type="button" class="btn btn-lg btn-info">Info</button>
					<button type="button" class="btn btn-lg btn-warning">Warning</button>
					<button type="button" class="btn btn-lg btn-danger">Danger</button>
					<button type="button" class="btn btn-lg btn-link">Link</button>
				  </p>
				  <p>
					<button type="button" class="btn btn-default">Default</button>
					<button type="button" class="btn btn-primary">Primary</button>
					<button type="button" class="btn btn-success">Success</button>
					<button type="button" class="btn btn-info">Info</button>
					<button type="button" class="btn btn-warning">Warning</button>
					<button type="button" class="btn btn-danger">Danger</button>
					<button type="button" class="btn btn-link">Link</button>
				  </p>
				  <p>
					<button type="button" class="btn btn-sm btn-default">Default</button>
					<button type="button" class="btn btn-sm btn-primary">Primary</button>
					<button type="button" class="btn btn-sm btn-success">Success</button>
					<button type="button" class="btn btn-sm btn-info">Info</button>
					<button type="button" class="btn btn-sm btn-warning">Warning</button>
					<button type="button" class="btn btn-sm btn-danger">Danger</button>
					<button type="button" class="btn btn-sm btn-link">Link</button>
				  </p>
				  <p>
					<button type="button" class="btn btn-xs btn-default">Default</button>
					<button type="button" class="btn btn-xs btn-primary">Primary</button>
					<button type="button" class="btn btn-xs btn-success">Success</button>
					<button type="button" class="btn btn-xs btn-info">Info</button>
					<button type="button" class="btn btn-xs btn-warning">Warning</button>
					<button type="button" class="btn btn-xs btn-danger">Danger</button>
					<button type="button" class="btn btn-xs btn-link">Link</button>
				  </p>
				  <p>
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-star"></span> Glyphicons!</button>
					<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button>
					<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
					<button type="button" class="btn btn-info"><span class="glyphicon glyphicon-info-sign"></span></button>
					<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-flash"></span></button>
					<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-ban-circle"></span></button>
					<button type="button" class="btn btn-link"><span class="glyphicon glyphicon-arrow-right"></span></button>
				  </p>
			  </div>
			  </div>
			</div>
			<div class="col-lg-4">
			  <div class="panel panel-default" id="images">
				<div class="panel-heading">Images
				</div>
				<div class="panel-body">
				<p><img src="http://placehold.it/100x100" class="img-rounded">
				  <img src="http://placehold.it/100x100" class="img-circle">
				  <img src="http://placehold.it/100x100" class="img-thumbnail"></p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-lg-3">
			  <div class="panel panel-default" id="dropdowns">
				<div class="panel-heading">Dropdowns
				</div>
				<div class="panel-body clearfix">
				<div class="dropdown">
				  <!-- Link or button to toggle dropdown -->
				  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static;">
					<li class="dropdown-header">Dropdown header</li>
					<li class="disabled">
					  <a tabindex="-1" href="#">Action</a>
					</li>
					<li>
					  <a tabindex="-1" href="#">Another action</a>
					</li>
					<li>
					  <a tabindex="-1" href="#">Something else here</a>
					</li>
					<li class="divider"></li>
					<li>
					  <a tabindex="-1" href="#">Separated link</a>
					</li>
				  </ul>
				</div>
				</div>
			  </div>
			</div>
			<div class="col-lg-9">
			  <div class="panel panel-default" id="input-groups">
				<div class="panel-heading">Input Groups
				</div>
				<div class="panel-body">
				<div class="input-group">
				  <span class="input-group-btn">                <button class="btn btn-default" type="button">Go!</button>              </span><input type="text" class="form-control" placeholder="Username">
				</div><br>
				<div class="input-group">
				  <input type="text" class="form-control input-large">
				  <span class="input-group-addon input-large">.00</span>
				</div><br>
				<div class="input-group">
				  <span class="input-group-addon">$</span><input type="text" class="form-control">
				  <span class="input-group-addon">.00</span>
				</div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-lg-6">
			  <div class="panel panel-default" id="navs">
				<div class="panel-heading">Navs
				</div>
				<div class="panel-body clearfix">
				<ul class="nav nav-tabs">
				  <li class="active">
					<a href="#">Home</a>
				  </li>
				  <li>
					<a href="#">About</a>
				  </li>
				</ul>
				<p></p>
				<p></p>
				<ul class="nav nav-pills">
				  <li class="active">
					<a href="#">Home</a>
				  </li>
				  <li>
					<a href="#">About</a>
				  </li>
				</ul>
				<p></p>
				<p></p>
				<ul class="nav nav-stacked nav-pills">
				  <li class="active">
					<a href="#">Home</a>
				  </li>
				  <li>
					<a href="#">About</a>
				  </li>
				</ul>
				</div>
			  </div>
			</div>
			<div class="col-lg-6" id="navbar">
			  <div class="panel panel-default">
				<div class="panel-heading">Navbar
				</div>
				<div class="panel-body">
				<p></p>
				<div class="navbar">
				  <div class="navbar-header">
					<a href="#" class="navbar-brand">Your Company</a>
				  </div>
				  <div class="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
					  <li class="active">
						<a href="#">Home</a>
					  </li>
					  <li>
						<a href="#">About</a>
					  </li>
					  <li>
						<a href="#">Contact</a>
					  </li>
					</ul>
				  </div>
				</div>
				<div class="navbar navbar-inverse">
				  <div class="navbar-header">
					<a href="#" class="navbar-brand">Your Company</a>
				  </div>
				  <div class="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
					  <li class="active">
						<a href="#">Home</a>
					  </li>
					  <li>
						<a href="#">About</a>
					  </li>
					  <li>
						<a href="#">Contact</a>
					  </li>
					</ul>
				  </div>
				</div>
				<div class="navbar">
				  <div class="collapse navbar-collapse">
					<a class="btn btn-primary navbar-btn">Navbar Button</a>
					<p class="navbar-text navbar-right">Navbar Text</p>
				  </div>
				</div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-lg-6">
			  <div class="panel panel-default" id="pagination">
				<div class="panel-heading">Pagination
				</div>
				<div class="panel-body">
				<ul class="pagination" style="margin-right: 10px;">
				  <li>
					<a href="#">Prev</a>
				  </li>
				  <li>
					<a href="#">1</a>
				  </li>
				  <li>
					<a href="#">2</a>
				  </li>
				  <li>
					<a href="#">3</a>
				  </li>
				  <li>
					<a href="#">4</a>
				  </li>
				  <li>
					<a href="#">Next</a>
				  </li>
				</ul>
				<ul class="pagination pagination-lg">
				  <li>
					<a href="#">Prev</a>
				  </li>
				  <li>
					<a href="#">1</a>
				  </li>
				  <li>
					<a href="#">2</a>
				  </li>
				  <li>
					<a href="#">3</a>
				  </li>
				  <li>
					<a href="#">4</a>
				  </li>
				  <li>
					<a href="#">Next</a>
				  </li>
				</ul>
				<ul class="pager">
				  <li>
					<a href="#">Prev</a>
				  </li>
				  <li>
					<a href="#">Next</a>
				  </li>
				</ul>
			  </div>
			</div>
			  <div class="panel panel-default" id="labels">
				<div class="panel-heading">Labels and Badges
				</div>
				<div class="panel-body">
				<h3><span class="label label-default">Default</span>&nbsp;<span class="label label-success">Success</span>&nbsp;<span class="label label-warning">Warning</span>&nbsp;<span class="label label-danger">Danger</span>&nbsp;<span class="label label-info">Info</span></h3>
				<p class="lead"><a href="#">Inbox <span class="badge">42</span></a></p>
				</div>
			  </div>
			</div>
			<div class="col-lg-6">
			  <div class="panel panel-default" id="alerts">
				<div class="panel-heading">Alerts
				</div>
				<div class="panel-body">
				<div>
				  <div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
				  </div>
				  <div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
				  </div>
				  <div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
				  </div>
				  <div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
				  </div>
				  <div class="alert">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4>Warning!</h4>
					<p>This is a block style alert.</p>
				  </div>
				</div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-lg-6">
			  <div class="panel panel-default" id="progress">
				<div class="panel-heading">Progress Bars
				</div>
				<div class="panel-body">
				  <div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span></div>
				  </div>
				  <div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span></div>
				  </div>
				  <div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20% Complete</span></div>
				  </div>
				  <div class="progress">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete (warning)</span></div>
				  </div>
				  <div class="progress">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete (danger)</span></div>
				  </div>
				  <div class="progress">
					<div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
					<div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
					<div class="progress-bar progress-bar-danger" style="width: 10%"><span class='sr-only'>10% Complete (danger)</span></div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col-lg-6">
			  <div class="panel panel-default" id="media-object">
				<div class="panel-heading">Media Object
				</div>
				<div class="panel-body">
				<p></p>
				<div class="media">
				  <a class="pull-left" href="#">    <img class="media-object" src="https://app.divshot.com/img/placeholder-64x64.gif">  </a>
				  <div class="media-body">
					<h4 class="media-heading">Media heading</h4>
					<p>This is the content for your media.</p>
					<div class="media">
					  <a class="pull-left" href="#">    <img class="media-object" src="https://app.divshot.com/img/placeholder-64x64.gif">  </a>
					  <div class="media-body">
						<h4 class="media-heading">Media heading</h4>
						<p>This is the content for your media.</p>
					  </div>
					</div>
				  </div>
				</div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-lg-4">
			  <ul class="list-group">
				<li class="list-group-item">Cras justo odio</li>
				<li class="list-group-item">Dapibus ac facilisis in</li>
				<li class="list-group-item">Morbi leo risus</li>
				<li class="list-group-item">Porta ac consectetur ac</li>
				<li class="list-group-item">Vestibulum at eros</li>
			  </ul>
			</div>
			<div class="col-lg-4">
			  <div class="list-group">
				<a href="#" class="list-group-item active">          Cras justo odio        </a><a href="#" class="list-group-item">Dapibus ac facilisis in        </a><a href="#" class="list-group-item">Morbi leo risus        </a><a href="#" class="list-group-item">Porta ac consectetur ac        </a><a href="#" class="list-group-item">Vestibulum at eros        </a>
			  </div>
			</div>
			<div class="col-lg-4">
			  <div class="list-group">
				<a href="#" class="list-group-item active">          <h4 class="list-group-item-heading">List group item heading</h4>          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>        </a><a href="#" class="list-group-item">          <h4 class="list-group-item-heading">List group item heading</h4>          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>        </a><a href="#" class="list-group-item">          <h4 class="list-group-item-heading">List group item heading</h4>          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>        </a>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-lg-3">
			  <div class="panel panel-primary" id="panels">
				<div class="panel-heading">This is a header
				</div>
				<p class="panel-body">This is a panel</p>
				<div class="panel-footer">This is a footer
				</div>
			  </div>
			</div>
			<div class="col-lg-3">
			  <div class="panel panel-success">
				<div class="panel-heading">This is a header
				</div>
				<div class="panel-body">This is a panel</div>
				<div class="panel-footer">This is a footer
				</div>
			  </div>
			</div>
			<div class="col-lg-3">
			  <div class="panel panel-danger">
				<div class="panel-heading">This is a header
				</div>
				<div class="panel-body">This is a panel</div>
				<div class="panel-footer">This is a footer
				</div>
			  </div>
			</div>
			<div class="col-lg-3">
			  <div class="panel panel-warning">
				<div class="panel-heading">This is a header
				</div>
				<div class="panel-body">This is a panel</div>
				<div class="panel-footer">This is a footer
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-lg-3">
			  <div class="panel panel-info">
				<div class="panel-heading">This is a header
				</div>
				<p class="panel-body">This is a panel</p>
				<div class="panel-footer">This is a footer
				</div>
			  </div>
			</div>
			<div class="col-lg-3">
			  <div class="panel panel-default">
				<div class="panel-heading">This is a header
				</div>
				<div class="panel-body">This is a panel</div>
				<ul class="list-group list-group-flush">
				  <li class="list-group-item">First Item</li>
				  <li class="list-group-item">Second Item</li>
				  <li class="list-group-item">Third Item</li>
				</ul>
				<div class="panel-footer">This is a footer
				</div>
			  </div>
			</div>
			<div class="col-lg-3">
			  <div class="well" id="wells">Default Well
			  </div>
			  <div class="well well-small">Small Well
			  </div>
			</div>
			<div class="col-lg-3">
			  <div class="well well-large">Large Padding Well
			  </div>
			</div>
		  </div>
			<style>
				.palette, .color-swatches { color: #fff; text-align: center; font-weight: bold; }
				.palette .color:first-child { border-left: 1px solid #28363D; }
				.palette .color:last-child { border-left: 1px solid #28363D; }
				.palette .color { border-top: 1px solid #28363D; border-bottom: 1px solid #28363D; float: left; height: 200px; width: 14.28%; }
				.color-swatch{ height: 100px; width: 100px; border-radius: 3px; float: left; margin: 0 5px; color: #fff; text-align: center; font-weight: bold; }
				.gray-darker { background-color: #222222; }
				.gray-dark { background-color: #2f575d; }
				.gray { background-color: #6d9197; }
				.gray-light { background-color: #99aead; }
				.gray-lighter { background-color: #c4cdc1; }
				.brand-primary { background-color: #658b6f; }
				.brand-success { background-color: #5cb85c; }
				.brand-info { background-color: #5bc0de; }
				.brand-warning { background-color: #f0ad4e; }
				.brand-danger { background-color: #d9534f; }
			</style>
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-md-6 palette">
            <div class="color" style="background-color: #DEE1DD;">#DEE1DD<br />
                R: 222<br />
                G: 225<br />
                B: 221</div>
            <div class="color" style="background-color: #C4CDC1;">#C4CDC1<br />
                R: 196<br />
                G: 205<br />
                B: 193</div>
            <div class="color" style="background-color: #99AEAD;">#99AEAD<br />
                R: 153<br />
                G: 174<br />
                B: 173</div>
            <div class="color" style="background-color: #6D9197;">#6D9197<br />
                R: 109<br />
                G: 145<br />
                B: 151</div>
            <div class="color" style="background-color: #658B6F;">#658B6F<br />
                R: 101<br />
                G: 139<br />
                B: 111</div>
            <div class="color" style="background-color: #2F575D;">#2F575D<br />
                R:  47<br />
                G:  87<br />
                B:  93</div>
            <div class="color" style="background-color: #28363D;">#28363D<br />
                R:  40<br />
                G:  54<br />
                B:  61</div>
        </div>
        <div class="col-md-6 color-swatches">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="color-swatch gray-darker">@gray-darker</div>
                            <div class="color-swatch gray-dark">@gray-dark  </div>
                            <div class="color-swatch gray">@gray       </div>
                            <div class="color-swatch gray-light">@gray-light </div>
                            <div class="color-swatch gray-lighter">@lighter    </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="color-swatch brand-primary">@brand-primary</div>
                            <div class="color-swatch brand-success">@brand-success</div>
                            <div class="color-swatch brand-info">@brand-info   </div>
                            <div class="color-swatch brand-warning">@brand-warning</div>
                            <div class="color-swatch brand-danger">@brand-danger </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		</div>
	</body>
 </html>
