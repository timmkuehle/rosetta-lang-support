<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$rules = require __DIR__ . '/src/config/php_cs_fixer_rules.php';

$finder = Finder::create();
$finder->in(__DIR__);

$config = new Config();
$config->setFinder($finder);
$config->setRiskyAllowed(true);
$config->setRules($rules);
$config->setIndent("\t");

return $config;
