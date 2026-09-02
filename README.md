# Seyoung Industry Website

Seyoung Industry / 세영인더스트리 공식 홈페이지 저장소입니다.

- Live: https://www.seyoungi.com/
- Type: static single-page website
- Hosting: Synology NAS Web Station
- Domain: Gabia DNS + Synology HTTPS certificate
- Main language: English

## Purpose

해외 고객에게 Seyoung Industry의 플랜트 제작 역량을 보여주기 위한 회사 소개형 홈페이지입니다. 별도 백엔드 서버 없이 정적 HTML/CSS/JavaScript 파일만으로 운영되며, NAS의 `web` 공유 폴더에 바로 배포할 수 있도록 구성했습니다.

## Technical Summary

- `index.html` 하나를 중심으로 구성된 정적 사이트
- `css/style.css`, `js/main.js`만 사용하는 가벼운 구조
- Synology Web Station에서 직접 서비스 가능
- PHP, DB, Node 서버, 빌드 과정 없음
- `.htaccess`로 HTTP 및 non-www 주소를 canonical URL로 정리
- `robots.txt`, `sitemap.xml`, canonical meta, Open Graph, JSON-LD 적용
- GitHub는 운영 파일 백업 및 변경 이력 관리 용도

## File Structure

```text
index.html      Main homepage
css/style.css   Styles
js/main.js      UI interaction
img/            Site images and favicon assets
.htaccess       HTTPS / www redirect rule
robots.txt      Search crawler guide
sitemap.xml     Search engine sitemap
```

## Current Homepage Content

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
- Contact information with Google Maps, tel/fax and email links

## SEO Focus

Primary title:

```text
Seyoung Industry / 세영인더스트리
```

Main search direction:

- Seyoung
- Seyoung Industry
- industrial heater
- fired heater
- plant fabrication
- chemical process plant
- refinery equipment
- welding
- inspection and testing
- field service
- packing and delivery
- 세영인더스트리
- 전인동
- 플렌트
- 화학공정

## Deployment

Synology Web Station에서 `web` 공유 폴더를 문서 루트로 지정해 사용합니다.

Recommended host setup:

```text
www.seyoungi.com   80 / 443   -> web
seyoungi.com       80 / 443   -> web
```

Recommended public result:

```text
https://www.seyoungi.com/      200 OK
http://www.seyoungi.com/       301 -> https://www.seyoungi.com/
http://seyoungi.com/           301 -> https://www.seyoungi.com/
https://seyoungi.com/          valid certificate, then canonical redirect
```

## Development Notes

Previous development notes:

- https://app.notion.com/p/eec5a67a8f354be9b1a55d44f0678212

2026 refresh summary:

- Rebuilt the old template site into a clean static company homepage
- Removed unused PHP mailer, template libraries and unused assets
- Reworked the content for international customers
- Added service cards, project references, company references and contact links
- Added SEO files and canonical redirect settings for Google/Naver indexing

## Maintenance

For normal updates, edit the static files directly, update `sitemap.xml` when the public page changes, push to GitHub, then copy the same files to the Synology `web` folder.
