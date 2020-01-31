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
 * @method mixed amHttpAuthenticated($username, $password)
 * @method mixed amOnUrl($url)
 * @method mixed amOnSubdomain($subdomain)
 * @method mixed executeInGuzzle($function)
 * @method mixed haveHttpHeader($name, $value)
 * @method mixed deleteHeader($name)
 * @method mixed amOnPage($page)
 * @method mixed click($link, $context = null)
 * @method mixed see($text, $selector = null)
 * @method mixed canSee($text, $selector = null)
 * @method mixed dontSee($text, $selector = null)
 * @method mixed cantSee($text, $selector = null)
 * @method mixed seeInSource($raw)
 * @method mixed canSeeInSource($raw)
 * @method mixed dontSeeInSource($raw)
 * @method mixed cantSeeInSource($raw)
 * @method mixed seeLink($text, $url = null)
 * @method mixed canSeeLink($text, $url = null)
 * @method mixed dontSeeLink($text, $url = null)
 * @method mixed cantSeeLink($text, $url = null)
 * @method mixed seeInCurrentUrl($uri)
 * @method mixed canSeeInCurrentUrl($uri)
 * @method mixed dontSeeInCurrentUrl($uri)
 * @method mixed cantSeeInCurrentUrl($uri)
 * @method mixed seeCurrentUrlEquals($uri)
 * @method mixed canSeeCurrentUrlEquals($uri)
 * @method mixed dontSeeCurrentUrlEquals($uri)
 * @method mixed cantSeeCurrentUrlEquals($uri)
 * @method mixed seeCurrentUrlMatches($uri)
 * @method mixed canSeeCurrentUrlMatches($uri)
 * @method mixed dontSeeCurrentUrlMatches($uri)
 * @method mixed cantSeeCurrentUrlMatches($uri)
 * @method mixed grabFromCurrentUrl($uri = null)
 * @method mixed seeCheckboxIsChecked($checkbox)
 * @method mixed canSeeCheckboxIsChecked($checkbox)
 * @method mixed dontSeeCheckboxIsChecked($checkbox)
 * @method mixed cantSeeCheckboxIsChecked($checkbox)
 * @method mixed seeInField($field, $value)
 * @method mixed canSeeInField($field, $value)
 * @method mixed dontSeeInField($field, $value)
 * @method mixed cantSeeInField($field, $value)
 * @method mixed seeInFormFields($formSelector, $params)
 * @method mixed canSeeInFormFields($formSelector, $params)
 * @method mixed dontSeeInFormFields($formSelector, $params)
 * @method mixed cantSeeInFormFields($formSelector, $params)
 * @method mixed submitForm($selector, $params, $button = null)
 * @method mixed fillField($field, $value)
 * @method mixed selectOption($select, $option)
 * @method mixed checkOption($option)
 * @method mixed uncheckOption($option)
 * @method mixed attachFile($field, $filename)
 * @method mixed sendAjaxGetRequest($uri, $params = null)
 * @method mixed sendAjaxPostRequest($uri, $params = null)
 * @method mixed sendAjaxRequest($method, $uri, $params = null)
 * @method mixed makeHtmlSnapshot($name = null)
 * @method mixed grabTextFrom($cssOrXPathOrRegex)
 * @method mixed grabAttributeFrom($cssOrXpath, $attribute)
 * @method mixed grabMultiple($cssOrXpath, $attribute = null)
 * @method mixed grabValueFrom($field)
 * @method mixed setCookie($name, $val, $params = null)
 * @method mixed grabCookie($cookie, $params = null)
 * @method mixed grabPageSource()
 * @method mixed seeCookie($cookie, $params = null)
 * @method mixed canSeeCookie($cookie, $params = null)
 * @method mixed dontSeeCookie($cookie, $params = null)
 * @method mixed cantSeeCookie($cookie, $params = null)
 * @method mixed resetCookie($name, $params = null)
 * @method mixed seeElement($selector, $attributes = null)
 * @method mixed canSeeElement($selector, $attributes = null)
 * @method mixed dontSeeElement($selector, $attributes = null)
 * @method mixed cantSeeElement($selector, $attributes = null)
 * @method mixed seeNumberOfElements($selector, $expected)
 * @method mixed canSeeNumberOfElements($selector, $expected)
 * @method mixed seeOptionIsSelected($selector, $optionText)
 * @method mixed canSeeOptionIsSelected($selector, $optionText)
 * @method mixed dontSeeOptionIsSelected($selector, $optionText)
 * @method mixed cantSeeOptionIsSelected($selector, $optionText)
 * @method mixed seePageNotFound()
 * @method mixed canSeePageNotFound()
 * @method mixed seeResponseCodeIs($code)
 * @method mixed canSeeResponseCodeIs($code)
 * @method mixed seeResponseCodeIsBetween($from, $to)
 * @method mixed canSeeResponseCodeIsBetween($from, $to)
 * @method mixed dontSeeResponseCodeIs($code)
 * @method mixed cantSeeResponseCodeIs($code)
 * @method mixed seeResponseCodeIsSuccessful()
 * @method mixed canSeeResponseCodeIsSuccessful()
 * @method mixed seeResponseCodeIsRedirection()
 * @method mixed canSeeResponseCodeIsRedirection()
 * @method mixed seeResponseCodeIsClientError()
 * @method mixed canSeeResponseCodeIsClientError()
 * @method mixed seeResponseCodeIsServerError()
 * @method mixed canSeeResponseCodeIsServerError()
 * @method mixed seeInTitle($title)
 * @method mixed canSeeInTitle($title)
 * @method mixed dontSeeInTitle($title)
 * @method mixed cantSeeInTitle($title)
 * @method mixed switchToIframe($name)
 * @method mixed moveBack($numberOfSteps = null)
 * @method mixed setServerParameters($params)
 * @method mixed haveServerParameter($name, $value)
 * @method Scenario getScenario()
 */
trait AcceptanceTesterActions
{
	/**
	 * @var array[]
	 */
	protected $methods = [
		'action' => [
			'attachFile',
			'checkOption',
			'click',
			'deleteHeader',
			'dontSee',
			'dontSeeCheckboxIsChecked',
			'dontSeeCookie',
			'dontSeeCurrentUrlEquals',
			'dontSeeCurrentUrlMatches',
			'dontSeeElement',
			'dontSeeInCurrentUrl',
			'dontSeeInField',
			'dontSeeInFormFields',
			'dontSeeInSource',
			'dontSeeInTitle',
			'dontSeeLink',
			'dontSeeOptionIsSelected',
			'dontSeeResponseCodeIs',
			'executeInGuzzle',
			'fillField',
			'grabAttributeFrom',
			'grabCookie',
			'grabFromCurrentUrl',
			'grabMultiple',
			'grabPageSource',
			'grabTextFrom',
			'grabValueFrom',
			'haveHttpHeader',
			'haveServerParameter',
			'makeHtmlSnapshot',
			'moveBack',
			'resetCookie',
			'selectOption',
			'sendAjaxGetRequest',
			'sendAjaxPostRequest',
			'sendAjaxRequest',
			'setCookie',
			'setHeader',
			'setServerParameters',
			'submitForm',
			'switchToIframe',
			'uncheckOption'
		],
		'assertion' => [
			'see',
			'seeCheckboxIsChecked',
			'seeCookie',
			'seeCurrentUrlEquals',
			'seeCurrentUrlMatches',
			'seeElement',
			'seeInCurrentUrl',
			'seeInField',
			'seeInFormFields',
			'seeInSource',
			'seeInTitle',
			'seeLink',
			'seeNumberOfElements',
			'seeOptionIsSelected',
			'seePageNotFound',
			'seeResponseCodeIs',
			'seeResponseCodeIsBetween',
			'seeResponseCodeIsClientError',
			'seeResponseCodeIsRedirection',
			'seeResponseCodeIsServerError',
			'seeResponseCodeIsSuccessful'
		],
		'condition' => [
			'amHttpAuthenticated',
			'amOnPage',
			'amOnSubdomain',
			'amOnUrl'
		]
	];

	/**
	 * @param string $method
	 * @param array $arguments
	 * @return mixed
	 * @throws \Exception
	 */
	public function __call($method, $arguments)
	{
		$step = Step\ConditionalAssertion::class;

		if (preg_match('/^cant[A-Z]/', $method)) {
			$method = 'dont' . substr($method, 4);
		}
		elseif (preg_match('/^can[A-Z]/', $method)) {
			$method = lcfirst(substr($method, 3));
		}
		else {
			foreach ($this->methods as $step => $methods) {
				if (in_array($method, $methods)) {
					$step = 'Codeception\Step\\' . ucfirst($step);

					break;
				}
			}
		}

		return $this->getScenario()->runStep(new $step($method, $arguments));
	}
}
