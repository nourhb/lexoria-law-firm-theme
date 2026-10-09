# Lexoria — Law Firm Block Theme

**Lexoria** is a prestigious WordPress block theme built for law firms and attorneys. Deep charcoal and gold design, consultation hero, practice area grids, case result stats, attorney profiles, client testimonials, FAQ accordion and free consultation CTAs — everything a modern firm needs to win clients online.

- **Author:** Nour El Houda Bouajila
- **Portfolio:** https://nour-el-houda-bouajila.rf.gd/
- **GitHub:** https://github.com/Nourhb
- **LinkedIn:** https://www.linkedin.com/in/nour-el-houda-bouajila
- **Version:** 1.0.0 · **License:** GPL-2.0-or-later · **Requires:** WordPress 6.4+, PHP 7.4+

## Features

- **Full Site Editing** — edit headers, footers, templates and every pixel with the block editor
- **Complete theme.json design system** — charcoal/gold/parchment palette, Playfair Display serif + Inter sans, fluid type scale, spacing scale, card shadows
- **10 hand-built block patterns** — consultation hero, practice areas grid, animated stats band, attorneys team, testimonials, case results, FAQ accordion, consultation CTA, contact info, journal cards
- **"Burgundy" style variation** — one-click rich alternative (burgundy + brass gold on ivory)
- **Multipage templates** — front page, practice areas, attorneys, about, contact (with form layout + map area), standard/wide pages, single, archive, 404, search
- **Motion with manners** — scroll reveals, animated stat counters, back-to-top button; all disabled under `prefers-reduced-motion`
- **Accessibility** — skip link, visible gold focus states, semantic landmarks, keyboard-friendly navigation
- **Translation-ready** — `lexoria` text domain, `/languages` directory

## Installation

1. Download or clone this repository.
2. Copy the `lexoria-law-firm-theme` folder into `wp-content/themes/` (rename the folder to `lexoria` if you like).
3. In WordPress, go to **Appearance → Themes** and activate **Lexoria**.
4. Open **Appearance → Editor** to customize templates, or insert any **Lexoria** pattern from the block inserter.

No plugins required. Fonts (Playfair Display + Inter) are bundled locally; the theme works fully offline.

## Pattern catalog

| Pattern | Slug | What it is |
|---|---|---|
| Hero with free consultation CTA | `lexoria/hero-consultation` | Full-width cover hero + dual CTAs + trust row |
| Practice areas grid | `lexoria/practice-areas-grid` | 6 practice cards with icons |
| Stats band | `lexoria/stats-band` | Animated counters (cases won, recovered, years, outcomes) |
| Attorneys team | `lexoria/attorneys-team` | 4 attorney profiles with portraits and bios |
| Client testimonials | `lexoria/testimonials` | 3 review cards with star ratings |
| Notable case results | `lexoria/case-results` | Lady Justice photo + outcome list |
| Frequently asked questions | `lexoria/faq` | 6-question accordion (details blocks) |
| Free consultation CTA banner | `lexoria/cta-consultation` | Charcoal banner with dual CTAs |
| Contact information columns | `lexoria/contact-info` | Handshake photo + office/contact/hours |
| Latest from the legal journal | `lexoria/blog-latest` | 3 article cards with photos |

## Customization

- **Colors & fonts:** everything flows from `theme.json` — tweak the palette, type scale or spacing there.
- **Style variation:** switch to the **Burgundy** style from the Site Editor's Styles panel.
- **Block styles:** Gold Outline (button), Attorney Card (group), Soft Frame (image), Gold Rule (heading).
- **Front-end script:** `assets/js/theme.js` handles scroll reveals, animated counters and the back-to-top button — vanilla JS, no dependencies.

## Bundled photography

13 real photos ship in `assets/images/` (Unsplash License): grand law library hero, gavel close-up, Lady Justice statue, 4 attorney portraits, client handshake, bookshelf wall, document signing, boardroom, downtown towers, and antique law books.

## Page templates

Assign these from the Page editor's Template picker:

- **Practice Areas** (`page-practice-areas`) — hero, practice grid, FAQ, consultation CTA
- **Attorneys** (`page-attorneys`) — team, stats, consultation CTA
- **About** (`page-about`) — firm story, values, stats, consultation CTA
- **Contact** (`page-contact`) — consultation form layout, office details, map area
- **Wide** (`page-wide`) — full-width content canvas

## Changelog

### 1.0.0
- Initial release: 12 templates, 2 template parts, 10 block patterns, Burgundy style variation, theme.js interactions, 13 bundled photos, full a11y pass.

## License

GNU General Public License v2 or later — see `LICENSE`.
