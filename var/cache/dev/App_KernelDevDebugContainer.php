<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLXiS18L\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLXiS18L/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLXiS18L.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLXiS18L\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLXiS18L\App_KernelDevDebugContainer([
    'container.build_hash' => 'LXiS18L',
    'container.build_id' => 'ee2cfffe',
    'container.build_time' => 1703922774,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLXiS18L');
