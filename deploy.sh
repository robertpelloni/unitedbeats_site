#!/bin/bash
# Deploy UnitedBeats site to Hetzner
# Domains: unitedbeats.org, unitedbeats.net, unitedbeats.site

SERVER="root@robertpelloni.com"
REMOTE_DIR="/var/www/unitedbeats"
NGINX_AVAIL="/etc/nginx/sites-available/unitedbeats"
NGINX_ENABLED="/etc/nginx/sites-enabled/unitedbeats"

echo "=== Deploying UnitedBeats ==="

# Upload files
echo "Uploading files..."
ssh $SERVER "mkdir -p $REMOTE_DIR"
scp index.html $SERVER:$REMOTE_DIR/

# Set permissions
ssh $SERVER "chown -R www-data:www-data $REMOTE_DIR && chmod -R 755 $REMOTE_DIR"

# Create nginx config
echo "Configuring nginx..."
ssh $SERVER "cat > $NGINX_AVAIL << 'EOF'
server {
    listen 80;
    listen [::]:80;
    server_name unitedbeats.org www.unitedbeats.org unitedbeats.net www.unitedbeats.net unitedbeats.site www.unitedbeats.site;

    root /var/www/unitedbeats;
    index index.html;

    client_max_body_size 10m;

    location / {
        try_files \$uri \$uri/ =404;
    }

    # Cache static assets
    location ~* \.(css|js|jpg|jpeg|png|gif|ico|svg|woff|woff2)$ {
        expires 1y;
        add_header Cache-Control \"public, immutable\";
    }

    # Security headers
    add_header X-Frame-Options \"SAMEORIGIN\" always;
    add_header X-Content-Type-Options \"nosniff\" always;
    add_header Referrer-Policy \"strict-origin-when-cross-origin\" always;

    # Gzip
    gzip on;
    gzip_types text/plain text/css application/json application/javascript text/xml application/xml text/javascript image/svg+xml;
}
EOF"

# Enable site
ssh $SERVER "ln -sf $NGINX_AVAIL $NGINX_ENABLED"

# Test and reload nginx
ssh $SERVER "nginx -t && systemctl reload nginx"

# Set up SSL with certbot (if not already done)
echo "Setting up SSL..."
ssh $SERVER "certbot --nginx -d unitedbeats.org -d www.unitedbeats.org -d unitedbeats.net -d www.unitedbeats.net -d unitedbeats.site -d www.unitedbeats.site --non-interactive --agree-tos --email pelloni.robert@gmail.com 2>/dev/null || echo 'SSL may already be configured'"

echo ""
echo "=== Deployment Complete ==="
echo "Sites available at:"
echo "  https://unitedbeats.org"
echo "  https://unitedbeats.net"
echo "  https://unitedbeats.site"
