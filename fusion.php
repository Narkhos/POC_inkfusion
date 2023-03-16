<?php

function endsWith( $haystack, $needle ) {
    $length = strlen( $needle );
    if( !$length ) {
        return true;
    }
    return substr( $haystack, -$length ) === $needle;
}

$resultingStory = <<<INK
	->MainMenu
	=== MainMenu\n
INK;
$header = "";

$stories = [];

$files = scandir("./stories");

for($i=0;$i<count($files);$i++) {
	if (endsWith($files[$i],".ink")) {
		$stories[rtrim($files[$i], ".ink")] = file_get_contents("./stories/".$files[$i]);
	}
}

foreach($stories as $key => $story) {
	$stories[$key] = preg_replace('/->[\s+]*END/',"# REINIT:\n-> MainMenu",$stories[$key]);

	$knotName=str_replace(" ", "", $key)."Story";

	$stories[$key] = "=== $knotName\n".$stories[$key];
	
	$header .= "+ $key ->$knotName\n";
}

$resultingStory .= $header;

foreach($stories as $key => $story) {
	$resultingStory .= $stories[$key]."\n";
}

file_put_contents("resultStory.ink", $resultingStory);

echo "DONE";


