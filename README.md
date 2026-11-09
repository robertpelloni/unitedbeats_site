# UnitedBeats Platform

The official portal and celestial visual engine for the UnitedBeats collective — an interactive single-page experience combining canvas astrophysics simulations, ambient drone audio synthesis, collective soul archiving, and live system operations.

Current Version: **1.2.0** (tracked in `VERSION.md`)

---

## Production Domains

The site is served globally across three mirrored domains:
- **[unitedbeats.org](https://unitedbeats.org)** (Primary domain, Cloudflare CDN proxy)
- **[unitedbeats.net](https://unitedbeats.net)**
- **[unitedbeats.site](https://unitedbeats.site)**

---

## Features & Architecture

### 1. Operations Hub
Accessible via the **⚡ Operations Hub** button or the `Tab` keyboard shortcut:
- **Physics**: Real-time simulation parameters (mouse gravity well toggling, soul filaments connecting celestial names, nova explosions, star count).
- **Souls (76)**: Searchable interactive registry of all 63 Detroit collective soul names. Clicking any name highlights their focal constellation in the celestial canvas.
- **Audio**: Web Audio synth drone engine controls, reverberation acoustics, and master gain volume slider.
- **Ecosystem**: Quick-navigation directory across Robert Pelloni's interconnected ecosystem (`unitedbeats.org`, `robertpelloni.com`, `hypernexus.site`, `bobgame.com`, `fwber.me`, YouTube channels).
- **Deploy**: Real-time deployment telemetry, Hetzner host status, SSL expiry tracking, and direct GitHub Actions pipeline triggers.

### 2. System Tray Quick Controls
Accessible via the **⚡ Tray** top navigation dropdown:
- **Audio Mute/Unmute** (Hotkey: `M`)
- **Simulation Pause/Resume** (Hotkey: `Space`)
- **Filament Rendering Toggle**
- **Trigger Celestial Supernova**
- **Simulate Server Maintenance Mode**

### 3. Keyboard Shortcuts
- `Tab`: Open / Close Operations Hub
- `Esc`: Close open dialogs, trays, or overlays
- `Space`: Pause / Resume particle simulation
- `M`: Toggle audio mute

### 4. Monetization & Ads
- Direct authorized Google AdSense verification snippet (`ca-pub-1203453275296694`)
- Verified `ads.txt` served from the root domain matching direct publisher status.

---

## Collective Soul Registry (Detroit)

Featuring 76 collective souls of the movement:
*Robert Pelloni, Harry Korlous, Lumbros Korlous, Phil, Michael, Mike, Chris, Danny, Dave, Dan, Laura, Julia, Crystal, Shonna, Kim, Brandon, Ken, Joey, Joe, Shannon, Donny, Addy, Craig, Adam, Amanda, Sommer, Matthew Sommer, T, Jen, Dale, Cliff, Christopher, Jude, Leah, Jennifer, James, Alex, Samson, Cory, John, Austin, Ana, Mireille, Niraj, Eugene, Nick, Bry, Sam, Charles, Jason, Hank, Matthew, Matt, Derek, Gregg, Adriana, Daphne, Tim, Frank, Megan, Megggan, Liz, Wayne, Josh, Neil, Jack, Steve, Klair, Rex, Chauncey, Jay, Splarka, Vivi, Vincent, Andrew, William*

---

## Deployment & Infrastructure

### Automated CI/CD (GitHub Actions)
Deployments to the Hetzner host (`/var/www/unitedbeats`) run automatically on pushes to `main` via `.github/workflows/deploy.yml`.

Required repository secrets:
- `HETZNER_HOST`: Server IP / Hostname (`root@robertpelloni.com`)
- `HETZNER_USER`: SSH username (`root`)
- `HETZNER_SSH_KEY`: SSH private key
- `HETZNER_PORT`: SSH port (`22`)

### Manual Deployment
Run the verified deployment script:
```bash
./deploy.sh
```
This syncs `index.html` and `ads.txt`, updates file permissions (`www-data:www-data`), verifies Nginx configuration (`nginx -t`), reloads Nginx, and ensures Let's Encrypt SSL certificates are current.

---

## Governance Documentation

Strict documentation governance is maintained across:
- `VERSION.md`: Single global version string.
- `ROADMAP.md`: Long-term architectural milestones.
- `TODO.md`: Immediate actionable engineering tasks.
- `VISION.md`: Foundational philosophical outline and user experience goals.
- `MEMORY.md`: Persistent engineering decisions and codebase traits.
- `DEPLOY.md`: Deployment reference and server configuration.
- `IDEAS.md`: Aggressive expansion, 3D WebGL, and generative audio concepts.
- `CHANGELOG.md`: Chronological adjustment records.
- `HANDOFF.md`: Comprehensive handoff documentation for subsequent autonomous sessions.
