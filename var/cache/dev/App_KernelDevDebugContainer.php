<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1V6DZ5R\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1V6DZ5R/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1V6DZ5R.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1V6DZ5R\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1V6DZ5R\App_KernelDevDebugContainer([
    'container.build_hash' => '1V6DZ5R',
    'container.build_id' => '9bc9b85a',
    'container.build_time' => 1676842229,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1V6DZ5R');