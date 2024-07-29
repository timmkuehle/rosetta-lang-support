<?php

declare(strict_types=1);

namespace Rosetta\LangSupport;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

class PhpSupport {
	public static function getPhpCsFixerConfig(Finder $finder): Config {
		$config = new Config();
		$config->setFinder($finder);
		$config->setRiskyAllowed(true);
		$config->setRules(self::getPhpCsFixerRules());
		$config->setIndent("\t");

		return $config;
	}

	private static function getPhpCsFixerRules() {
		return require __DIR__ . '/config/php_cs_fixer_rules.php';
	}
}
