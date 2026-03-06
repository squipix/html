# Migration Guide: LaravelCollective/html → Squipix/html

This guide helps you migrate your Laravel project from the retired `collective/html` package to the new `squipix/html` drop-in replacement.

---

## 1. Update Composer Dependency

Replace the old package with the new one:

```
composer remove laravelcollective/html
composer require squipix/html
```

---

## 2. Update Service Provider

**Before:**
```
Collective\Html\HtmlServiceProvider::class,
```
**After:**
```
Squipix\Html\HtmlServiceProvider::class,
```

---

## 3. Update Aliases

**Before:**
```
'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class,
```
**After:**
```
'Form' => Squipix\Html\FormFacade::class,
'Html' => Squipix\Html\HtmlFacade::class,
```

---

## 4. Update Namespaces (if needed)

If you reference classes directly, update:

- `Collective\Html\...` → `Squipix\Html\...`

---

## 5. No Code Changes Required

All APIs and Blade directives remain identical. You can continue using:

- `Form::open()`, `Form::text()`, `Html::link()`, etc.

---

## 6. Test Your Application

Run your tests and verify everything works as before.

---

## 7. Questions?

See the [README](readme.md) for more details or open an issue on the [GitHub repo](https://github.com/squipix/html).

---

**Enjoy modern Laravel HTML and Form support!**