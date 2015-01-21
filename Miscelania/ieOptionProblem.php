<HTML>
<HEAD>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<SCRIPT Language=JavaScript>
		function populateSelects() {
			populateProblem();
			populateWorking();
			div1.style.display = "Block";
		}
		function populateProblem(){
			var oOption;
			for (var x = 0; x < 3; x++) {
				oOption = document.createElement("Option");
				oOption.text = "Option " + x;
				oOption.value = x;
				//	Setting selected before adding Option to select1 demonstrates problem.
				if (x == 1) {
					oOption.selected = true;
				}
				select1.add(oOption);
			}
		}
		function populateWorking() {
			var oOption;
			for (var x = 0; x < 3; x++) {
				oOption = document.createElement("Option");
				oOption.text = "Option " + x;
				oOption.value = x;
				//	Setting selected after adding Option to select1 resolves problem.
				select2.add(oOption);
				if (x == 1) {
					oOption.selected = true;
				}
			}
		}
	</SCRIPT>
</HEAD>
<BODY onLoad="populateSelects();">
	<DIV id="div1" style="Display: None;">
		When the page loads, it creates the Option elements and adds them to the
		Select tag. Both Select tags should have Option 1 selected. However, the
		'Problem' Select is not set to Option 1 as we added the Option after the
		selected value is set. This is the bug. In the working one, we set the 
		selected value after we add the option. In this case, it works fine.
		Problem:  <SELECT id="select1"></SELECT>
		Working:  <SELECT id="select2"></SELECT>
	</DIV>
</BODY>
</HTML>