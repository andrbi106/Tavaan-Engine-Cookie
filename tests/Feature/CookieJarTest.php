<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http\Cookie\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Http\Cookie\CookieJar;
use Tavaan\Engine\Http\Cookie\CookieJarServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور CookieJar.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class CookieJarTest extends TestCase
{
    private CookieJar $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new CookieJar($config);
    }

    /**
     * T-01: make/queue → Set-Cookie در پاسخ
     */
    public function test_t01_makequeue__set_cookie__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: encrypt/decrypt roundtrip
     */
    public function test_t02_encryptdecrypt_roundtrip(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: کوکی دستکاری‌شده → null
     */
    public function test_t03____null(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: HttpOnly/Secure/SameSite پیش‌فرض
     */
    public function test_t04_http_only_secure_same_site_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: forget → expire گذشته
     */
    public function test_t05_forget__expire_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: `except` برای کوکی‌های خاص
     */
    public function test_t06_except___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

}