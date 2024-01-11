# PHP types as objects

[![tests](https://img.shields.io/github/actions/workflow/status/elegant-php/types/release.yml)](https://github.com/elegant-php/types/actions/workflows/release.yml)
[![version](https://img.shields.io/packagist/v/elegant-php/types)](https://packagist.org/packages/elegant-php/types)
[![downloads](https://img.shields.io/packagist/dt/elegant-php/types)](https://packagist.org/packages/elegant-php/types)
[![license](https://img.shields.io/github/license/elegant-php/types)](/LICENSE)

This package provides the ability to work with types as objects.

Available types:

- [x] Integer
- [x] String
- [x] Float
- [x] Boolean
- [x] Array

## Installation

`composer require elegant-php/types`

## Usage

### Use predefined classes and contracts

```php
final class AuthorizedUser implements User
{
  public function __construct(
    private readonly StringType $name
  ) { }
}

$user = new AuthorizedUser(new DefaultString('my user'));
```

### Implement type contracts

```php
final class UserName extends StringType
{
  public function __construct(
    private readonly string $name
  ) { }

  public function value(): string
  {
    return strtolower($this->name);
  }
}
```

### Compare types

```php
$first = new DefaultString('first');
$second = new DefaultString('first');

var_dump($first->equals($second));

// bool(false)
```

### Type casting

```php
$id = new StringAsInteger('123');

var_dump($id->value());

// int(123)
```

---

[Release notes](/CHANGELOG.md)
