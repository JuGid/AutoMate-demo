<?php 

require __DIR__.'/vendor/autoload.php';

use Automate\AutoMate;

$scenarios = [
    'condition' => [false, true, 'chrome'],
    'errors' => [false, true, 'chrome'],
    'import' => [false, true, 'chrome'],
    'lmdtfy' => [false, true, 'chrome'],
    'loop' => [false, true, 'chrome'],
    'page' => [false, true, 'chrome'],
    'simple' => [false, true, 'chrome'],
    'w3c' => [false, true, 'chrome'],
    'wikipedia' => [false, true, 'chrome'],
    'withspec' => [true, true, 'chrome']
];

//Uncomment this to use your config file
//$automate = new AutoMate(__DIR__.'/config/your-config.yaml');
$automate = new AutoMate(__DIR__.'/config/demo-config.yaml');

//foreach($scenarios as $scenario => $runConfig) {
//    $automate->run($scenario, $runConfig[0], $runConfig[1], $runConfig[2]);
//}
$automate->run('wikipedia', false, true);

