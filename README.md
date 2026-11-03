# Tavaan Engine — Cookie

> **کوکی رمزنگاری‌شده** — موتور Cookie در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.cookie` |
| نام | `Cookie` |
| عنوان فارسی | کوکی رمزنگاری‌شده |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Http\Cookie` |
| نوع | `engine` |
| Facade | `Cookie` (accessor: `cookie`) |

## توضیحات

کد در engines/http/src/Cookie (namespace مطابق DOC-042).

## کلاس‌های اصلی

- `src/Cookie.php`

## Service Providerها

- `Tavaan\Engine\Http\Cookie\CookieJarServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `http`
- `crypt`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Cookie.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Cookie`** (این مخزن) | موتور Cookie |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
