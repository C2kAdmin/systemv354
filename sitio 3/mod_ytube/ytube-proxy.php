<?php

// URL del feed RSS de YouTube de tu canal
$youtubeFeedUrl = 'https://www.youtube.com/feeds/videos.xml?channel_id=UC0-zFXRdIOZaQu4t1i32ySw';

// Realiza la solicitud al feed RSS de YouTube
$youtubeFeed = file_get_contents($youtubeFeedUrl);

// Filtra el contenido del feed para incluir solo los videos de tu canal
$filteredFeed = preg_replace('/<entry[^>]*>(?:(?!</entry>)[\s\S])*<\/entry>/', '', $youtubeFeed);

// Devuelve el contenido filtrado del feed RSS
echo $filteredFeed;

