<div class="sidebar">
  <div class="box">
    <div class="title">Latest Tweets</div>
    <div class="post" style="text-align: right;">
      <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/NIWANetwork" data-widget-id="390347444321394689" height="350px">Tweets by @NIWANetwork</a>
      <script>
        ! function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0],
            p = /^http:/.test(d.location) ? 'http' : 'https';
          if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + "://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
          }
        }(document, "script", "twitter-wjs");
      </script>
    </div>
  </div>

  <div class="box">
    <div class="title">Affiliates</div>
    <div class="post" style="text-align: right; display: block;">
      <ul>
        <?php
          $affiliates = getAffiliates();
          foreach ($affiliates as $affiliate) {
            echo "
            <li>
              <a href=\"{$affiliate->url}\" title=\"{$affiliate->title}\" target=\"_blank\">
                {$affiliate->name}
              </a>
            </li>";
          }
        ?>
      </ul>
    </div>
  </div>
</div>
<p style="clear: both;"></p>
