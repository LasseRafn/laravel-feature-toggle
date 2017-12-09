<?php

namespace Sasin91\LaravelFeatureToggle\Tests;

use Orchestra\Testbench\TestCase as TestbenchTestCase;
use Sasin91\LaravelFeatureToggle\FeatureToggleServiceProvider;

abstract class TestCase extends TestbenchTestCase
{
	protected function getPackageProviders($app)
	{
		return [FeatureToggleServiceProvider::class];
	}

	protected function getPackageAliases($app)
	{
		return [
			//
		];
	}

	/**
	 * Define environment setup.
	 *
	 * @param  \Illuminate\Foundation\Application
	 * @return void
	 */
	protected function getEnvironmentSetUp($app)
	{
		//
	}
}