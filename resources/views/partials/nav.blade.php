<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      </div>
      <a class="navbar-brand" href="{{ route('home') }}">TaskList</a>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
      
        <ul class="nav navbar-nav navbar-left">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">Sobre</a></li>
          <li><a href="{{ route('contact') }}">Contato</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Login</a></li>
          <li><a href="#" class="btn btn-default">Criar uma conta</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
</nav>