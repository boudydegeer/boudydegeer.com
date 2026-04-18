import { createInertiaApp } from '@inertiajs/vue3';
import { defineAsyncComponent } from 'vue';
import { initializeTheme } from '@/composables/useAppearance';
import { initializeFlashToast } from '@/lib/flashToast';

const appName = import.meta.env.VITE_APP_NAME || 'Boudy de Geer';

// Lazy layout references — keeps reka-ui (and the rest of the shadcn/ui
// dependency graph) out of the initial chunk. Layouts are only fetched when
// a page that actually needs them is resolved.
const AppLayoutAsync = defineAsyncComponent(() => import('@/layouts/AppLayout.vue'));
const AuthLayoutAsync = defineAsyncComponent(() => import('@/layouts/AuthLayout.vue'));
const SettingsLayoutAsync = defineAsyncComponent(() => import('@/layouts/settings/Layout.vue'));

createInertiaApp({
    title: (title) => {
        if (!title) {
            return appName;
        }

        return title.startsWith(appName) ? title : `${title} - ${appName}`;
    },
    layout: (name) => {
        switch (true) {
            case name === 'Welcome':
                return null;
            case name.startsWith('auth/'):
                return AuthLayoutAsync;
            case name.startsWith('settings/'):
                return [AppLayoutAsync, SettingsLayoutAsync];
            default:
                return AppLayoutAsync;
        }
    },
    progress: {
        color: '#00FF87',
    },
});

// This will set light / dark mode on page load...
initializeTheme();

// This will listen for flash toast data from the server...
initializeFlashToast();
