# Deploy notes — boudydegeer.com

Hosting: **Laravel Forge + Nginx**.

## One-time Nginx config

Apply [nginx-cache.conf](./nginx-cache.conf) once per site:

1. Forge dashboard → Sites → boudydegeer.com → **Edit Files** → **Nginx Configuration**
2. Paste the snippet inside the `server { ... }` block, after `root` and `index`, before `location / { ... }`
3. Save → Forge will validate and reload nginx automatically

## Production environment variables

Set these in Forge → Sites → boudydegeer.com → **Environment**:

```env
APP_NAME="Boudy de Geer"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://boudydegeer.com
APP_KEY=  # Generate fresh with: php artisan key:generate --show

SESSION_DRIVER=database  # or redis
SESSION_SECURE_COOKIE=true

DB_CONNECTION=mysql  # or pgsql — NOT sqlite in production
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=boudydegeer
DB_USERNAME=...
DB_PASSWORD=...

MAIL_MAILER=log  # Until you wire up real mail; auth registration is disabled so emails are unused
MAIL_FROM_ADDRESS=hello@boudydegeer.com
MAIL_FROM_NAME="${APP_NAME}"
```

## Deploy script (Forge default works)

```bash
cd $FORGE_SITE_PATH
git pull origin main
$FORGE_COMPOSER install --no-dev --optimize-autoloader
$FORGE_PHP artisan migrate --force
pnpm install --frozen-lockfile
pnpm run build
$FORGE_PHP artisan config:cache
$FORGE_PHP artisan route:cache
$FORGE_PHP artisan view:cache
$FORGE_PHP artisan event:cache
```

## Post-deploy checks

- [ ] `https://boudydegeer.com/` loads, og:image preview works (test with [opengraph.xyz](https://www.opengraph.xyz))
- [ ] Favicon shows `>` glyph in browser tab
- [ ] `/login` reachable, `/register` returns 404
- [ ] `/dashboard` reachable directly via URL but not in any menu
- [ ] `/sitemap.xml` and `/robots.txt` accessible
- [ ] Tab title format: `"Page title - Boudy de Geer"` (no `Laravel`)
- [ ] Run `curl -I https://boudydegeer.com/build/<any-asset>.js` — confirm `Cache-Control: public, max-age=31536000, immutable`
