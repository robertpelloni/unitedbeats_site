# UnitedBeats Task Backlog (TODO)

## Active / Immediate
- [x] Configure `.github/workflows/deploy.yml` for automated push-to-deploy to Hetzner.
- [x] Document repository secrets (`HETZNER_HOST`, `HETZNER_SSH_KEY`, `HETZNER_USER`, `HETZNER_PORT`) in `DEPLOY.md`.
- [x] Validate AdSense tag presence across live domains (`unitedbeats.org`, `unitedbeats.net`, `unitedbeats.site`).
- [x] Validate `ads.txt` syntax across all target hostnames.

## Upcoming
- [ ] Add pre-flight domain ping test in GitHub Actions workflow.
- [ ] Add automated lighthouse performance audit step in CI pipeline.
- [ ] Implement WebGL 2 shader pipeline fallback.
