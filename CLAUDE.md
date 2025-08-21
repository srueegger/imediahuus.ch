# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a static website for iMediahouse Basel, a mobile phone repair and trading business. The site is built with vanilla HTML, CSS, and JavaScript - no build tools or frameworks are used.

## Architecture & Structure

- **Static Website**: Pure HTML/CSS/JavaScript with no build process
- **Multi-page Structure**: 
  - `index.html` - Main homepage with services overview
  - `reparaturen.html` - Repair services page
  - `ankauf-verkauf.html` - Buy/sell page with toggle functionality
- **Shared Resources**:
  - `styles.css` - Single comprehensive stylesheet for all pages
  - `script.js` - Shared JavaScript for navigation, animations, and interactions

## Development Workflow

### No Build Commands
This project uses no build tools, package managers, or compilation steps. Files are served directly.

### Local Development
- Open HTML files directly in browser or use a simple HTTP server
- Changes to CSS/JS are immediately visible on page refresh
- No installation or setup required

### Testing
- Manual testing in browsers
- No automated test suite present
- Responsive design testing across mobile/desktop

## Code Conventions

### HTML Structure
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

- **Company**: iMediahouse Basel (20 years in business)
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
  - Hours: Mo-Do: 10:00-19:00, Fr: 10:00-12:00/14:00-19:00, Sa: 10:00-18:00

## Deployment

This is a static site that can be deployed to any web server by uploading the files directly. No server-side processing required.