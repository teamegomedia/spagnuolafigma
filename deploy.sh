#!/bin/bash
# Deploy villasg-child theme to laspagnuola.com via rsync over SSH
# Usage: ./deploy.sh
set -e
export PATH="/usr/local/bin:/opt/homebrew/bin:/usr/bin:/bin:/usr/sbin:/sbin:$PATH"

REMOTE_USER="w71uol0m"
REMOTE_HOST="lhwp1054.webapps.net"
REMOTE_PORT="25088"
REMOTE_PATH="/home/w71uol0m/public_html/laspagnuola.com/figma/wp-content/themes/villasg-child/"
LOCAL_PATH="$(cd "$(dirname "$0")" && pwd)/villasg-child/"

echo "→ Deploying $LOCAL_PATH"
echo "  to $REMOTE_USER@$REMOTE_HOST:$REMOTE_PATH"
echo ""

rsync -avz --delete \
    --exclude='.git' \
    --exclude='.DS_Store' \
    --exclude='node_modules' \
    --exclude='*.log' \
    -e "ssh -p $REMOTE_PORT" \
    "$LOCAL_PATH" "$REMOTE_USER@$REMOTE_HOST:$REMOTE_PATH"

echo ""
echo "✓ Deploy complete."
