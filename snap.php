<!HTML>
<body>
<?php 

include 'snap/phpsnap/src/snapchat.php';

// Log in:
$snapchat = new Snapchat('yotobooth', 'todo1117');

// Upload a snap and send it to me for 8 seconds:
$id = $snapchat->upload(
    Snapchat::MEDIA_IMAGE,
    file_get_contents('img/img001.jpg')
);
$snapchat->setStory($id, Snapchat::MEDIA_IMAGE);

// Upload a snap and send it to me for 8 seconds:
$id = $snapchat->upload(
    Snapchat::MEDIA_IMAGE,
    file_get_contents('img/img001.jpg')
);
$snapchat->send($id, array('mrmuffins17'), 8);




echo "done";
?>

uploaded!
<img src="img/img001.jpg" />
</body>
