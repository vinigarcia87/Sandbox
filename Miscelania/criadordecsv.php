<?php

	header("Content-disposition: attachment; filename=testecsv.csv");
	
	foreach(range(1,10) as $i)
	{
		echo $i.",".$i.",\n";
	}