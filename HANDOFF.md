# Handoff Documentation

## Session Summary
- Established GitHub Actions automated deployment workflow (`.github/workflows/deploy.yml`) resolving remote deployment friction to Hetzner by leveraging repository secrets.
- Overhauled and consolidated the dashboard UI and System Tray into `index.html`.
- Verified live web domains (`unitedbeats.org`, `unitedbeats.net`, `unitedbeats.site`), confirming AdSense script and `ads.txt` presence and status 200 responses.
- Completed full governance documentation suite aligned with autonomous development standards.

## Key Files
- `.github/workflows/deploy.yml`: GitHub Actions pipeline for Hetzner deployment.
- `index.html`: Main single-page application with canvas visuals, audio stream, and Operations Hub.
- `deploy.sh`: Shell deployment script for manual execution.
- `VERSION.md`: Global version identifier (`1.1.0`).
- `DEPLOY.md`: Deployment reference and secrets configuration guide.
