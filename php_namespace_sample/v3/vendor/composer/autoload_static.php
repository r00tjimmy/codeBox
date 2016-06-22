<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2c9c3d4c9bd290f07ab6025df8c781c
{
    public static $classMap = array (
        'Board\\Article' => __DIR__ . '/../..' . '/my_lib/BoardArticle.php',
        'Forum\\Article' => __DIR__ . '/../..' . '/my_lib/ForumArticle.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf2c9c3d4c9bd290f07ab6025df8c781c::$classMap;

        }, null, ClassLoader::class);
    }
}
