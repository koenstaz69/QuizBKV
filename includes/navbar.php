<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Quiz</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            </li>
      <?php if (!isset($_SESSION['logged_in'])) {
            echo "<li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"register.php\">Registreer</a></li>
                  <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"login.php\">Login</a></li>";

            }else{
            echo "  <li class=\"nav-item active\">
            <a href=\"logout.php\" name=\"logoutButton\" class=\"nav-link\">   Uitloggen</a></li>
                    
                    <li class=\"nav-item active\">
              <a href=\"quizes.php\" class=\"nav-link\">Quizes</a></li>
                 <li class=\"nav-item active\">
              <a href=\"regvraag.php\" class=\"nav-link\">Vragen</a></li>";
             } ?> 
            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>