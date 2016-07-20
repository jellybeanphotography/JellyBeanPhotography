<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>JellyBean Photography - Gloucestershire Freelance Photographer</title>
    <link rel="stylesheet" type="text/css" href="normalise.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link rel="apple-touch-icon" sizes="57x57" href="images\favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images\favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images\favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images\favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images\favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images\favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images\favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images\favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images\favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images\favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images\favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images\favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images\favicon/favicon-16x16.png">
    <link rel="manifest" href="images\favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images\favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body>
    <header>
      <img src="images/Logo.svg" class="header-logo" alt="JellyBean Photography Logo" tite="JellyBean Photography Logo">
      <div id="header-container-nav">
        <ul id="nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
    </header>

      <div class="socialiconscontainer">
        <a href="https://www.facebook.com/JellyBeanPhotographer"><img src="images/icons/facebookicon.svg" class="socialicons" alt="Facebook Icon" title="Facebook Icon"></a>
        <a href="https://twitter.com/scotttaylor85"><img src="images/icons/twittericon.svg" class="socialicons" alt="Twitter Icon" title="Twitter Icon"></a>
        <a href="https://plus.google.com/u/0/+JellyBeanPhotography"><img src="images/icons/googleplusicon.svg" class="socialicons" alt="GooglePlus Icon" title="GooglePlus Icon"></a>
        <a href="https://uk.linkedin.com/in/jellybeanphotographer"><img src="images/icons/linkedinicon.svg" class="socialicons" alt="LinkedIn Icon" title="LinkedIn Icon"></a>
      </div>

      <section>
        <div id="pageheader">
          <h2>contact JellyBean Photography...</h2>
        </div>

        <div id="textblock">
          <p>To get in touch with JellyBean Photography you can e-mail us, call us or fill in the simple form below and we will get back you within 24 hours.</p>
          <h3>Email:</h3> <div class="address"><a href="info@jellybeanphotography.me.uk">info@jellybeanphotography.me.uk</a></div>
          <h3>Phone:</h3> <div class="address"><a href="tel:+447740276289">07740 276289</a></div>
          <h3>Address:</h3>
          <div class="address">
            <p>JellyBean Photography,</p>
            <p>47 Somergate Road,</p>
            <p>Cheltenham,</p>
            <p>GL51 0QE</p>
          </div>
        </div>

        <div id="contactform">
          <h3>Contact Form</h3>
            <form action="form_process.php" method="post" name="contact_form">
              <fieldset>
                <label>Name:</label>
                <input type="text" name="name" id="name" alt="name" required="true" />
                <label>Email Address: </label>
                <input type="email" name="email" id="email" alt="email" required="true" />
                <label>Telephone Number:</label>
                <input type="tel" name="tel" id="tel" alt="Telephone Number" required="true" />
                <label>Enquiry:</label>
                <input type="text" name="enquiry" id="enquiry" alt="enquiry" required="true" />
                <button type="submit" value="Submit" id="submit">Submit</button>
              </fieldset>
            </form>
        </div>
      </section>

  <footer>
    <small>Scott Taylor | JellyBean Photography | 47 Somergate Road, Cheltenham, Glos, GL51 0QE | info@jellybeanphotography.me.uk</small>
  </footer>
</body>
</html>
