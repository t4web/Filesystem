<?php

namespace T4web\Filesystem;

use Symfony\Component\Filesystem\Filesystem as BaseFilesystem;

class Filesystem extends BaseFilesystem
{
    /**
     * @param string $filename
     * @return bool
     */
    public function isWritable($filename)
    {
        return is_writable($filename);
    }

    /**
     * @param string $filename
     * @return bool
     */
    public function isDir($filename)
    {
        return is_dir($filename);
    }

    /**
     * @param string $filename
     * @param string $data
     * @param int $flags
     * @return int
     */
    public function put($filename, $data, $flags = FILE_APPEND)
    {
        return file_put_contents($filename, $data, $flags);
    }
}
