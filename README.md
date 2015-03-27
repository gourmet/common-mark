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
composer require gourmet/common-mark:dev-master
```

You then need to load the plugin. In `boostrap.php`, something like:

```php
\Cake\Core\Plugin::load('Gourmet/CommonMark');
```

## Usage

{{@TODO documentation}}

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
