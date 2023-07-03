<?php

declare(strict_types=1);

namespace Fschmtt\Keycloak\Collection;

use Fschmtt\Keycloak\Representation\PasswordPolicyType;

/**
 * @codeCoverageIgnore
 * @extends Collection<PasswordPolicyType>
 */
class PasswordPolicyTypeCollection extends Collection
{
    public static function getRepresentationClass(): string
    {
        return PasswordPolicyType::class;
    }
}
