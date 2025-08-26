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
- **Responsive Design** mit animiertem SVG Hero
- **SEO-Optimiert** mit Meta-Tags, Structured Data und Favicon
- **Animierte Benutzeroberfläche** mit CSS-Animationen

### 📁 Struktur
```
├── index.php              # Main router
├── .htaccess              # URL rewriting & security
├── favicon.svg            # Modern SVG favicon
├── includes/
│   ├── config.php         # Site configuration & SEO data
│   ├── functions.php      # Helper functions & SEO helpers
│   └── template.php       # Main template with full SEO
├── pages/
│   ├── home.php           # Homepage with animated SVG
│   ├── reparaturen.php    # Repairs page content
│   └── ankauf-verkauf.php # Buy/sell page content
├── styles.css             # Enhanced with SVG animations
└── script.js              # Interactive features
```

## 🔧 Development

### Requirements
- PHP 7.4+ (works with PHP 8.x)
- Apache with mod_rewrite
- No database required
- No Composer dependencies

### Local Testing

#### Option 1: DDEV (Recommended)
```bash
# Start DDEV environment
ddev start

# Access site at https://imediahuus.ddev.site
```

#### Option 2: Built-in PHP server
```bash
# Built-in PHP server
php -S localhost:8000
```

#### Option 3: Apache
```bash
# Copy files to htdocs/www directory
# Ensure mod_rewrite is enabled
```

### URLs
- `/` → Homepage
- `/reparaturen` → Repairs page  
- `/ankauf-verkauf` → Buy/sell page

## 🛡️ Security & SEO Features

### Security
- **XSS Protection** via `htmlspecialchars()` escaping
- **Security Headers** in `.htaccess`
- **Input Validation** for routing
- **No Direct File Access** to includes/

### SEO Optimierung
- **Meta Descriptions** individuell pro Seite
- **Keywords** lokal optimiert für Basel
- **Structured Data** (Local Business Schema)
- **Open Graph** für Social Media
- **Canonical URLs** gegen Duplicate Content
- **SVG Favicon** mit Fallback
- **Google My Business** optimiert

## 🎯 Advantages over HTML Version

1. **DRY Principle** - No duplicate navigation/footer code
2. **Easy Maintenance** - Change contact info in one place
3. **Clean URLs** - SEO-friendly `/reparaturen` instead of `/reparaturen.html`
4. **Security** - Server-side rendering prevents certain attacks
5. **Extensibility** - Easy to add forms, dynamic content later
6. **SEO-Optimiert** - Automatische Meta-Tags und Structured Data
7. **Animationen** - Lebendige SVG-Illustrationen
8. **Professional** - Modern development setup mit DDEV

## 🚀 Deployment

1. Upload all files to web server
2. Ensure `.htaccess` is supported
3. No additional setup required

**That's it!** The site will work immediately with clean URLs and modern PHP architecture.

## 🔄 Migration from HTML

The PHP version maintains 100% visual compatibility with the original HTML version while adding:
- Server-side rendering und bessere Code-Organisation
- Professionelle SEO-Optimierung
- Animierte Benutzeroberfläche
- Modern development workflow mit DDEV

## 🎨 Recent Updates

- ✅ Animiertes SVG Hero auf der Startseite
- ✅ Vollständige SEO-Optimierung aller Seiten
- ✅ Custom SVG Favicon mit iMediahuus Branding
- ✅ DDEV Development Environment Setup
- ✅ Local Business Schema für Google My Business
- ✅ Social Media optimiert (Open Graph, Twitter Cards)