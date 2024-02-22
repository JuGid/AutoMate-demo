<?php 

require __DIR__.'/vendor/autoload.php';

use Automate\AutoMate;
use Automate\Launcher\Launcher;

$configuration_file = __DIR__.'/config/demo-config.yaml';

$automate = new AutoMate($configuration_file);

//Uncomment this to run every demos
/*
$launcher = new Launcher($configuration_file);
$launcher
    ->add('condition')
    ->add('errors')
    ->add('import')
    ->add('lmdtfy')
    ->add('loop')
    ->add('page')
    ->add('simple')
    ->add('w3c')
    ->add('wikipedia')
    ->add('withspec')
;
$launcher->run();
$launcher->printReport();
*/

$automate->run('wikipedia', false, true);

