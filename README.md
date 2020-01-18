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

`tests/unit.suite.yml`:

```yaml
actor: UnitTester
modules:
  enabled:
  - Asserts
  - TimonKreis\Framework\Test\Helper\Unit
  step_decorators: ~

```

At least, add this to your `composer.json`:

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
