# 🚀 iMediahuus Basel - PHP Version

> **Moderne PHP-Implementierung der iMediahuus Website**

## 🏗️ Architektur

Diese PHP-Version verwendet einen **sauberen, modernen Ansatz**:

### ✨ Features
- **Clean URLs** mit `.htaccess` Routing (`/reparaturen`, `/ankauf-verkauf`)
- **Template System** mit wiederverwendbaren Komponenten
- **Zentrale Konfiguration** für einfache Wartung
- **Security Headers** und Performance-Optimierungen
- **Escaping** für XSS-Schutz
- **Responsive Design** (gleicher CSS/JS wie HTML Version)

### 📁 Struktur
```
├── index.php              # Main router
├── .htaccess              # URL rewriting & security
├── includes/
│   ├── config.php         # Site configuration
│   ├── functions.php      # Helper functions
│   └── template.php       # Main template
├── pages/
│   ├── home.php           # Homepage content
│   ├── reparaturen.php    # Repairs page content
│   └── ankauf-verkauf.php # Buy/sell page content
└── assets/ (unchanged)
    ├── styles.css
    └── script.js
```

## 🔧 Development

### Requirements
- PHP 7.4+ (works with PHP 8.x)
- Apache with mod_rewrite
- No database required
- No Composer dependencies

### Local Testing
```bash
# Built-in PHP server
php -S localhost:8000

# Or with Apache
# Copy files to htdocs/www directory
```

### URLs
- `/` → Homepage
- `/reparaturen` → Repairs page  
- `/ankauf-verkauf` → Buy/sell page

## 🛡️ Security Features

- **XSS Protection** via `htmlspecialchars()` escaping
- **Security Headers** in `.htaccess`
- **Input Validation** for routing
- **No Direct File Access** to includes/

## 🎯 Advantages over HTML Version

1. **DRY Principle** - No duplicate navigation/footer code
2. **Easy Maintenance** - Change contact info in one place
3. **Clean URLs** - SEO-friendly `/reparaturen` instead of `/reparaturen.html`
4. **Security** - Server-side rendering prevents certain attacks
5. **Extensibility** - Easy to add forms, dynamic content later

## 🚀 Deployment

1. Upload all files to web server
2. Ensure `.htaccess` is supported
3. No additional setup required

**That's it!** The site will work immediately with clean URLs and modern PHP architecture.

## 🔄 Migration from HTML

The PHP version maintains 100% visual compatibility with the original HTML version while adding the benefits of server-side rendering and better code organization.