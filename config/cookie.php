<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Cookie Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور cookie — همهٔ کلیدهای مستندشده در `docs/03-engines/cookie.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/cookie.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('COOKIE_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('COOKIE_PREFIX', 'cookie:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('COOKIE_LOG_CHANNEL', 'cookie'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Cookie',
        'accessor' => 'cookie',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];