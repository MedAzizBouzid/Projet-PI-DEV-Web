<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerP00u8QY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerP00u8QY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerP00u8QY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerP00u8QY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerP00u8QY\App_KernelDevDebugContainer([
    'container.build_hash' => 'P00u8QY',
    'container.build_id' => '02c9ab6c',
    'container.build_time' => 1676411739,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerP00u8QY');
