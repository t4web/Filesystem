<?php

namespace T4web\FilesystemTest;

use T4web\Filesystem\Filesystem;

class FilesystemTest extends \PHPUnit_Framework_TestCase
{
    private $filesystem;

    public function setUp()
    {
        $this->filesystem = new Filesystem();
    }

    public function testIsWritable()
    {
        $this->assertFalse($this->filesystem->isWritable('/xxx/yyy'));
    }

    public function testIsDir()
    {
        $this->assertTrue($this->filesystem->isDir(__DIR__));
    }

    public function testPut()
    {
        $file = __DIR__ . '/file.tst';

        if (file_exists($file)) {
            unlink($file);
        }

        $this->filesystem->put($file, 'xxx:yyy');

        $this->assertEquals('xxx:yyy', file_get_contents($file));

        unlink($file);
    }
}
