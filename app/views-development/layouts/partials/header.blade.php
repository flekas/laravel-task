<!doctype>
<html>
	<head>
		<meta charset="utf-8">
		{{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }}
		{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js') }}
		{{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}
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
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Laravel Task</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="@if(Request::segment(1) == 'users') active @endif"><a href="/users">Users</a></li>
        <li class="@if(Request::segment(1) == 'tasks') active @endif"><a href="/tasks">Tasks</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
