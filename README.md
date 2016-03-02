[![Build Status](https://travis-ci.org/t4web/Filesystem.svg?branch=master)](https://travis-ci.org/t4web/Filesystem)
[![codecov.io](http://codecov.io/github/t4web/Filesystem/coverage.svg?branch=master)](http://codecov.io/github/t4web/Filesystem?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/t4web/Filesystem/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/t4web/Filesystem/?branch=master)

# Filesystem

Wrapper over filesystem PHP functions. Extend [Symfony/Filesystem](https://github.com/symfony/filesystem).

```php
<?php

use T4web\Filesystem\Filesystem;

$filesystem = new Filesystem();

$filesystem->isWritable($filename);

$filesystem->isDir($filename);

$filesystem->put($filename, $data, $flags = FILE_APPEND);

$filesystem->copy($originFile, $targetFile, $override = false);

$filesystem->mkdir($dirs, $mode = 0777);

$filesystem->touch($files, $time = null, $atime = null);

$filesystem->remove($files);

$filesystem->exists($files);

$filesystem->chmod($files, $mode, $umask = 0000, $recursive = false);

$filesystem->chown($files, $user, $recursive = false);

$filesystem->chgrp($files, $group, $recursive = false);

$filesystem->rename($origin, $target);

$filesystem->isReadable($filename);

$filesystem->symlink($originDir, $targetDir, $copyOnWindows = false);

$filesystem->makePathRelative($endPath, $startPath);

$filesystem->mirror($originDir, $targetDir, \Traversable $iterator = null, $options = array());

$filesystem->isAbsolutePath($file);

$filesystem->tempnam($dir, $prefix);

$filesystem->dumpFile($filename, $content);

```

# Installation

Add this project in your composer.json:

```json
"require": {
    "t4web/filesystem": "~1.0.0"
}
```

Now tell composer to download Filesystem by running the command:

```bash
$ php composer.phar update
```
