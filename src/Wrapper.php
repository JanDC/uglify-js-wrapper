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
        exec($command, $output, $returnvar);
        return current($output);
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
        exec($command, $output, $returnvar);
        return current($output);
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
        exec($command, $output, $returnvar);
        return current($output);
    }
    
}
