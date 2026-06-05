# `Seablast\Interfaces`

`Seablast\Interfaces` is a dedicated repository for all interfaces related to the Seablast for PHP ecosystem. This repository serves as the central point of definition for the contracts that the Seablast for PHP core library and its various plugins and extensions implement.
By consolidating all interfaces in one place, `Seablast\Interfaces` ensures consistency, reusability, and maintainability across different components of the `Seablast` framework.

## Key Features

- **Centralized Interface Definitions**: Provides a single source of truth for all interfaces used in the `Seablast` ecosystem, ensuring uniform implementation across different libraries and plugins.
- **Enhanced Modularity**: Facilitates the development and maintenance of modular components by decoupling interface definitions from their implementations.
- **Improved Reusability**: Interfaces defined in `Seablast\Interfaces` can be easily reused by various libraries and plugins, promoting code reuse and reducing duplication.
- **Ease of Integration**: Simplifies the integration process for new libraries and plugins by providing clear and well-documented interfaces that they can implement.
- **Consistent API**: Ensures that all components adhering to the `Seablast` standards follow a consistent API, making it easier for developers to work with the ecosystem.

## Usage

To use the interfaces defined in `Seablast\Interfaces` within your project, simply include the repository as a dependency in your `composer.json` file:

```json
{
  "require": {
    "seablast/interfaces": "^0.1.2"
  }
}
```

Then, run `composer install` or `composer update` to install the dependency and set up autoloading.

## Example

Here's an example of how to implement an interface from `Seablast\Interfaces`:

```php
// src/IdentityManager.php in a package that consumes seablast/interfaces
namespace Seablast\Auth;

use Seablast\Interfaces\IdentityManagerInterface;

final class IdentityManager implements IdentityManagerInterface
{
    public function getGroups(): array
    {
        return [1, 2];
    }

    public function getRoleId(): int
    {
        return 1;
    }

    public function getUserId(): int
    {
        return 123;
    }

    public function isAuthenticated(): bool
    {
        return true;
    }
}
```

## Contribution

We welcome contributions to `Seablast\Interfaces`. If you have suggestions for new interfaces or improvements to existing ones, please open an issue or submit a pull request on our GitHub repository.

## License

`Seablast\Interfaces` is open-source software licensed under the [MIT License](LICENSE).

## Contact

For any questions or support, please contact our development team at <https://github.com/WorkOfStan/seablast-interfaces/issues>.
