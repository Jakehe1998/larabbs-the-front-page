	<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
		<div class="container">
			<!-- Branding Image -->
			<a href="{{ url('/') }}" class="navbar-brand">LaraBBS</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Left Side Of Navbar -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item {{ active_class(if_route('topics.index')) }}"><a class="nav-link" href="{{ route('topics.index') }}">话题</a></li>
					<li class="nav-item {{ category_nav_active(1) }}"><a class="nav-link" href="{{ route('categories.show', 1) }}">分享</a></li>
					<li class="nav-item {{ category_nav_active(2) }}"><a class="nav-link" href="{{ route('categories.show', 2) }}">教程</a></li>
					<li class="nav-item {{ category_nav_active(3) }}"><a class="nav-link" href="{{ route('categories.show', 3) }}">问答</a></li>
					<li class="nav-item {{ category_nav_active(4) }}"><a class="nav-link" href="{{ route('categories.show', 4) }}">公告</a></li>
				</ul>

				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav navbar-right">
					<!-- Authentication Links -->
					@guest
					<li class="nav-item"><a href="{{ route('login') }}" class="nav-link">登录</a></li>
					<li class="nav-item"><a href="{{ route('register') }}" class="nav-link">注册</a></li>
					@else
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
							{{ Auth::user()->name }}
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDroPdown">
							<a href="{{ route('users.show', Auth::id()) }}" class="dropdown-item">
								<i class="far fa-user mr-2"></i>
								个人中心
							</a>
							<a href="{{ route('users.edit', Auth::id()) }}" class="dropdown-item">
								<i class="far fa-edit mr-2"></i>
								编辑资料
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item" id="logout">
								<form action="{{ route('logout') }}" method="post" accept-charset="utf-8" onsubmit="return confirm('您确定要退出吗？')">
									{{ csrf_field() }}
									<button type="submit" class="btn btn-block btn-danger" name="button">退出</button>
								</form>
							</a>
						</div>
					</li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>