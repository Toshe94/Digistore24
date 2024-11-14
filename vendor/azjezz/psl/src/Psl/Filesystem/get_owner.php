<?php

declare(strict_types=1);

namespace Psl\Filesystem;

use Psl;
use Psl\Str;

use function fileowner;

/**
 * Get the owner of $node.
 *
 * @param non-empty-string $node
 *
 * @throws Exception\NotFoundException If $node is not found.
 * @throws Exception\RuntimeException In case of an error.
 */
function get_owner(string $node): int
{
    if (!namespace\exists($node)) {
        throw Exception\NotFoundException::forNode($node);
    }

    [$result, $message] = Psl\Internal\box(static fn(): false|int => fileowner($node));
    if (false === $result) {
        throw new Exception\RuntimeException(Str\format(
            'Failed to retrieve owner of file "%s": %s',
            $node,
            $message ?? 'internal error'
        ));
    }

    return $result;
}
