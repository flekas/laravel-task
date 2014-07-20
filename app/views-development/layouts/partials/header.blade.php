<!doctype>
<html>
	<head>
		<meta charset="utf-8">
		{{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }}
		<style>
			.error{color:red;font-style:italic;font-size:.8em;}
			li img{margin-right:1em;}
			.completed{background:#8acc6e;}
			.uncompleted{background:#FFACAC;}
			#task-update-form{position:absolute;top:1em;right:6em;}
			#task-delete-form{position:absolute;top:1em;right:1em;}
		</style>
	</head>
	<body>
