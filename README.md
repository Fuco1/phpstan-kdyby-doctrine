# Kdyby/Doctrine extensions for PHPStan [![Build Status](https://travis-ci.org/Fuco1/phpstan-kdyby-doctrine.svg?branch=master)](https://travis-ci.org/Fuco1/phpstan-kdyby-doctrine)

* [PHPStan](https://github.com/phpstan/phpstan)
* [Kdyby/Doctrine](https://github.com/Kdyby/Doctrine)

This extension provides following features:

* Provides correct return type for `Kdyby\Doctrine\EntityManager::find`, `getReference`,  `getPartialReference` and `getRepository` when `Foo::class` entity class name is provided as the first argument

## Usage

To use this extension, require it in [Composer](https://getcomposer.org/):

```
composer require --dev phpstan/phpstan-kdyby-doctrine
```

And include extension.neon in your project's PHPStan config:

```
includes:
    - vendor/phpstan/phpstan-kdyby-doctrine/extension.neon
```
