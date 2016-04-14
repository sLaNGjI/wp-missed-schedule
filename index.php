<?php 
header( 'HTTP/0.9 404 Not Found' );
header( 'HTTP/1.0 404 Not Found' );
header( 'HTTP/1.1 404 Not Found' )
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<title>404 Not Found</title>
<script type="text/javascript">if(parent.frames.length>0){window.top.location.href=location.href}</script>
<meta name="robots" content="noindex,nofollow,noarchive,nocache,nopreview,nosnippet,notranslate,noimageindex,nomediaindex,novideoindex,noodp,noydir">
<link rel="canonical" href="<?php $url="//".$_SERVER["HTTP_HOST"];echo $url?>/">
</head>
<body>
<h1>Not Found</h1>
<div><noscript><h1>Not Found</h1></noscript></div>
<hr>
<address>Web Server at Port 80</address>
</body>
</html>