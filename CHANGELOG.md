# Changelog

All notable changes to UnitedBeats are documented in this file. Version numbers follow Semantic Versioning and are tied to `VERSION.md`.

## [1.4.0] - 2026-11-14
### Added
- WordPress installed on Hetzner (/var/www/unitedbeats): homepage preserved exactly (legacy theme from index.html), posts below the fold, project pages + Primary menu for HyperNexus, TormentNexus, FWBer, Real Estate CRM, Bobs Game, BobMani/HymnMania, Marketing Agent, BobCoin, HyperNexus GTM, About. Theme source in wordpress-theme/unitedbeats. Pre-WP backup on server: /root/backups/unitedbeats-pre-wp-20261114.tgz.

## [1.3.1] - 2026-11-13
### Fixed
- Corrected surname spelling Korlous -> Kourlos (Harry Kourlos, Lumbros Kourlos) in the souls list and README; no Korlous instances remain.
### Added
- Agathi added to the souls list (79 souls total; counts updated in subtitle, Souls tab, and Detroit Souls Registry).

## [1.3.0] - 2026-11-13
### Changed
- Page background is now the United Beats Corporation building photo from ~/Downloads (`bg-building.jpg`, optimized 1254x1254 JPEG), darkened 42% for legibility; canvas animation renders transparent over it (stars/nebula/supernovae overlay the building).

## [1.2.0] - 2026-11-04
### Added
- Consolidated Operations Hub overlay in `index.html` featuring tabbed categorization: Physics & Visuals, Souls (63), Audio, Ecosystem, and Deploy telemetry.
- Persistent System Tray icon with interactive quick-action menu (supernova burst, hub toggle, quick mute, server state toggle).
- Comprehensive tooltip markers (`?` icon) with descriptions for every control element.
- Dynamic search filter and constellation selector for all 63 Detroit collective soul names.
- Keyboard shortcut system (`Tab` for Hub, `M` for audio mute, `Space` for supernova, `Esc` for modal exit).
- Automated GitHub Actions deployment pipeline (`.github/workflows/deploy.yml`) for push-to-deploy to Hetzner.

## [1.1.0] - 2026-11-04
### Added
- AdSense publisher verification and `ads.txt` synchronization.
- Initial governance documentation suite.
