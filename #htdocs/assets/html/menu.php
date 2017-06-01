<?php
	$CurrentPage = $_SERVER['REQUEST_URI'];
	$CurrentPage = str_replace("index.php", "", $CurrentPage);
?>
    <div class="SiteMenu">
      <ul>
        <li><a href="./"<?php if($CurrentPage == "/") print(" class=\"Active\""); ?>>Home</a></li>
        <li><a href="ChildCare.php"<?php if($CurrentPage == "/ChildCare.php") print(" class=\"Active\""); ?>>Child Care Services</a></li>
        <li><a href="Contact.php"<?php if($CurrentPage == "/Contact.php") print(" class=\"Active\""); ?>>Contact Us</a></li>
        <li><a href="HelpfulSites.php"<?php if($CurrentPage == "/HelpfulSites.php") print(" class=\"Active\""); ?>>Helpful Sites</a></li>
      </ul>
      <div class="Cleanup"></div>
    </div>
