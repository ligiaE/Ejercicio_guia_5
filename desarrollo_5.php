<?php
           // put your code here
        if (isset($_POST['txtal'])){
        for ($i=0; $i<2; $i++ )       
        {
		     $alumno = $_POST["txtalt"];
       		 $edad = $_POST["txted"]; 
       		 $altura = $_POST["txtal"];         
        }
		echo $edad."<br>";
		echo $alumno."<br>";
		echo $altura."<br>"; 
	}
		
     
        ?>
    

