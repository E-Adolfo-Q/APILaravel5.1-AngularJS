<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>Document</title>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
</head>
<body ng-app="Client">

    <div ng-view></div>
    
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('components/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/angular-resource.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('components/angular-route.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('scripts/router.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/controllers/note.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/services/NoteService.js') }}"></script>
          
</body>
</html>