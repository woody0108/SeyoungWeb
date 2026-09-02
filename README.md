# Seyoung Industry Website

Seyoung Industry / 세영인더스트리 공식 홈페이지 정적 웹사이트입니다.

- Production URL: https://www.seyoungi.com/
- Canonical URL: https://www.seyoungi.com/
- Company: Seyoung Industry Co., Ltd.
- Main language: English
- Korean SEO keywords: 세영인더스트리, 전인동, 플렌트, 화학공정

## Overview

This site presents Seyoung Industry as a fabrication and field-support partner for industrial heater and plant projects. The current version is optimized for overseas business inquiries, with English-first copy, project references, service cards, contact links and basic search-indexing metadata.

## Site Structure

```text
.
├── index.html          # Main single-page website
├── css/style.css       # Site styling
├── js/main.js          # Navigation, reveal effects and service-card interaction
├── img/                # Hero, about and capability images
├── .htaccess           # Apache redirect rules for HTTPS + www canonical host
├── robots.txt          # Search crawler policy
├── sitemap.xml         # Canonical sitemap for Google/Naver submission
└── favicon.ico         # Browser favicon
```

## Main Sections

- Home: company positioning and primary call-to-action
- About: company summary, CEO, incorporation and business registration information
- Products & Services: six capability cards
  - Engineering Support
  - Manufacturing
  - Welding
  - Inspection & Testing
  - Field Service & Maintenance
  - Packing & Delivery
- Project Experience: selected domestic and global project references
- Global References: major company reference list
- Contact: company location, telephone/fax and role-based email links

## Current SEO Setup

The homepage includes:

- Compact bilingual page title: `Seyoung Industry / 세영인더스트리`
- Canonical URL: `https://www.seyoungi.com/`
- English-focused meta description and keyword list
- Limited Korean search keywords for brand and business discovery
- Open Graph and Twitter metadata
- JSON-LD `Organization` / `LocalBusiness` structured data
- `robots.txt` pointing to `https://www.seyoungi.com/sitemap.xml`
- `sitemap.xml` with the canonical homepage URL

## Redirect Policy

The preferred public address is:

```text
https://www.seyoungi.com/
```

The `.htaccess` file redirects HTTP and non-www traffic to the canonical HTTPS www host:

```apache
RewriteEngine On
RewriteCond %{HTTPS} !=on [OR]
RewriteCond %{HTTP_HOST} !^www\.seyoungi\.com$ [NC]
RewriteRule ^ https://www.seyoungi.com%{REQUEST_URI} [L,R=301]
```

When hosting on Synology Web Station, make sure both virtual hosts are configured and assigned to valid certificates:

- `www.seyoungi.com` on ports `80 / 443`
- `seyoungi.com` on ports `80 / 443`

Both should resolve cleanly to the same `web` document root, with the final public result landing on `https://www.seyoungi.com/`.

## Development History

Earlier development notes were maintained in Notion:

- https://app.notion.com/p/eec5a67a8f354be9b1a55d44f0678212

The current repository history shows the site originally started from a template-style company website and later went through several update commits. In the 2026 refresh, the project was rebuilt into a smaller, cleaner static homepage suitable for direct NAS hosting and search indexing.

## 2026 Website Refresh

Major improvements from the recent rebuild:

- Replaced the old template-heavy site with a focused static homepage
- Removed unused PHP mail handling, PHPMailer, template libraries, SCSS sources and unused image assets
- Converted the site to English-first company presentation for international customers
- Added service/capability content based on Seyoung Industry's real work areas
- Added six image-backed Products & Services cards with click interaction
- Updated project references and major company references
- Added role-based contact email links
- Added company location with Google Maps target link
- Added telephone and fax information
- Added canonical URL, sitemap, robots file and search metadata
- Added HTTPS/www redirect rules for production hosting

## Search Indexing Notes

After deployment, submit or inspect these URLs in Google Search Console and Naver Search Advisor:

```text
https://www.seyoungi.com/
https://www.seyoungi.com/sitemap.xml
```

For Google, request indexing for the canonical homepage after confirming the live URL test passes. Old indexed results may take time to disappear after Google recrawls the domain and follows the 301 redirects.

## Deployment Notes

This is a static site. For Synology NAS deployment, upload the contents of this repository to the Web Station document root, usually the `web` shared folder.

Recommended production checks:

```text
https://www.seyoungi.com/      -> 200 OK
http://www.seyoungi.com/       -> 301 to https://www.seyoungi.com/
http://seyoungi.com/           -> 301 to https://www.seyoungi.com/
https://seyoungi.com/          -> 301 to https://www.seyoungi.com/ or valid HTTPS response before redirect
```

## Maintenance

When updating the site:

1. Edit `index.html`, `css/style.css`, `js/main.js` or images as needed.
2. Keep Korean visible text limited unless the site is intentionally changed to bilingual content.
3. Update `sitemap.xml` `lastmod` when publishing meaningful page changes.
4. Confirm all local image, CSS and JS references still exist.
5. Push changes to GitHub and redeploy to the NAS web root.
