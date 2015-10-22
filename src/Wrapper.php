<?php

namespace UglifyJsWrapper;

class Wrapper
{
    public static function execute($file, array $options)
    {
        $command = './../bin/uglifyjs ' . implode(' ', $options) . ' -- ' . $file;

        exec($command, $output, $returnvar);
        var_dump($command, $output, $returnvar);
    }

}