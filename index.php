<html>
    <center>
   
    <h1>Calculadora Compensar</h1>
<head> <!-- aqui encontraremos lo que es el encabezado de la 
pagina y su titulo-->

<title>Operaciones Compensar</title>
<h2> Realiza tus operaciones mas rapido y efectivo</h2>
</head>
<body>

<form id="Formulario" name="">
    <label>Ingrese  el numero de afiliados mayores de edad: </label>
    <input type="number" name="" id="numero1" autofocus placeholder="Digite el valor">
    </br>
</br>
<label>Ingrese el numero de afiliados menores de edad: </label>
<input type="number" name="" id="numero2" placeholder="Digite el valor">

</br>
</br>


<button onclick="Borrar();"><--</button>
<button type="button" onclick="sumar();">+</button>
<button type="button" onclick="restar();">-</button>
<button type="button" onclick="multiplicar();">*</button>
<button type="button" onclick="dividir();">/</button>
<h2>El total de afiliados es: <span id="resultado"></h2>

</form>

    

<script>
    function limpiar(){
        documen.getElementById('Formulario').reset();
    }
    function sumar() {
        var x = parseInt(document.getElementById('numero1').value);
        var y = parseInt(document.getElementById('numero2').value);
        alert ("Su Operacion esta siendo procesada");
        document.getElementById('resultado').innerHTML = x+y;
    
    }
    function restar() {
        var x = parseInt(document.getElementById('numero1').value);
        var y = parseInt(document.getElementById('numero2').value);
        alert ("Su Operacion esta siendo procesada");
        document.getElementById('resultado').innerHTML = x-y;
    
    }
    function multiplicar() {
        var x = parseInt(document.getElementById('numero1').value);
        var y = parseInt(document.getElementById('numero2').value);
        alert ("Su Operacion esta siendo procesada");
        document.getElementById('resultado').innerHTML = x*y;
    
    }
    function dividir() {
        var x = parseInt(document.getElementById('numero1').value);
        var y = parseInt(document.getElementById('numero2').value);
        alert ("Su Operacion esta siendo procesada");
        document.getElementById('resultado').innerHTML = x/y;
    
    }
</script>


</body>

<form action="index.php" method="POST">
<hr>
<h2> Total de Vacunados en Compensar EPS </h2>
</br>
 </br> 
<label for="Menorescinco">Total de vacunados de 5-9 años:</label>
</br> 
<td><input type="text" placeholder="Total de vacunados" name="Menorescinco" id="Menorescinco"/></td>
</br>
<label for="Menoresdiez">Total de vacunados de 10-13 años:</label>
</br> 
<td><input type="text" placeholder="Total de vacunados" name="Menoresdiez" id="Menoresdiez"/></td>
</br>
<label for="Menorestrece">Total de vacunados de 13-15 años:</label>
</br> 
<td><input type="text" placeholder="Total de vacunados" name="Menorestrece" id="Menorestrece"/></td>
</br>
<label for="Menoresseis">Total de vacunados de 16-17 años:</label>
</br>
<td><input type="text" placeholder="Total de vacunados" name="Menoresseis" id="Menoresseis"/></td>
</br>
<label for="NoVacunados">Total de menores no vacunados:</label>
</br>
<td><input type="text" placeholder="No Vacunados" name="NoVacunados" id="NoVacunados"/></td>
</br> 

<input type="submit" value="enviar" name="enviar" id="enviar">
</from>

</body>
<hr>
<?php
// En este apartado encontramos la condicion if para poder realizar 
// las diferentes operaciones
if(isset($_POST["enviar"])){
    $Menorescinco=$_POST["Menorescinco"];
    $Menoresdiez=$_POST["Menoresdiez"];
    $Menorestrece=$_POST["Menorestrece"];
    $Menoresseis=$_POST["Menoresseis"];
    $NoVacunados=$_POST["NoVacunados"];
    $total=$Menorescinco+$Menoresdiez+$Menorestrece+$Menoresseis;
    $total2= $total-$NoVacunados;
    $total3= $total-$total2;
    $total4=$Menorescinco+$Menoresdiez+$Menorestrece+$Menoresseis/4;
    echo "<h3>Total vacunados:".$total."<br></h3>";
    echo "<h3>El promedio vacunado es:".$total4."<br></h3>";
    echo  "<h3>Total no vacunados:".$total3."<br></h3>";
} 
    ?>
</form>
<!-- A continuacion encontramos diferentes funciones para realizar -->
</form>

<script>
    function reset() {
        edt = document.getElementById("inputResultado");
        edt.value="";
    }
    function agregarItem(item){
        edt = document.getElementById("inputResultado");
        valorViejo = edt.value;
        valorNuevo = valorViejo+item;
        edt.value=valorNuevo;
    }
    function calcular() {
        edt = document.getElementById("inputResultado");
        valor = edt.value;
        $.ajax({
            url:'calculo.php',
            method:'post',
            data: {'calculo':valor}
        }).done(function (resultado){
            edt.value = resultado;
        });
    }
</script>
<!--En este apartado encontramos el diseño de la pagina,
ya sea color de fondo y demas -->
<style>

form{
    padding: 50px 20px;
    background-color: #ededed;
    margin: calc(25% + 100px);
    margin-top:70px;
    padding-top: 28px;
    margin-bottom: 30px;
}
body {
    background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
}
</style>
</html>