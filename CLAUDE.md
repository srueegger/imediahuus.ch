# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a PHP website for iMediahuus Basel, a mobile phone repair and trading business. The site uses modern PHP with a custom lightweight framework, along with vanilla CSS and JavaScript.

## Architecture & Structure

- **PHP Website**: Modern PHP with custom lightweight framework
- **Clean URL Structure**: 
  - `/` - Main homepage with services overview
  - `/reparaturen` - Repair services page
  - `/ankauf-verkauf` - Buy/sell page with toggle functionality
- **File Organization**:
  - `index.php` - Main router and entry point
  - `includes/` - Configuration, functions, and template
  - `pages/` - Individual page content
  - `styles.css` - Single comprehensive stylesheet
  - `script.js` - JavaScript for navigation, animations, and interactions
  - `.htaccess` - URL rewriting and security headers

## Development Workflow

### Development Commands
- **Local Server**: `php -S localhost:8000` (built-in PHP server)
- **Syntax Check**: `php -l index.php` (check PHP syntax)
- **No Build Process**: Changes are immediately visible on page refresh

### Requirements
- PHP 7.4+ (compatible with PHP 8.x)
- Apache with mod_rewrite (for production)
- No database or external dependencies required

### Testing
- Manual testing in browsers
- No automated test suite present
- Responsive design testing across mobile/desktop

## Code Conventions

### PHP Structure
- **MVC-like Architecture**: Router, templates, and page content separation
- **Security**: XSS protection via `htmlspecialchars()` escaping
- **Clean URLs**: SEO-friendly routes without file extensions
- **DRY Principle**: Shared navigation, footer, and configuration

### HTML Output
- German language content (`lang="de"`)
- Semantic HTML5 structure
- Consistent navigation structure across all pages
- Mobile-first responsive design

### CSS Organization
- Single stylesheet approach in `styles.css`
- Component-based class naming (e.g., `.hero`, `.service-card`, `.repair-grid`)
- Mobile-responsive with `@media (max-width: 768px)` breakpoint
- CSS Grid and Flexbox for layouts
- Consistent color scheme using green brand colors (`#9ee058`, `#7bb843`)

### JavaScript Functionality
- Vanilla JavaScript only
- Smooth scrolling navigation
- Responsive hamburger menu for mobile
- Intersection Observer for scroll animations
- Toggle functionality for buy/sell sections
- No external dependencies or frameworks
- Works identically with PHP routing

## Key Features

### Navigation
- Fixed navbar with mobile hamburger menu
- Smooth scrolling between sections
- Active section highlighting

### Animations
- Scroll-triggered animations using Intersection Observer
- Card hover effects and transitions
- Mobile menu animations

### Responsive Design
- Mobile-first approach
- Hamburger menu for mobile navigation
- Responsive grids that stack on mobile
- Touch-friendly button sizes

## Business Context

- **Company**: iMediahuus Basel (20 years in business)
- **Services**: Mobile phone repairs, buying/selling used phones
- **Location**: Basel, Switzerland
- **Target Audience**: German-speaking customers in Basel area
- **Brand Colors**: Green theme (#9ee058, #7bb843) with dark accents

## Content Management

- All content is hardcoded in HTML
- German language throughout
- Price information embedded in HTML
- Contact information consistent across all pages:
  - Address: Güterstrasse 249, 4053 Basel
  - Phone: 061 554 16 00
  - Hours: Mo-Do: 10:00-19:00, Fr: 10:00-13:00/15:00-19:00, Sa: 10:00-18:00

## Deployment

This PHP site can be deployed to any web server with PHP support:

1. Upload all files to web server
2. Ensure Apache has mod_rewrite enabled
3. Configure virtual host or upload to document root
4. No database setup required

**Requirements**: PHP 7.4+, Apache with mod_rewrite
- immer die JS und CSS Versionierung ändern, wenn an JS oder CSS etwas angepasst wird