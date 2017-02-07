<?php include "partials/head.php"; ?>

<body>
  <?php include "partials/header.php"; ?>

      <section>
        <h1>Contact JellyBean Photography...</h1>
        <h2>Contacting us is easy</h2>
        <p>To get in touch with JellyBean Photography you can e-mail us, call us or fill in the simple form below and we will get back you within 24 hours.
        <br><br>Email: <a href="mailto:info@jellybeanphotography.me.uk">info@jellybeanphotography.me.uk</a>
        <br><br>Phone: <a href="tel:+447740276289">07740 276289</a>
        <br><br>Address: JellyBean Photography,<br>47 Somergate Road,<br>Cheltenham,<br>GL51 0QE<br></p>

        <div id="contactform">
            <form action="form_process.php" method="post" name="contact_form" id="contact_form">
              <fieldset>
                <legend>Contact Form</legend>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" alt="name" required="true" />
                <label for="email">Email Address: </label>
                <input type="email" name="email" id="email" alt="email" required="true" />
                <label for="tel">Telephone Number:</label>
                <input type="tel" name="tel" id="tel" alt="Telephone Number" required="true" />
                <label for="enquiry">Enquiry:</label>
                <input type="text" name="enquiry" id="enquiry" alt="enquiry" required="true" />
              </fieldset>
              <button type="submit" value="Submit" id="submit">Submit</button>
            </form>
      </section>

  <?php include "partials/footer.php"; ?>
  <?php include "partials/analytics.php"; ?>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="public/scripts.js"></script>
</body>
</html>
