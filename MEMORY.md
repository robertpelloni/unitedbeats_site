# Memory & Architectural Log

- **Single Page Architecture:** The entire client runs inside `index.html`. All overlays, controls, audio embeds, and particle physics are self-contained.
- **Styling:** CSS variables with gold/amber `#d4af37` aesthetic on `#050508` deep dark space backgrounds.
- **System Tray:** Integrated top right/left status bar featuring a dropdown system tray menu for rapid action execution without opening full modals.
- **CI/CD:** Automated GitHub Actions workflow (`.github/workflows/deploy.yml`) handles SSH syncing of `index.html` and `ads.txt` to Hetzner web root (`/var/www/unitedbeats`).
- **Domain Cluster:** `unitedbeats.org` (Cloudflare-fronted), `unitedbeats.net`, `unitedbeats.site`.
