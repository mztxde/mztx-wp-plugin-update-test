<?php

$infilePath = $argv[1];

$manifest = json_decode(file_get_contents($infilePath), true);
$manifest['version'] = getenv('VERSION');
$manifest['package'] = getenv('DOWNLOAD_URL');
//$manifest['last_updated'] = (new DateTimeImmutable())->format('Y-m-d H:i:s');
//$manifest['sections']['changelog'] = 'TODO';

echo json_encode($manifest, JSON_PRETTY_PRINT);
echo PHP_EOL;
