<?php
/**
 * Copyright by Timon Kreis - All Rights Reserved
 * Visit https://www.timonkreis.de
 */
declare(strict_types = 1);

namespace TimonKreis\Framework\Test;

use Codeception\Scenario,
	Codeception\Step;

/**
 * @category tk-framework
 * @package test
 *
 * @method mixed expectException($exception, $callback)
 * @method mixed expectThrowable($throwable, $callback)
 * @method mixed assertNotEquals($expected, $actual, $message = null, $delta = null)
 * @method mixed assertSame($expected, $actual, $message = null)
 * @method mixed assertNotSame($expected, $actual, $message = null)
 * @method mixed assertGreaterThan($expected, $actual, $message = null)
 * @method mixed assertGreaterThanOrEqual($expected, $actual, $message = null)
 * @method mixed assertLessThan($expected, $actual, $message = null)
 * @method mixed assertLessThanOrEqual($expected, $actual, $message = null)
 * @method mixed assertContains($needle, $haystack, $message = null)
 * @method mixed assertNotContains($needle, $haystack, $message = null)
 * @method mixed assertRegExp($pattern, $string, $message = null)
 * @method mixed assertNotRegExp($pattern, $string, $message = null)
 * @method mixed assertStringStartsWith($prefix, $string, $message = null)
 * @method mixed assertStringStartsNotWith($prefix, $string, $message = null)
 * @method mixed assertEmpty($actual, $message = null)
 * @method mixed assertNotEmpty($actual, $message = null)
 * @method mixed assertNull($actual, $message = null)
 * @method mixed assertNotNull($actual, $message = null)
 * @method mixed assertTrue($condition, $message = null)
 * @method mixed assertNotTrue($condition, $message = null)
 * @method mixed assertFalse($condition, $message = null)
 * @method mixed assertNotFalse($condition, $message = null)
 * @method mixed assertFileExists($filename, $message = null)
 * @method mixed assertFileNotExists($filename, $message = null)
 * @method mixed assertGreaterOrEquals($expected, $actual, $description = null)
 * @method mixed assertLessOrEquals($expected, $actual, $description = null)
 * @method mixed assertIsEmpty($actual, $description = null)
 * @method mixed assertArrayHasKey($key, $actual, $description = null)
 * @method mixed assertArrayNotHasKey($key, $actual, $description = null)
 * @method mixed assertCount($expectedCount, $actual, $description = null)
 * @method mixed assertInstanceOf($class, $actual, $description = null)
 * @method mixed assertNotInstanceOf($class, $actual, $description = null)
 * @method mixed assertInternalType($type, $actual, $description = null)
 * @method mixed fail($message)
 * @method mixed assertStringContainsString($needle, $haystack, $message = null)
 * @method mixed assertStringNotContainsString($needle, $haystack, $message = null)
 * @method mixed assertStringContainsStringIgnoringCase($needle, $haystack, $message = null)
 * @method mixed assertStringNotContainsStringIgnoringCase($needle, $haystack, $message = null)
 * @method mixed assertStringEndsWith($suffix, $string, $message = null)
 * @method mixed assertStringEndsNotWith($suffix, $string, $message = null)
 * @method mixed assertIsArray($actual, $message = null)
 * @method mixed assertIsBool($actual, $message = null)
 * @method mixed assertIsFloat($actual, $message = null)
 * @method mixed assertIsInt($actual, $message = null)
 * @method mixed assertIsNumeric($actual, $message = null)
 * @method mixed assertIsObject($actual, $message = null)
 * @method mixed assertIsResource($actual, $message = null)
 * @method mixed assertIsString($actual, $message = null)
 * @method mixed assertIsScalar($actual, $message = null)
 * @method mixed assertIsCallable($actual, $message = null)
 * @method mixed assertIsNotArray($actual, $message = null)
 * @method mixed assertIsNotBool($actual, $message = null)
 * @method mixed assertIsNotFloat($actual, $message = null)
 * @method mixed assertIsNotInt($actual, $message = null)
 * @method mixed assertIsNotNumeric($actual, $message = null)
 * @method mixed assertIsNotObject($actual, $message = null)
 * @method mixed assertIsNotResource($actual, $message = null)
 * @method mixed assertIsNotString($actual, $message = null)
 * @method mixed assertIsNotScalar($actual, $message = null)
 * @method mixed assertIsNotCallable($actual, $message = null)
 * @method mixed assertEquals($actual, $message = null)
 * @method mixed assertEqualsCanonicalizing($expected, $actual, $message = null)
 * @method mixed assertNotEqualsCanonicalizing($expected, $actual, $message = null)
 * @method mixed assertEqualsIgnoringCase($expected, $actual, $message = null)
 * @method mixed assertNotEqualsIgnoringCase($expected, $actual, $message = null)
 * @method mixed assertEqualsWithDelta($expected, $actual, $delta, $message = null)
 * @method mixed assertNotEqualsWithDelta($expected, $actual, $delta, $message = null)
 */
trait UnitTesterActions
{
	/**
	 * @return Scenario
	 */
	abstract protected function getScenario();

	/**
	 * @param string $method
	 * @param array $arguments
	 * @return mixed
	 */
	public function __call($method, $arguments)
	{
		return $this->getScenario()->runStep(new Step\Action($method, $arguments));
	}
}
