# Adminer Panel for Laravel

Bu Laravel paketi, projene Adminer'ı güvenli bir şekilde entegre eder. 
Adminer sadece `is_admin` middleware'inden geçen kullanıcılar tarafından erişilebilir hale gelir.

---

## 🚀 Kurulum

### 1. `composer.json` dosyana repository'yi ekle:

```json
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/mgakif/adminer-panel-laravel"
  }
],
```

> Paket henüz Packagist'te yayınlanmadığı için Composer'a repo konumunu elle belirtmelisin.

---

### 2. Paketi yükle:

```bash
composer require mgakif/adminer-panel:dev-main
```

---

## 🔐 Güvenlik

Paket, `is_admin` adlı bir middleware kullanır. Yani yalnızca bu middleware'den geçen kullanıcılar `/adminer` rotasına erişebilir.

Senin projende bu middleware örneği şöyle olabilir:

```php
// app/Http/Middleware/IsAdmin.php
public function handle($request, Closure $next)
{
    if (auth()->check() && auth()->user()->is_admin) {
        return $next($request);
    }

    abort(403, 'Bu alan sadece yöneticilere özeldir.');
}
```

Ve kernel'e tanıtman gerekir:

```php
// app/Http/Kernel.php
'is_admin' => \App\Http\Middleware\IsAdmin::class,
```

---

## 📍 Rota

Adminer'a şu adresten erişilir:

```
/adminer
```

---

## 📦 Yayınlama

İleride bu paketi Packagist'e göndermek istersen:

1. GitHub reposunu public yap.
2. https://packagist.org/packages/submit adresinden submit et.

---

## 📃 Lisans

[MIT](LICENSE)
