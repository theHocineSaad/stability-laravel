<?php

declare(strict_types=1);

namespace TheHocineSaad\StabilityLaravel\Exceptions;

use InvalidArgumentException;

/**
 * @internal
 */
final class MissingApiKey extends InvalidArgumentException
{
    public static function exception()
    {
        return new self(
            'The Stability AI API Key is missing, please add it to the .env file: STABILIY_API_KEY=YOUR_API_KEY. You can get it from: https://platform.stability.ai/account/keys'
        );
    }

}
