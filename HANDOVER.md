# Handover — Brentabau homepage header & hero

**Date:** 2026-10-13
**Theme:** `brentabau/app/public/wp-content/themes/wp-config.php` (text domain `brenta`, Bootstrap 5 + SASS + Laravel Mix)
**Live (password-protected):** https://brentabau.yournewwebsite.ch
**Repo:** https://github.com/DIG-ID/brentabau (`main`)
**Theme version:** 1.1 (bumped from 1.0 so the cached `main.css` / `main.js` get replaced)

## Status

- All changes are committed (`a077dc5`, `e14fe02`, `aaf3c3e`). Local `main` matches `origin/main`.
- **Still to do:** deploy to the live server and clear the cache ("Website-Cache leeren"). The repo has no automatic deploy. Files to upload:
  - `style.css`
  - `template-parts/home/section-intro.php`
  - `dist/main.css`
  - `dist/main.js`
- **Not yet confirmed in a browser:** the mobile gap fix and the logo/video behaviour. Local wasn't running and the live site returns 401, so nothing was tested visually.

## What changed

### 1. Header branding bar now shows on the homepage (desktop)
Before, on the homepage the dark bar with the logo and socials was hidden: the header was positioned at `top: -95px`, so only the menu showed.

File: `assets/sass/_layout/_main-header.sass`
- `.home.page-template-page-home #main-header`: `top: -95px` → `top: 0`
- Hero offset on desktop: `.section.section-intro { margin-top: 55px }` → `150px` (95px branding bar + 55px nav)
- Logged in (admin bar): `top: 32px`. It was `-63px` on the homepage and `30px` elsewhere.

The homepage nav still uses its own colours (dark grey background, light text). The inner pages use a light grey background with grey text. If the homepage should match, remove the `.navbar` / `.menu-item` overrides in that block.

### 2. Hero logo: visible on the fallback image, hidden while the video plays
File: `template-parts/home/section-intro.php`
- `.section-intro__header_logo` is still in the markup. At first it was commented out, but then Bruno asked to keep it over the fallback image.

File: `assets/js/hero-video.js` (new, imported in `assets/js/main.js`)
- When the video fires `playing`, the script adds `.is-playing` to `.section-intro__image`.

File: `assets/sass/_layout/_homepage.sass`
- `.section-intro__image.is-playing .section-intro__header_logo` fades out (opacity 0.4s, then hidden).
- In these cases the logo stays visible: autoplay is blocked, the video errors, or `prefers-reduced-motion` is on (the video is hidden by CSS).

The logo `src` is built from `wp_upload_dir()['url']`. That only works while "Organize uploads into month/year folders" is off. If that setting is turned on, the image breaks. It would be safer to make it an ACF image field.

### 3. Gap above the hero on tablet/mobile (< 992px)
Cause: on mobile the header is `position: fixed` and the content offset was hard-coded. The homepage used `#main-content` 20px + hero 55px; other pages used 76px. Neither matched the real header height. (An earlier attempt set the 150px desktop margin without a breakpoint, which made the gap much bigger. That's fixed.)

Fix:
- `assets/js/sticky-header.js` writes the real height of `#main-header .site-branding` to the CSS variable `--header-height` on DOM ready, `load` and `resize`.
- `_main-header.sass`, inside `media-breakpoint-down(lg)`:
  - `#main-content { margin-top: var(--header-height, 76px) }` for all pages. The `.home #main-content { margin-top: 20px }` override was removed.
  - Homepage `.section.section-intro { margin-top: 0 }`.
- Admin bar ≤ 782px: header `top: 46px`, matching WP's mobile admin bar height.

Known edge case: under 600px WP lets the admin bar scroll away. Logged-in users may then see a 46px strip above the fixed header after scrolling. Visitors are not affected.

## What to check after deploy

1. Desktop homepage: the dark branding bar (logo + socials) sits above the menu, and nothing covers the hero.
2. Tablet (~768px) and mobile (~390px), logged out / private window: no white gap between the header and the hero.
3. On every screen size, the hero logo is visible at first and fades out once the video starts. With autoplay blocked (e.g. Low Power Mode on iOS), it stays.
4. Inner pages on mobile: content still starts right below the header.

## Notes for the next session

- `git push` from Claude's terminal fails: no GitHub credentials are configured there. Bruno pushes from VS Code or his own terminal.
- Build: `npm run production` (the build reports 4 harmless warnings from child compilations).
- `webpack.mix.js` BrowserSync proxy: `localhost/brentabau`.
