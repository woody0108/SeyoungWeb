# Seyoung Industry Website

Seyoung Industry / 세영인더스트리 공식 홈페이지 저장소입니다.

- Live: https://www.seyoungi.com/
- Type: static single-page website
- Hosting: Synology NAS Web Station
- Domain: Gabia DNS + Synology HTTPS certificate
- Main language: English

## Purpose

해외 고객에게 Seyoung Industry의 플랜트 제작 역량과 주요 프로젝트 경험을 보여주기 위한 회사 소개형 홈페이지입니다. 별도 백엔드 서버 없이 정적 HTML/CSS/JavaScript 파일만으로 구성되어, Synology NAS의 `web` 공유 폴더에서 직접 운영할 수 있습니다.

## Development Period

- Initial development: 2023.05 ~ 2023.06
- Homepage renewal: 2026.07 ~ 2026.08

## Technical Summary

- Single-page static website based on `index.html`
- Lightweight frontend using only HTML, CSS and vanilla JavaScript
- No PHP, database, Node server or build process required
- Direct deployment through Synology Web Station
- GitHub used for source backup and change history
- Domain and HTTPS handled through Gabia DNS and Synology certificate settings
- `.htaccess` used to normalize public access to the primary HTTPS domain

## File Structure

```text
index.html      Main homepage
css/style.css   Styles
js/main.js      UI interaction
img/            Site images and favicon assets
.htaccess       HTTPS / www redirect rule
favicon.ico     Browser favicon
```

## Homepage Content

- Company overview and key facts
- Products & Services
  - Engineering Support
  - Manufacturing
  - Welding
  - Inspection & Testing
  - Field Service & Maintenance
  - Packing & Delivery
- Project Experience
- Global References
- Contact information with map link, tel/fax and email links

## 2026 Renewal Scope

- Rebuilt the old template-based site into a cleaner static homepage
- Removed unused PHP mailer, template libraries and legacy assets
- Reworked the content for international customers
- Added service cards with actual work-category photos
- Updated project experience and major company references
- Added direct contact links by role
- Added company location, telephone and fax information
- Prepared the site for simple NAS-based operation without a separate web server stack

## Deployment

Synology Web Station에서 `web` 공유 폴더를 문서 루트로 지정해 사용합니다.

Recommended host setup:

```text
www.seyoungi.com   80 / 443   -> web
seyoungi.com       80 / 443   -> web
```

Recommended public result:

```text
https://www.seyoungi.com/      Main public URL
http://www.seyoungi.com/       Redirect to HTTPS www
http://seyoungi.com/           Redirect to HTTPS www
https://seyoungi.com/          Valid HTTPS, then redirect to HTTPS www
```

## Development Notes

Previous development notes:

- https://app.notion.com/p/eec5a67a8f354be9b1a55d44f0678212

The current repository keeps only the files required to operate the public homepage. For normal updates, edit the static files, push to GitHub, then copy the same files to the Synology `web` folder.

