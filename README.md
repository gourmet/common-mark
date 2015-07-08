# CommonMark

[![Build Status](https://travis-ci.org/gourmet/common-mark.svg?branch=master)](https://travis-ci.org/gourmet/common-mark)
[![Total Downloads](https://poser.pugx.org/gourmet/common-mark/downloads.svg)](https://packagist.org/packages/gourmet/common-mark)
[![License](https://poser.pugx.org/gourmet/common-mark/license.svg)](https://packagist.org/packages/gourmet/common-mark)

Adds [CommonMark] support to [CakePHP 3] using the [league/commonmark] package.

## What's included?

- CommonMarkAwareTrait
- CommonMarkHelper
- CommonMarkBehavior *coming soon*

## Install

Using [Composer]:

```
composer require gourmet/common-mark:~1.0
```

You then need to load the plugin. You can use the shell command:

```
bin/cake plugin load Gourmet/CommonMark
```

or by manually adding statement shown below to `boostrap.php`:

```php
Plugin::load('Gourmet/CommonMark');
```

## Usage

The plugin is basically a bridge *disguised* as a trait
[`Gourmet\CommonMark\Utility\CommonMarkAwareTrait`][CommonMarkAwareTrait], so you could
just `use` the trait from anywhere you wish.

To simplify it, both, a behavior and a helper have also been created.

```
// in any table's `initialize()`:
$this->addBehavior('Gourmet/CommonMark.CommonMark');

// in `App\View\AppView` or any view/controller for that matter:
$this->loadHelper('Gourmet/CommonMark.CommonMark');
```

For more, please check the [tests] and the [league/commonmark] library.


## Patches & Features

* Fork
* Mod, fix
* Test - this is important, so it's not unintentionally broken
* Commit - do not mess with license, todo, version, etc. (if you do change any, bump them into commits of
their own that I can ignore when I pull)
* Pull request - bonus point for topic branches

## Bugs & Feedback

http://github.com/gourmet/common-mark/issues

## License

Copyright (c) 2015, Jad Bitar and licensed under [The MIT License][mit].

[CommonMark]:http://commonmark.org
[CakePHP 3]:http://cakephp.org
[league/commonmark]:http://github.com/thephpleague/commonmark
[Composer]:http://getcomposer.org
[mit]:http://www.opensource.org/licenses/mit-license.php
[CommonMarkAwareTrait]:https://github.com/gourmet/common-mark/blob/master/src/Utility/CommonMarkAwareTrait.php
[tests]:https://github.com/gourmet/common-mark/blob/master/tests/TestCase/Utility/CommonMarkAwareTraitTest.php#L31-L62
