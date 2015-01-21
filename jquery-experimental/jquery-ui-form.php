<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link type="text/css" href="recursos/css/jquery-themes/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
		
		<script type="text/javascript" src="recursos/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="recursos/js/ui/jquery-ui-1.8.20.custom.min.js"></script>
		<script type="text/javascript" src="recursos/js/data-tables/jquery.dataTables.min.js"></script>
		
		<title>Jquery UI - Form Style</title>
		
		<style type="text/css">
			
		</style>
		
		<script type="text/javascript">
			$(document).ready(function() {
				
				$.widget("ui.form",{
					_init:function(){
						var object = this;
						var form = this.element;
						var inputs = form.find("input , select ,textarea");

						form.find("fieldset").addClass("ui-widget-content");
						form.find("legend").addClass("ui-widget-header ui-corner-all");
						form.addClass("ui-widget");

						$.each(inputs,function(){
						$(this).addClass('ui-state-default ui-corner-all');
						$(this).wrap("<label />");

						if($(this).is(":reset ,:submit"))
							object.buttons(this);
						else if($(this).is(":checkbox"))
							object.checkboxes(this);
						else if($(this).is("input[type='text']")||$(this).is("textarea")||$(this).is("input[type='password']"))
							object.textelements(this);
						else if($(this).is(":radio"))
							object.radio(this);
						else if($(this).is("select"))
							object.selector(this);

						if($(this).hasClass("date"))
							$(this).datepicker();
					});
					var div = jQuery("<div />",{
						css:{
							width:20,height:20,
							margin:10,textAlign:"center"
						}
					}).addClass("ui-state-default drag");
					var no = Math.ceil(Math.random() * 4);
					var holder = jQuery("<div />",{
						id:'droppable',
						text:"Drop the box with "+no+" here",
						css:{
							width:100,height:100,float:'right',fontWeight:'bold'}
					}).addClass('ui-state-default');
					$(form).find("fieldset").append(holder);
					for(var i=1;i<5;i++)
					{
						$(form).find("fieldset").append(div.clone().html(i).attr("id",i));
					}

					$(".drag").draggable({containment: 'parent'});
					$("#droppable").droppable({
						accept:'#'+no,
						drop: function(event, ui) {
							$(this).addClass('ui-state-highlight').html("Right One");
							form.find(":submit").removeClass('ui-state-disabled').unbind('click');
						}
					});
					$(".hover").hover(
						function(){
							$(this).addClass("ui-state-hover");
						},function(){
							$(this).removeClass("ui-state-hover");
						}
					);

					},
					textelements:function(element){
						$(element).bind({
							focusin: function() {
								$(this).toggleClass('ui-state-focus');
							},
							focusout: function() {
								$(this).toggleClass('ui-state-focus');
							}
						});
					},
					buttons:function(element)
					{
						if($(element).is(":submit"))
						{
							$(element).addClass("ui-priority-primary ui-corner-all ui-state-disabled hover");
							$(element).bind("click",function(event){
								event.preventDefault();
							});
						}
						else if($(element).is(":reset"))
							$(element).addClass("ui-priority-secondary ui-corner-all hover");

						$(element).bind('mousedown mouseup', function() {
							$(this).toggleClass('ui-state-active');
						});
					},
					checkboxes:function(element){
						$(element).parent("label").after("<span />");
						var parent =  $(element).parent("label").next();
						$(element).addClass("ui-helper-hidden");
						parent.css({width:16,height:16,display:"block"});
						parent.wrap("<span class='ui-state-default ui-corner-all' style='display:inline-block;width:16px;height:16px;margin-right:5px;'/>");
						parent.parent().addClass('hover');
						parent.parent("span").click(function(event){
							$(this).toggleClass("ui-state-active");
							parent.toggleClass("ui-icon ui-icon-check");
							$(element).click();
						});
					},
					radio:function(element){
						$(element).parent("label").after("<span />");
						var parent =  $(element).parent("label").next();
						$(element).addClass("ui-helper-hidden");
						parent.addClass("ui-icon ui-icon-radio-off");
						parent.wrap("<span class='ui-state-default ui-corner-all' style='display:inline-block;width:16px;height:16px;margin-right:5px;'/>");
						parent.parent().addClass('hover');
						parent.parent("span").click(function(event){
							$(this).toggleClass("ui-state-active");
							parent.toggleClass("ui-icon-radio-off ui-icon-bullet");
							$(element).click();
						});
					},
					selector:function(element){
						var parent = $(element).parent();
						parent.css({"display":"block",width:140,height:21}).addClass("ui-state-default ui-corner-all");
						$(element).addClass("ui-helper-hidden");
						parent.append("<span id='labeltext' style='float:left;'></span><span style='float:right;display:inline-block' class='ui-icon ui-icon-triangle-1-s' ></span>");
						parent.after("<ul class=' ui-helper-reset ui-widget-content ui-helper-hidden' style='position:absolute;z-index:50;width:140px;' ></ul>");
						$.each($(element).find("option"),function(){
							$(parent).next("ul").append("<li class='hover'>"+$(this).html()+"</li>");
						});
						$(parent).next("ul").find("li").click(function(){
							$("#labeltext").html($(this).html());
							$(element).val($(this).html());
						});
						$(parent).click(function(event){
							$(this).next().slideToggle('fast');
							event.preventDefault();
						});
					}
				});
				
				$('#form').form();
			});
		</script>
	</head>
	<body>
		<h1>Jquery UI - Form Style</h1>

		<div id="formulario">
			<form id="form">
				<fieldset>
					<dt>
						<label for='name'>enter name</label>
						<dd>
							<input name='name' type='text' />
						</dd>
					</dt>
					<dt>
						<label for='date'>enter date</label>
						<dd>
							<input name='date' type='text' class='date' />
						</dd>
					</dt>
					<dt>
						<label for='select'>select box</label>
						<dd>
							<select name='select'>
								<option value='0'>Zero</option>
								<option value='1'>Um</option>
								<option value='2'>Dois</option>
								<option value='3'>Três</option>
							</select>
						</dd>
					</dt>
					<dt>
						<label for='sex'>radio button</label>
						<dd>
							<input type="radio" name="sex" value="male" /> Male
							<input type="radio" name="sex" value="female" /> Female
						</dd>
					</dt>
					<dt>
						<label for='check'>Check Box</label>
						<dd>
							<input type="checkbox" name="check" /> CheckBox!
						</dd>
					</dt>
					<dt>
						<input type="submit" value="Submit!" />
						<input type="reset" value="reset..." />
					</dt>
				</fieldset>
			</form>
		</div>
	</body>
</html>