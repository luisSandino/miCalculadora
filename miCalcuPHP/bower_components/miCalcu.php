
<?php
$nombre = "Proyecto 1";
$scripts = ["bower_components/angular/angular.min.js", "JS/app.js","bower_components/bootstrap/dist/js/bootstrap.min.js"];
?>



<!DOCTYPE html>
<html ng-app="miCalcu">
<head>
		<title>Calculadora PHP</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="CSS/style.css">
		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	</head>
<body ng-controller="calcController">
	
    <form name="formularioSuma" novalidate  class="teclado">
		<div class="row"> 
			<div class="col-md-12 pantalla">{{}}</div>
		</div>
		
		<div class="row"> 
			<div > <button ng-click="resetClicked()" class="col-md-3  teclas">C</button> </div>
			<div > <button ng-click="operationButtonClicked('+/-')" class="col-md-3 teclas">+/-</button></div>
			<div ><button ng-click="operationButtonClicked('%')" class="col-md-3 teclas">%</button></div>
			<div ><button ng-click="operationButtonClicked('/')" class="col-md-3 teclas columnaNaranja">÷</button></div>
			
		</div>
		<div class="row">
			<div > <button ng-click="numberButtonClicked(7)" class="col-md-3 teclas" ng-model="">7</button> </div>
			<div > <button ng-click="numberButtonClicked(8)" class="col-md-3 teclas">8</button> </div>
			<div > <button ng-click="numberButtonClicked(9)" class="col-md-3 teclas">9</button> </div>
			<div > <button ng-click="operationButtonClicked('*')" class="col-md-3 teclas columnaNaranja">x</button> </div>
		</div>
		
		<div class="row">
			<div > <button ng-click="numberButtonClicked(4)" class="col-md-3 teclas">4</button> </div>
			<div > <button ng-click="numberButtonClicked(5)" class="col-md-3 teclas">5</button> </div>
			<div > <button ng-click="numberButtonClicked(6)" class="col-md-3 teclas">6</button> </div>
			<div > <button ng-click="operationButtonClicked('-')" class="col-md-3 teclas columnaNaranja">-</button></div>
		</div>
		<div class="row">
			<div > <button ng-click="numberButtonClicked(1)" class="col-md-3 teclas">1</button> </div>
			<div > <button ng-click="numberButtonClicked(2)" class="col-md-3 teclas">2</button> </div>
			<div > <button ng-click="numberButtonClicked(3)" class="col-md-3 teclas">3</button> </div>
			<div > <button ng-click="sumar()" class="col-md-3 teclas columnaNaranja">+</button></div>
		</div>
		
		<div class="row">
			<div > <button ng-click="numberButtonClicked(0)" class="col-md-6 teclas">0</button></div>
			
			<div > <button ng-click="numberButtonClicked(.)" class="col-md-3 teclas">.</button> </div>
			<div > <button ng-click="enterClicked()" class="col-md-3 teclas columnaNaranja">=</button> </div>
		</div>
	</form>
    
	
	
	<?php foreach ($scripts as $script) { ?>
    <script src="<?php echo($script); ?>"></script>
<?php } ?>
</body>
</html>