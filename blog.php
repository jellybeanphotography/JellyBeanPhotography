<?php $pagetitle = "Our Blog"; ?>
<?php $description = "All of our social media blogs"; ?>
<?php include "partials/head.php"; ?>

<body>
  <?php include "partials/header.php"; ?>
  <style>.fullscreenimage{background-image: url(/public/images/fullscreenimage/blog.jpg);}</style>

      <section>
        <h1>JellyBean Photography's Blog</h1>
        <h2>Follow JellyBean Photography Blog to keep Up-to-Date on all the news from JellyBean Photography</h2>

        <div class="socialblogdivs">
          <div class="fb-page" data-href="https://www.facebook.com/JellyBeanPhotographer/" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/JellyBeanPhotographer/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/JellyBeanPhotographer/">JellyBean Photography</a></blockquote></div>
          <div><a class="twitter-timeline"  href="https://twitter.com/scottatJBP" data-widget-id="711112568950095872">Tweets by @scottatJBP</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div>
        </div>
        <br>
        <p>Follow JellyBean Photography on our social media pages to keep up-to-date with every JellyBean Photography related.</p>
        <div class="socialdivs">
          <div class="fb-like" data-href="https://www.facebook.com/JellyBeanPhotographer/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
          <div class="fb-follow" data-href="https://www.facebook.com/JellyBeanPhotographer/" data-layout="standard" data-size="small" data-show-faces="false"></div>
        </div>
      </section>

  <?php include "partials/footer.php"; ?>
  <?php include "partials/analytics.php"; ?>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="public/scripts.js"></script>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=1790452367910076";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
