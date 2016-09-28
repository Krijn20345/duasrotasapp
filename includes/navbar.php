<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Duas Rotas App</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="ledenoverzicht.php">Ledenoverzicht</a></li>
            <li><a href="./agenda.php">Agenda</a></li>
            <li><a href="login/logout.php">Uitloggen</a></li>         
            <p class="navbar-text">Ingelogd als <?php echo "$sessionusername"; ?></p>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    