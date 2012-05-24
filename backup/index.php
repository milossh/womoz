<!DOCTYPE HTML>
<html>
<head lang="en">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta http-equiv="content-language" content="en">
  <title>Women &amp; Mozilla</title>

  <meta name="description" content="Gender Equality in Mozilla and FLOSS">
  <meta name="keywords" content="mozilla, women, womoz, parity, equity, gender, FLOSS, free, software, opensource">

  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link rel="icon" href="images/favicon.ico" type="image/ico">

</head>

<body>

<div id="wrap">
  <div id="header">
    <div id="logo">
      <a href="http://www.womoz.org"><img src="images/logo.png" alt="Women and Mozilla" width="160"></a>
    </div>
    <h1><a href="http://www.womoz.org">Women &amp; Mozilla</a></h1>
  </div>
  <div id="content">
    
    <div id="main">
      <div class="slogan">
        <h1>Take a part in Women and Mozilla</h1>
        <h2>Diversity is important part of every team</h2>
      </div>
      
      <p class="intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </p>
      
      <p class="intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
      </p>
      
      <div id="links">
        <div class="linkbox">
          <p class="desc"><a href="http://womoz.org/blog/">Read news about the project, affiliated events... Here is the <strong>blog</strong></a></p>
          <p class="link_blog"><a href="http://womoz.org/blog/">WoM Blog</a></p>
        </div>

        <div class="linkbox">
          <p class="desc"><a href="http://lists.womoz.org/mailman/listinfo/womoz">Stay informed by mail about the news of the project... Subscribe to the <strong>mailing-list</strong></a></p>
          <p class="link_mailing"><a href="http://lists.womoz.org/mailman/listinfo/womoz">WoMoz Mailing List</a></p>
        </div>

        <div class="linkbox">
          <p class="desc"><a href="http://womoz.org/wiki">Participate in the project, offer your ideas and contributions... Check out the <strong>wiki</strong></a></p>
          <p class="link_wiki"><a href="http://womoz.org/wiki">WoMoz Wiki</a></p>
        </div>
        <hr class="clear">
      </div>
      
    </div>
    
    <div id="sidebar">
    
      <div id="donate-box">
        <p>Donate and get the 2010 Mozilla shirt 
          <a href="http://www.mozilla.org/foundation/openwebfund/?WT.ac=adopt_h">Donate&nbsp;now&nbsp;»</a>
        </p>
      </div>
    
      <?php        
        require_once('simplepie/php/simplepie.inc');
        // Process feed with defaults
        $feed = new SimplePie();
        $feed->set_feed_url('http://www.womoz.org/blog/feed/');
        $feed->set_cache_location('simplepie/cache');
 
        # Start and send text/html in UTF-8
        $feed->init();
        $feed->handle_content_type();
      
        function shorten_string($text, $char) {
          $text = substr($text, 0, $char);
          if(substr($text, 0, strrpos($text, ' '))!='') $text = substr($text, 0, strrpos($text, ' '));
          $text = $text.'...';
          return $text;
        }

        # Loop through the items, set $item to current item      
        foreach ($feed->get_items(0, 4) as $item):
      ?>
 
      <div class="item">
        <h4><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h4>
        <p><?php echo shorten_string($item->get_description(), 100); ?></p>
        <p><small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small></p>
        <hr>
      </div>
 
      <?php endforeach; ?>

    </div>
    
    <hr class="clear">
    
  </div>
  
  <div id="footer">
    <div class="copyright">
      <a href="/" id="logo-footer"><img width="60" alt="WoMoz" src="images/logo.png"></a>
        <p id="copyright">
            Portions of this content are &copy;1998&ndash;2010 by individual mozilla.org contributors. Content available under a Creative Commons <a href="/foundation/licensing/website-content.html">license</a>.
        </p>
        <p id="copyright-links">
            <a class="first" href="/contact/">Contact Us</a><br>
            <a href="/about/policies/privacy-policy.html">Privacy Policy</a><br>
            <a href="http://www.mozilla.com/en-US/legal/fraud-report/index.html">Report Trademark Abuse</a>
        </p>
    </div>
    <div class="fotterul">
        <h5><strong>About Mozilla</strong></h5>
        <ul>
            <li><a href="/about/mission.html">Mission</a></li>
            <li><a href="/community/forums/">Forums</a></li>
            <li><a href="/about/governance.html">Governance</a></li>
            <li><a href="/about/organizations.html">Organizations</a></li>
            <li><a href="/grants/">Grants</a></li>
            <li><a href="/about/history.html">History</a></li>
            <li><a href="/about/faq.html">FAQs</a></li>
            <li><a href="/about/">More...</a></li>
        </ul>
    </div>
    <div class="fotterul">
        <h5><strong>Community Map</strong></h5>
        <ul>
            <li><a href="/community/index.html#applications">Applications</a></li>
            <li><a href="/community/index.html#code">Code</a></li>
            <li><a href="/community/index.html#incubators">Incubators</a></li>
            <li><a href="/community/index.html#community-sites">Community Sites</a></li>
            <li><a href="/community/directory.html">Directory</a></li>
            <li><a href="/community/">More...</a></li>
        </ul>
    </div>
    <div class="fotterul">
        <h5><strong>Our Projects</strong></h5>
        <ul>
            <li><a href="http://www.firefox.com">Firefox</a></li>
            <li><a href="http://www.getthunderbird.com">Thunderbird</a></li>
            <li><a href="http://www.drumbeat.org/projects">Drumbeat</a></li>
            <li><a href="http://www.mozillalabs.com/projects">Mozilla Labs</a></li>
            <li><a href="/support">Support</a></li>
            <li><a href="https://addons.mozilla.org">Add-ons</a></li>
             <li><a href="/security/announce">Security Advisories</a></li>
            <li><a href="/projects/">More...</a></li>
        </ul>
    </div>
    <div class="fotterul">
        <h5><strong>Get Involved</strong></h5>
        <ul>
            <li><a href="https://developer.mozilla.org/En/Developer_Guide">Developing</a></li>
            <li><a href="https://developer.mozilla.org/Project:en/How_to_Help">Documentation</a></li>
            <li><a href="/foundation/donate.html">Donate</a></li>
            <li><a href="https://wiki.mozilla.org/L10n">Localization</a></li>
            <li><a href="http://contribute.mozilla.org/Marketing">Marketing</a></li>
            <li><a href="http://quality.mozilla.org/">Testing</a></li>
    <li><a href="http://blog.mozilla.com/webdev/get-involved/">Webdev</a></li>
            <li><a href="/contribute">More...</a></li>
        </ul>
    </div>
    
    <hr class="clear">
    
  </div>
</div>

</body>
</html>