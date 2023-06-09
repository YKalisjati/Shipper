<?php

declare(strict_types=1);

use CodeIgniter\CodingStandard\CodeIgniter4;
use Nexus\CsConfig\Factory;
use Nexus\CsConfig\FixerGenerator;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__)
    ->exclude([
        'bootstrap',
        'storage',
        'tests',
        'vendor',
    ])
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true);

$overrides = [];

$options = [
    'finder'       => $finder,
    'customFixers' => FixerGenerator::create('vendor/nexusphp/cs-config/src/Fixer', 'Nexus\\CsConfig\\Fixer'),
];

return Factory::create(new CodeIgniter4(), $overrides, $options)->forProjects();
