<!HTML>
<body>
<?php 

//Location of the snapchat API files
include 'snap/phpsnap/src/snapchat.php';

// Log in:
$snapchat = new Snapchat('SNAPCHATUSER', 'PASSWORD');

//Send Snap to story
$id = $snapchat->upload(
    Snapchat::MEDIA_IMAGE,
    file_get_contents('img/img001.jpg')
);
$snapchat->setStory($id, Snapchat::MEDIA_IMAGE);

//used for testing purposes to see if the snapchats were
//being sent but can be removed once done testing
$id = $snapchat->upload(
    Snapchat::MEDIA_IMAGE,
    file_get_contents('img/img001.jpg')
);
$snapchat->send($id, array('SNAPCHATUSER'), 8);

echo " ";
?>

<h1>uploaded!</h1>
<img src="img/img001.jpg" />
</body>
