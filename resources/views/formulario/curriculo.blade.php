<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<link href="../../css/app.css" rel="stylesheet">

	</head>
	
	<div class="container">
		    
		<h1 class="mt-2">Currículo</h1>
        <object type="application/pdf" data="{{$formulario->upload}}" width="250" height="200"> </object>
    
    </div>

</html>