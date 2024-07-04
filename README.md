<!--TODO: Add logo-->
<p align="center">
    <img width="800" src="https://banners.beyondco.de/{{Package}}.png?theme=light&packageManager=composer+require&packageName={{vendor}}%2F{{package}}&pattern=architect&style=style_2&description={{description}}&md=1&showWatermark=1&fontSize=180px&images=archive&widths=400&heights=400" alt="Filament Plugin Art">
</p>

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

**{{Package}}** is open-sourced software licensed under the [**MIT License**](./LICENSE.md).
