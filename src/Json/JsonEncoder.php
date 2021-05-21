<?php

declare(strict_types=1);

namespace Fschmtt\Keycloak\Json;

use Fschmtt\Keycloak\Exception\JsonDecodeException;
use Fschmtt\Keycloak\Exception\JsonEncodeException;
use JsonException;

class JsonEncoder
{
    /**
     * @throws JsonDecodeException
     */
    public function encode(mixed $data): string
    {
        try {
            return json_encode(value: $data, flags: JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            throw new JsonEncodeException(previous: $e);
        }
    }
}
