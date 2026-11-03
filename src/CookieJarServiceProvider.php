<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http\Cookie;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Http\Cookie\Contracts\CookieJarInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * CookieJarServiceProvider — ثبت سرویس‌های موتور CookieJar.
 */
final class CookieJarServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(CookieJarInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new CookieJar($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('cookie', $this->app->get(CookieJarInterface::class));

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            CookieJarInterface::class,
            'cookie',
        ];
    }
}