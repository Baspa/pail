<?php

namespace Laravel\Pail\ValueObjects\Origin;

class Http
{
    /**
     * Creates a new instance of the http origin.
     */
    public function __construct(
        public string $method,
        public string $path,
        public ?string $authId,
    ) {
        //
    }

    /**
     * Creates a new instance of the http origin from the given json string.
     *
     * @param  array{method: string, path: string, auth_id: string}  $array
     */
    public static function fromArray(array $array): self
    {
        ['method' => $method, 'path' => $path, 'auth_id' => $authId] = $array;

        return new static($method, $path, (string) $authId);

    }
}
