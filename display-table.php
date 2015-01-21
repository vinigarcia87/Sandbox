<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			html, body{
				margin:0;
				padding:0;
				height:100%;
			}
			#content-body-wrapper, #main {
				display:table;
				border-collapse:collapse;
				height:100%;
				table-layout:fixed;
				width:100%;
			}
			
			div {
				box-sizing: border-box;
			}
			
			#header, #footer, #content-body {
				display:table-row;
			}
					
			#primary-nav, #content {
				display:table-cell;
			}
			
			#header, #footer {
				height: 30px;
				background-color: grey;
				text-align: center;
			}
			#primary-nav {
				width: 20%;
				padding: 10px;
				background-color: wheat;
				text-align: justify;
			}
			#content {
				width: 80%;
				padding: 10px;
				background-color: tomato;
				text-align: justify;
			}
		</style>
	</head>
	<body>
		<div id="content-body-wrapper">
			<div id="header">
				<!-- header -->
				<h1>This is the header of your website</h1>
			</div>
			<div id="content-body">
				<div id="main">
					<div id="primary-nav">
						<!-- some navigation column here -->
						<h2>this is the primary nav</h2>
						<p>
							Lorem Ipsum text is here to fill some empty space and make you able to see how beautiful I am.<br/>
							Lorem Ipsum text is here to fill some empty space and make you able to see how beautiful I am.<br/>
							Lorem Ipsum text is here to fill some empty space and make you able to see how beautiful I am.<br/>
							Lorem Ipsum text is here to fill some empty space and make you able to see how beautiful I am.<br/>
							Lorem Ipsum text is here to fill some empty space and make you able to see how beautiful I am.<br/>
						</p>
					</div>
					<div id="content">
						<!-- main content here -->
						<h2>this is the content</h2>
						<p>
							Lorem Ipsum text is here to fill some empty space and make you able to see how beautiful I am.<br/>
							Lorem Ipsum text is here to fill some empty space and make you able to see how beautiful I am.<br/>
							Lorem Ipsum text is here to fill some empty space and make you able to see how beautiful I am.<br/>
							Lorem Ipsum text is here to fill some empty space and make you able to see how beautiful I am.<br/>
							Lorem Ipsum text is here to fill some empty space and make you able to see how beautiful I am.<br/>
						</p>
					</div>
				</div>
			</div>
			<div id="footer">
				<!-- footer -->
				<h1>this is the footer</h1>
			</div>
		</div>
	</body>
</html>