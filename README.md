# Dynamic translations for PyroCMS V3

This module provides fast dynamic translations with the help of Laravel Translator.

Translation items are stored in the database, but are loaded once at the boot level.
Just a few extra queries and thats it.

## Installation

`composer require keevitaja/translations-module dev-master`

Next in PyroCMS control panel (admin section) navigate to addons/modules and install the module.

Now you should have Translations menu item.

## Usage

To start using the module, you must first create a new Bundle. It is like a translations group. 
Next create a new Translatable. Each Translatable must have a Bundle.

![Bundles](https://raw.githubusercontent.com/keevitaja/translations-module/master/screenshots/bundles.png)
![Translatables](https://raw.githubusercontent.com/keevitaja/translations-module/master/screenshots/translatables.png)

In your twig templates you can use the `trans` twig method:

```
{{ trans('pages.test', {'name': 'Britney Spears'}) }}
```

In the example above `pages` is the bundle slug and `test` is the translatable slug.

For backend usage see Laravels docs:

https://laravel.com/docs/master/localization

## What else?

Pyro rocks!
