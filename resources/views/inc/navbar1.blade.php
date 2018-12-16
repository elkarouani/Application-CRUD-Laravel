<nav class="navbar navbar-inverse float-left bg-info col-sm-12">
	<div class="navbar-header" style="height: 50px;">
		<button type="button" class="btn navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
			<i class="fa fa-navicon"></i>
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index" style="margin-left: 10px; color: currentColor;">{{config('app.name')}}</a>
	</div>
	<div id="navbar" class="collapse navbar-collapse">
		<br>
		<ul class="nav navbar-nav list-group">
			<li class="list-group-item"><a href="index">Home</a></li>
			<li class="list-group-item"><a href="about">About</a></li>
			<li class="list-group-item"><a href="services">Services</a></li>
			<li class="list-group-item"><a href="../posts">Blog</a></li>
			<li class="list-group-item"><a href="posts/create">Create Post</a></li>
		</ul>
	</div>
</nav>