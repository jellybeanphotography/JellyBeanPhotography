<div class="fullscreenimage">
  <img src="public\images/Logo.svg" class="logo" alt="JellyBean Photography Logo" tite="JellyBean Photography Logo">
  <img src="public\images/threelines.png" id="open_menu" class="menubutton" alt="Menu Icon">
  <nav>
    <img src="public\images/menu-logo.svg" class="menu-logo" alt="JellyBean Photography Logo" tite="JellyBean Photography Logo">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <ul>
      <a href="https://www.facebook.com/JellyBeanPhotographer" target="_blank"><img src="public\images/icons/facebookicon.svg" class="socialicons" alt="Facebook Icon" title="Facebook Icon"></a>
      <a href="https://twitter.com/scottatJBP" target="_blank"><img src="public\images/icons/twittericon.svg" class="socialicons" alt="Twitter Icon" title="Twitter Icon"></a>
      <a href="https://plus.google.com/u/0/+JellyBeanPhotography" target="_blank"><img src="public\images/icons/googleplusicon.svg" class="socialicons" alt="GooglePlus Icon" title="GooglePlus Icon"></a>
      <a href="https://uk.linkedin.com/in/jellybeanphotographer" target="_blank"><img src="public\images/icons/linkedinicon.svg" class="socialicons" alt="LinkedIn Icon" title="LinkedIn Icon"></a>
    </ul>
    <ul>
      <li><img src="public\images/cross.png" id="close_menu" class="menuclosebutton" alt="Menu Close Button"></li>
    </ul>
  </nav>
</div>

<script>
  $(function() {
    $("#open_menu").click(function() { $("nav").toggleClass("menuactive");});
  });
</script>
<script>
  $(function() {
    $("#close_menu").click(function() { $("nav").toggleClass("menuactive");});
  });
</script>
