<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>desarrollo del ejercicio 5</title>

</head>
<body>
       
     <p>el ejercicio numero 5 es:  Dadas las edades y alturas de 5 alumnos, mostrar la edad y la estatura media, la cantidad de alumnos mayores de 18 años, y la cantidad de alumnos que miden más de 1.75.  </p>
                        
                        <h2>Desarrollo </h2>
                        <form id="Figura" name="Figura" action="desarollo_5.php" method="POST">
            <label for = "texfield">Nombre de Alumno: </label>
            <input type = "text"name="txtal"id="txtal" required="required" onKeypress="if (event.keyCode >45 && event.keyCode <57) event.returnValue = false;"><br><br>
            <label for = "texfield">Digite la edad</label>
            <input type = "text"name="txted"id="txted" onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="2" minlength="1" required="required"><br><br>
            <label for = "texfield">Digite Altura</label>
            <input type = "text"name="txtalt"id="txtalt" onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="4" required="required"><br><br>
            <button type="submit">guardar</button>
        </form>


</body>
</html>