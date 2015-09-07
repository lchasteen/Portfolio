<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"> lanechasteen.com</a>
        </div>
		 <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<?php
					// Show the selected li as "active" for each nav element that is selected.
					// This is determined by the "page" variable.
					$page = $_GET["page"];			
					switch($page){
						// Home Page
						case "home":
							echo "<li class=\"active\"><a href=\"index.php?page=home\">Home</a></li>";  // Active
							echo "<li><a href=\"index.php?page=resume\">Resume</a></li>";  
							echo "<li><a href=\"index.php?page=portfolio\">Portfolio</a></li>";  
							echo "<li><a href=\"index.php?page=contact\">Contact</a></li>";              
						break;
						// Resume Page
						case "resume":
							echo "<li><a href=\"index.php?page=home\">Home</a></li>";              
							echo "<li class=\"active\"><a href=\"index.php?page=resume\">Resume</a></li>";  // Active
							echo "<li><a href=\"index.php?page=portfolio\">Portfolio</a></li>";  
							echo "<li><a href=\"index.php?page=contact\">Contact</a></li>";              
						break;
						// Portfolio Page
						case "portfolio":
							echo "<li><a href=\"index.php?page=home\">Home</a></li>";              
							echo "<li><a href=\"index.php?page=resume\">Resume</a></li>";  
							echo "<li class=\"active\"><a href=\"index.php?page=portfolio\">Portfolio</a></li>";  // Active
							echo "<li><a href=\"index.php?page=contact\">Contact</a></li>";              
						break;
						// Contact Page
						case "contact":
							echo "<li><a href=\"index.php?page=home\">Home</a></li>";              
							echo "<li><a href=\"index.php?page=resume\">Resume</a></li>";  
							echo "<li><a href=\"index.php?page=portfolio\">Portfolio</a></li>";  //Active
							echo "<li class=\"active\"><a href=\"index.php?page=contact\">Contact</a></li>";              
						break;						
						case "login":
							echo "<li><a href=\"index.php?page=home\">Home</a></li>";              
							echo "<li><a href=\"index.php?page=resume\">Resume</a></li>";  
							echo "<li><a href=\"index.php?page=portfolio\">Portfolio</a></li>";
							echo "<li><a href=\"index.php?page=contact\">Contact</a></li>";              
						break;						
					}	
			  ?>
            </ul>

          <!--form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form-->
        </div><!--/.navbar-collapse -->
   </div>
   
   
    </nav>

	