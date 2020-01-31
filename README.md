# tk-framework/test

To start a new project to test, just create the following files with the specified content:

`codeception.yml`:

```yaml
namespace: TimonKreis\Framework\Test
paths:
  tests: tests
  output: tests/_output
  data: tests/_data
  support: vendor/tk-framework/test/src
  envs: tests/_envs
actor_suffix: Tester
extensions:
  enabled:
  - Codeception\Extension\RunFailed
```

`tests/unit.suite.yml` (if unit tests should be created):

```yaml
actor: UnitTester
modules:
  enabled:
  - Asserts
  - TimonKreis\Framework\Test\Helper\Unit
  step_decorators: ~

```

`tests/functional.suite.yml` (if functional tests should be created):

```yaml
actor: FunctionalTester
modules:
  enabled:
  - TimonKreis\Framework\Test\Helper\Functional
  step_decorators: ~
```

`tests/acceptance.suite.yml` (if acceptance tests should be created):

```yaml
actor: AcceptanceTester
modules:
  enabled:
  - PhpBrowser:
    url: http://localhost/mypackage
  - TimonKreis\Framework\Test\Helper\Acceptance
  step_decorators: ~  
```

Then you can create your tests under `tests/unit`, `tests/functional` or `tests/acceptance`. At least, add this to your `composer.json`:

```json
"require-dev": {
    "tk-framework/test": "^1.0.0"
    ...
}
```

To run your created tests, run the following command from your project root:

```bash
vendor/bin/codecept run
```
