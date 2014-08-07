<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>--- Alan Marcero  &middot;  Web Programmer  &middot;  Music Producer ---</title>
<link rel="stylesheet" href="http://www.alanmarcero.com/css/main.css" media="screen" type="text/css" />

</head>

<body>
<div id="banner">
    <div id="bannerContent">
        <a href="http://www.alanmarcero.com"><img src="http://www.alanmarcero.com/images/me.png" /></a>
    </div>
</div> <!-- end banner -->

<div id="nav">
    <div id="navContent">
        <ul>
            <li><a href="index.php">Sound Design</li><li><a href="customers.php">Customer's Section</li><li><a href="index.php?page=about">About</li><li><a href="http://www.youtube.com/AlanMarcero">YouTube</a></li><li><a href="http://www.soundcloud.com/AlanMarcero">SoundCloud</a></li>{if $data.session_email}<li style="text-align:right"><a href="logout.php" />Logout</a></li>{/if}
        </ul>
    </div>
</div>

<div id="sectionHeading">
    <div id="sectionHeadingText">
        <div id="cart">
            {$data.customer_count} people have purchased {$data.item_count} patch banks :: Last purchase {$data.last_item}
        </div>
        <div id="loggedIn">
            {if $data.session_email}Logged in with email: {$data.session_email}{/if}
        </div>
    </div>
</div>

<div id="sectionContent">
    <div id="sectionContentText">
        {$content}
    <div id="footer">
        <p style="margin:0px;">
            All Synthesizer Patch Banks &copy; <?php echo date("Y"); ?> Alan Marcero.  Content of the audio demos is copyright their respective owners.
        </p>
    </div>
    </div><!-- end sectionContentText -->
</div> <!-- end sectionContent -->

{literal}
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18728945-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
{/literal}

</body>

</html>