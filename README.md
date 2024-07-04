<!--TODO: Add logo-->
<p align="center"><img width="300" src="/art/logo.svg" alt="Filament Plugin Logo"></p>

<p align="center">
    <a href="https://packagist.org/packages/{{vendor}}/{{package}}">
        <img src="https://poser.pugx.org/{{vendor}}/{{package}}/d/total.svg" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/{{vendor}}/{{package}}">
        <img src="https://poser.pugx.org/{{vendor}}/{{package}}/require/php" alt="PHP Version Require">
    </a>
    <a href="https://packagist.org/packages/{{vendor}}/{{package}}">
        <img src="https://poser.pugx.org/{{vendor}}/{{package}}/license.svg" alt="License">
    </a>
</p>

---
## Installation

**Install via composer**

Run the command:
```bash
composer require {{vendor}}/{{package}}
```

### Publish Package files

If you want to publish the package files, follow the next instructions.

<details>
<summary>Config</summary>

Run the command:
```bash
php artisan vendor:publish --tag="{{package}}-config"
```
</details>

<details>
<summary>Migrations</summary>

Run the command:
```bash
php artisan vendor:publish --tag="{{package}}-migrations"
```
</details>

<details>
<summary>Views</summary>

Run the command:
```bash
php artisan vendor:publish --tag="{{package}}-views"
```
</details>

## Usage

Follow the next examples to know how to use the package

<!--DELETE-->
**Write** your own explanation and examples here...
<!--/DELETE-->

## Testing

Run the command:
```bash
vendor/bin/pest
```

---
## License

**{{PACKAGE}}** is open-sourced software licensed under the [**MIT License**](./LICENSE.md).
