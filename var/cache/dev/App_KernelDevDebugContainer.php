<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHrmhaUL\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHrmhaUL/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHrmhaUL.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHrmhaUL\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHrmhaUL\App_KernelDevDebugContainer([
    'container.build_hash' => 'HrmhaUL',
    'container.build_id' => '3703234c',
    'container.build_time' => 1631180542,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHrmhaUL');
