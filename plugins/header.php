<?php include('../documents/variables.php'); ?>

<!-- Function that appends class="active" to the current menu item -->
<?php

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?><!-- end _echoActiveClassIfRequestMatches function -->

<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        
        <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="brand" href="./homepage.php"><img src="images/logo.png"></a>
        
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li <?=echoActiveClassIfRequestMatches("index")?><?=echoActiveClassIfRequestMatches("")?>>
              <a href="./homepage.php">Home</a>
            </li>
            <li <?=echoActiveClassIfRequestMatches("team")?>>
              <a href="upload.php">Upload</a>
            </li>

			<li <?=echoActiveClassIfRequestMatches("contact")?>>
              <a href="./users.php">Users</a>
            </li>
			<li <?=echoActiveClassIfRequestMatches("Slider")?>>
              <a href="http://localhost/Raspberrysite(xamp)/Pipromotor/supersizedslider/default.php">Slider</a>
            </li>
			<li <?=echoActiveClassIfRequestMatches("contact")?>>
              <a href="./about.php">About</a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div> <!-- end #navbar-wrapper -->