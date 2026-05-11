<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

final readonly class AccessToken
{
    public string $accessToken;

    public string $tokenType;

    public int $expiresIn;

    public int $createdAt;

    public function __construct(
        string $accessToken,
        string $tokenType = 'Bearer',
        int|string $expiresIn = 0,
        int $createdAt = 0,
    ) {
        $this->accessToken = $accessToken;
        $this->tokenType = $tokenType;
        $this->expiresIn = (int) $expiresIn;
        $this->createdAt = $createdAt > 0 ? $createdAt : time();
    }

    public function authorizationHeader(): string
    {
        return sprintf('%s %s', $this->tokenType, $this->accessToken);
    }

    public function expiresAt(): int
    {
        return $this->createdAt + $this->expiresIn;
    }

    public function isExpired(int $leewaySeconds = 60): bool
    {
        return time() >= ($this->expiresAt() - $leewaySeconds);
    }
}
