# Deployment Guide

UnitedBeats is deployed to a Hetzner host (`root@robertpelloni.com`) running Nginx and serving `index.html` and `ads.txt` across `unitedbeats.org`, `unitedbeats.net`, and `unitedbeats.site`.

## Automated CI/CD (GitHub Actions)
The repository includes `.github/workflows/deploy.yml` which automatically deploys on every push to `main` or via manual `workflow_dispatch`.

### Required Repository Secrets
In your GitHub repository settings under **Settings > Secrets and variables > Actions**, configure:
* `HETZNER_HOST`: Direct IP or unproxied hostname of your Hetzner server.
* `HETZNER_SSH_KEY`: Private SSH key (ED25519 or RSA) authorized in `/root/.ssh/authorized_keys`.
* `HETZNER_USER`: (Optional, defaults to `root`).
* `HETZNER_PORT`: (Optional, defaults to `22`).

## Manual Deployment (`deploy.sh`)
From an environment with authorized SSH keys:
```bash
chmod +x deploy.sh
./deploy.sh
```
This script uploads `index.html`, ensures permissions (`www-data:www-data`), configures Nginx virtual host with SSL, and reloads Nginx.
