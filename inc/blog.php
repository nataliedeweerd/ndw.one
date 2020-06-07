<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://dev.to/api/articles?username=nataliedeweerd",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"cache-control: no-cache"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$response = json_decode($response, true);

$i = 0;

foreach ($response as $key => $article){

	if(strlen($article['canonical_url']) > 0){

		echo '
		<a href="'.$article['canonical_url'].'" target="_blank" class="blog__article">
			<h2>'.$article['title'].'</h2>
			<div class="blog__description">'.$article['description'].'</div>
			<div class="blog__readmore">Read More</div>
		</a>
		';

		$i++;
	}

	if ($i == 3){ break; }

}
