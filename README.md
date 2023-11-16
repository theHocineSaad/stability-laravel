![Stability PHP example code.](https://i.imgur.com/E5Sye3i.png "Stability PHP example code.")

Stability Laravel is a Laravel API client offering developers an intuitive and efficient interface to interact seamlessly with the [Stability AI API](https://platform.stability.ai/docs/api-reference "Stability AI API").

> **Note: ** This package is built on top of [Stability PHP.](https://github.com/thehocinesaad/stability-php "Stability PHP.")

## Installation

You can install the package via composer:

```bash
composer require thehocinesaad/stability-laravel
```

Then, add your Stability AI API key to the .env file:

    STABILIY_API_KEY=sk-fuYQ3VpweDSPu...

After that, you can start using it:

```php
$response = Stability::generations()->textToImage(
    'stable-diffusion-xl-1024-v1-0',
    [
        'text_prompts' => [
            [
                'text' => 'A lighthouse on a cliff',
                'weight' => 0.5
            ],
        ],
        'samples' => 1,
    ]
);

dd($response['artifacts'][0]['base64']);
// "iVBORw0KGgoAAAANSUhEUgAABAAAAQACAIAAADwf7zUAAM8MmNhQlgAAzwya..."
//// An image encoded in base64.
```

## Extra headers
You can add additional HTTP headers (which the API supports) to requests by adding them to the .env file:

    STABILIY_ACCEPT_HEADER=image/png
    STABILIY_ORGANIZATION=org-123456
    STABILIY_CLIENT_ID=my-great-plugin
    STABILIY_CLIENT_VERSION=1.2.1

## Usage

Since this package is built on top of [Stability PHP](https://github.com/thehocinesaad/stability-php "Stability PHP"), it has the same usage, so for usage examples, have a look at [Stability PHP Usage](https://github.com/thehocinesaad/stability-php#usage "Stability PHP Usage").

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.