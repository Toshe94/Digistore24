<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8dW4OTf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8dW4OTf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8dW4OTf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8dW4OTf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8dW4OTf\App_KernelDevDebugContainer([
    'container.build_hash' => '8dW4OTf',
    'container.build_id' => '4ae45fd5',
    'container.build_time' => 1731599362,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container8dW4OTf');
