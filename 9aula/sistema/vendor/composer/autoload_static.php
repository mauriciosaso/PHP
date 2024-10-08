<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b0518cce68c7ffd0f7d85a14dc720cc
{
    public static $classMap = array (
        'Cidade' => __DIR__ . '/../..' . '/sistema/Controller/Cidade.php',
        'Cliente' => __DIR__ . '/../..' . '/sistema/Controller/Cliente.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Conexao' => __DIR__ . '/../..' . '/sistema/Conexao/Conexao.php',
        'Estado' => __DIR__ . '/../..' . '/sistema/Controller/Estado.php',
        'Fornecedor' => __DIR__ . '/../..' . '/sistema/Controller/Fornecedor.php',
        'Funcoes' => __DIR__ . '/../..' . '/sistema/Funcoes/Funcoes.php',
        'Pais' => __DIR__ . '/../..' . '/sistema/Controller/Pais.php',
        'Produto' => __DIR__ . '/../..' . '/sistema/Controller/Produto.php',
        'Usuario' => __DIR__ . '/../..' . '/sistema/Controller/Usuario.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2b0518cce68c7ffd0f7d85a14dc720cc::$classMap;

        }, null, ClassLoader::class);
    }
}
