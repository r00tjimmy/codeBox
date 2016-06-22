<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43508c61da721b981e0148213bd4fc01
{
    public static $classMap = array (
        'Tony\\Discussion\\Board\\Article' => __DIR__ . '/../..' . '/my_lib/Tony/Discussion/board/BoardArticle.php',
        'Tony\\Discussion\\Forum\\Article' => __DIR__ . '/../..' . '/my_lib/Tony/Discussion/forum/ForumArticle.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit43508c61da721b981e0148213bd4fc01::$classMap;

        }, null, ClassLoader::class);
    }
}
