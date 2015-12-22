<?php

namespace UglifyJsWrapper;

class Wrapper
{
    /**
     * @deprecated
     *
     * @param $file
     * @param array $options
     *
     * @return string
     */
    public static function execute($file, array $options)
    {
        return self::executeFile($file, $options);
    }

    /**
     * @param $file
     * @param array $options
     *
     * @return string
     */
    public static function executeFile($file, array $options)
    {
        $command = __DIR__ . '/../bin/uglifyjs ' . implode(' ', $options) . ' -- ' . $file;
        return shell_exec($command);
    }

    /**
     * @param $jsString
     * @param array $options
     *
     * @return string
     */
    public static function executeString($jsString, array $options)
    {
        $command = __DIR__ . '/../bin/uglifyjs ' . implode(' ', $options) . ' - ' . $jsString;
        return shell_exec($command);
    }

    /**
     * @param array $files
     * @param array $options
     *
     * @return null|string
     */
    public static function executeFileArray(array $files, array $options)
    {
        $command = __DIR__ . '/../bin/uglifyjs ' . implode(' ', $files) . ' ' . implode(' ', $options);
        return shell_exec($command);
    }

}
