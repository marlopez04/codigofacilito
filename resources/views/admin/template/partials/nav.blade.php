<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('front.index')}}">CodigoFacilito</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if(Auth::user())
      <ul class="nav navbar-nav">
        @if(Auth::user()->admin())
          <li class="active"><a href="{{ route('admin.users.index') }}">Usuario<span class="sr-only">(current)</span></a></li>
        @endif
        <li><a href="{{ route('admin.categories.index') }}">Categorias</a></li>
        <li><a href="{{ route('admin.articles.index') }}">Articulos</a></li>
        <li><a href="{{ route('admin.images.index') }}">Imagenes</a></li>
        <li><a href="{{ route('admin.tags.index') }}">Tags</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Inicio</a></li>
            <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
            <li><a href="{{ route ('admin.categories.index') }}">Categorias</a></li>
            <li><a href="{{ route('admin.tags.index') }}">Tag</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('admin.articles.index') }}">Articulos</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('admin.images.index') }}">Imagenes</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Busqueda">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Inicio</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('admin.auth.logout') }}">Logout</a></li>
          </ul>
        </li>
      </ul>
      @else
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('admin.auth.login') }}">Log In</a></li>
      </ul>
      @endif

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>