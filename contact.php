<?php include "partials/head.php"; ?>
<?php include "partials/analytics.php"; ?>

<body>
  <?php include "partials/header.php"; ?>
  <?php include "partials/socials.php"; ?>

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
            <form action="form_process.php" method="post" name="contact_form">
              <fieldset>
                <h3>Contact Form</h3>
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

  <?php include "partials/footer.php"; ?>
</body>
</html>
