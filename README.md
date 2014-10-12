Yii2-Start site module.
=======================
This module provide frontend functionality for Yii2-Start application.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist vova07/yii2-start-site-module "*"
```

or add

```
"vova07/yii2-start-site-module": "*"
```

to the require section of your `composer.json` file.

Configuration
-------------

Edit `module` section in your backend application config file:

```php
'modules' => [
    'site' => [
        'class' => 'vova07\site\Module'
    ]
]
```