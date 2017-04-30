<?php

require 'instagram.class.php';

// Initialize class for public requests
$instagram = new Instagram('0e159430fc854eeeb12bd7ce710d7b3e');

// Get popular media
//$popular = $instagram->getMedia(3047388)
$popular = $instagram->getPopularMedia();

// Display results
foreach ($popular->data as $data) {
  echo "<img src=\"{$data->images->thumbnail->url}\">";
}

?>