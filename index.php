<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dashboard testing">
    <meta name="author" content="@tehvlad">
    <link rel="icon" href="favicon.ico">

    <title>hack.unam.mx</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- CSS para pluggin c3.min.css -->
    <link href="css/c3.min.css" rel="stylesheet">
 
 
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <strong><a class="navbar-brand" href="#"> Ejemplos de dashboard </a></strong>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" id="listaOperaciones">
		  
            <li><a href="http://www.r3take.com"><span class="glyphicon glyphicon-off"></span> &nbsp; r3Take.com</a></li>
            
          </ul>
         
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
      	<div class="col-xs-12">
      		<h3>Dashboards</h3>
      	</div>      	
      </div>
      <div class="row">
      	<div class="col-xs-4">
      		<h1><a href="#" onclick="cargarEjemplo1();">Ejemplo 1</a> <span class="small"> <br />Gráfica de barras</span></h1>
      		
      	</div>
      	<div class="col-xs-4">
      		<h1><a href="#" onclick="cargarEjemplo2();">Ejemplo 2</a> <span class="small"><br /> Grafica de donas y circulos</span> </h1>
      		
      	</div>
      	<div class="col-xs-4">
      		<h1><a href="#" onclick="cargarEjemplo3();">Ejemplo 3</a> <span class="small"><br /> Ejemplo mas avanzado</span></h1>
      		
      	</div>
      </div>
      <div class="row">
      	<div class="col-xs-12" id="areaParaGraficas">
      	</div>
      </div>
    </div>
	
	
	
	
	
	
	<!-- Code will be posted here -->
	<div id="scriptArea" ></div>
	
	
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/d3.v3.min.js"></script>

    <!-- Pluggin para carga -->
    <script src="js/c3.min.js"></script>
   	  
	    
 
	<!-- Codigo de la pantalla
    ================================================== -->
	<script>
		 function cargarEjemplo1() {
		 		$('#areaParaGraficas').load('ejemplos/graph1.html');
		 }

		 function cargarEjemplo2() {
		 		$('#areaParaGraficas').load('ejemplos/graph2.html');	
		 }

		 function cargarEjemplo3() {
		 		$('#areaParaGraficas').load('ejemplos/graph3.html');
		 }
		
		
	
	
	</script> 
  </body>
</html>
