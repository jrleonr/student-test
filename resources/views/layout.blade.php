<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Student</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import app.css-->
    <link type="text/css" rel="stylesheet" href="/css/app.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Student</a>
      <ul id="nav-mobile" class="right">
        <li><a class="waves-effect waves-light btn">List</a></li>
      </ul>
    </div>
  </nav>
	@yield('content')

	<script src="/js/main.js"></script>
</body>
</html>
