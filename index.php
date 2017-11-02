<?php 
//require('inc/db.php');
//require('inc/settings.php');

?><!--
_________                        __             .___
\_   ___ \_______   ____ _____ _/  |_  ____   __| _/
/    \  \/\_  __ \_/ __ \\__  \\   __\/ __ \ / __ |
\     \____|  | \/\  ___/ / __ \|  | \  ___// /_/ |
 \______  /|__|    \___  >____  /__|  \___  >____ |
        \/             \/     \/          \/     \/
__________                                      
\______   \___.__.                              
 |    |  _<   |  |                              
 |    |   \\___  |                              
 |______  // ____|                              
        \/ \/                                    
____   ____    .__   __                          
\   \ /   /_ __|  |_/  |_____________            
 \   Y   /  |  \  |\   __\_  __ \__  \          
  \     /|  |  /  |_|  |  |  | \// __ \_        
   \___/ |____/|____/__|  |__|  (____  /        
                                     \/

                                     -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
  <title>Exodus &bull; PS4 Torrent List</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript">
</script><!-- Latest compiled and minified CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Optional theme -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"><!-- Latest compiled and minified JavaScript -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
</script>
  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
  <link href="css/custom.css" rel="stylesheet" type="text/css">
  <link href="css/side.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="video-background">
    <div class="video-foreground">
      <iframe frameborder="0" src="https://www.youtube.com/embed/LlXJ5pgI84g?controls=0&showinfo=0&?rel=0&amp;vq=hd2160&autoplay=1&loop=1&playlist=LlXJ5pgI84g"></iframe>
    </div>
  </div>

  <div class="container">
    <div class="content">
      <div class="logo"><img src="https://www.psxhax.com/styles/default/xenforo/logo.png"></div>

      <div class="title">
        Exodus Torrents
      </div>

      <div class="moto"></div><!-- Trigger the modal with a button -->

      <div class="searchbar">
        <div class="row">
          <h2>PS4 Torrent Search</h2>

          <form method="POST" action="search.php">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" name="search" placeholder="Search" />
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-lg" type="button">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">
    <script type="text/javascript">
              document.write(new Date().getFullYear());
    </script>&copy; <a href="https://www.psxhax.com/members/wultra.560/">Vultra</a><br>
    Exodus is not associated in any way with <a href="https://playstation.com">Playstation</a> and <a href="https://psxhax.com/">PSXHAX</a>.
  </div><script type="text/javascript">
              $(document).ready(function(){
                      $(".logo").fadeIn(2000);
                      $(".title").fadeIn(4000);
                      $(".moto").fadeIn(6000);
                      $(".searchbar").fadeIn(8000);
                      $(".footer").fadeIn(8000);
                  });
  </script>
</body>
</html>