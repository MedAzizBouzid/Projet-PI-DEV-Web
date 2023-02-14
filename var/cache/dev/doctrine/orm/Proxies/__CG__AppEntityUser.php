<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\Persistence\Proxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
        __clone as private __doClone;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'etat' => [parent::class, 'etat', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'img' => [parent::class, 'img', null],
        "\0".parent::class."\0".'nom' => [parent::class, 'nom', null],
        "\0".parent::class."\0".'numTel' => [parent::class, 'numTel', null],
        "\0".parent::class."\0".'paniers' => [parent::class, 'paniers', null],
        "\0".parent::class."\0".'prenom' => [parent::class, 'prenom', null],
        "\0".parent::class."\0".'pwd' => [parent::class, 'pwd', null],
        "\0".parent::class."\0".'role' => [parent::class, 'role', null],
        "\0".parent::class."\0".'userName' => [parent::class, 'userName', null],
        'email' => [parent::class, 'email', null],
        'etat' => [parent::class, 'etat', null],
        'id' => [parent::class, 'id', null],
        'img' => [parent::class, 'img', null],
        'nom' => [parent::class, 'nom', null],
        'numTel' => [parent::class, 'numTel', null],
        'paniers' => [parent::class, 'paniers', null],
        'prenom' => [parent::class, 'prenom', null],
        'pwd' => [parent::class, 'pwd', null],
        'role' => [parent::class, 'role', null],
        'userName' => [parent::class, 'userName', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
            '__isCloning' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __clone()
    {
        $this->__isCloning = true;

        try {
            $this->__doClone();
        } finally {
            $this->__isCloning = false;
        }
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
