<?php
// Log IP address
$ip = $_SERVER['REMOTE_ADDR'];
$log = fopen('ip_log.txt', 'a');
fwrite($log, $ip . "\n");
fclose($log);

// Display the video
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Video Page</title>
</head>
<body>
    <h1>Watch this Video</h1>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/your_video_id" frameborder="0" allowfullscreen></iframe>
</body>
</html>
