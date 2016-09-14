<img src="public\images/Logo.svg" class="header-logo" alt="JellyBean Photography Logo" tite="JellyBean Photography Logo">
<img src="public\images/threelines.png" id="open_menu">
<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="portfolio.php">Portfolio</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="blog.php">Blog</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>
<script>
  $(function() {
    $("#open_menu").click(function() { $("nav").toggleClass("menuactive");});
  });
</script>
