// Service Worker for Guardify Pro
const CACHE_NAME = 'guardify-cache-v6';
const ASSETS_TO_CACHE = [
  '/',
  '/index.php',
  '/preview.php',
  '/css/font-awesome.min.css',
  '/css/style.css',
  '/js/theme-manager.js',
  '/js/app.js',
  '/js/preview-studio.js',
  '/js/chart.js',
  '/Fonts/iranyekanwebregular.woff',
  '/Fonts/iranyekanwebmedium.woff',
  '/Fonts/iranyekanwebbold.woff',
  '/Fonts/iranyekanwebextrabold.woff',
  '/Fonts/iranyekanwebblack.woff',
  '/Fonts/iranyekanweblight.woff',
  '/Fonts/iranyekanwebthin.woff',
  '/Fonts/iranyekanwebextrablack.woff',
  '/webfonts/fa-solid-900.woff2',
  '/webfonts/fa-brands-400.woff2',
  '/webfonts/fa-regular-400.woff2',
  '/webfonts/fa-v4compatibility.woff2',
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
  'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
  'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css',
  'https://code.jquery.com/jquery-3.7.1.min.js',
  'https://unpkg.com/react@18/umd/react.production.min.js',
  'https://unpkg.com/react-dom@18/umd/react-dom.production.min.js',
  'https://unpkg.com/recharts@2.12.7/umd/Recharts.js'
];

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      return cache.addAll(ASSETS_TO_CACHE).catch(() => {});
    }).then(() => self.skipWaiting())
  );
});

self.addEventListener('activate', (event) => {
  event.waitUntil(
    caches.keys().then((keys) => {
      return Promise.all(
        keys.map((key) => {
          if (key !== CACHE_NAME) {
            return caches.delete(key);
          }
        })
      );
    }).then(() => self.clients.claim())
  );
});

self.addEventListener('fetch', (event) => {
  if (event.request.method !== 'GET') return;
  
  const url = new URL(event.request.url);

  // Network-First for local CSS and JS to ensure instant updates
  if (url.pathname.startsWith('/css/') || url.pathname.startsWith('/js/')) {
    event.respondWith(
      fetch(event.request)
        .then((networkResponse) => {
          if (networkResponse && networkResponse.status === 200) {
            const clone = networkResponse.clone();
            caches.open(CACHE_NAME).then((cache) => cache.put(event.request, clone));
          }
          return networkResponse;
        })
        .catch(() => caches.match(event.request))
    );
    return;
  }

  // Stale-While-Revalidate for HTML / Navigation
  if (event.request.mode === 'navigate' || url.pathname === '/' || url.pathname.endsWith('.html')) {
    event.respondWith(
      caches.open(CACHE_NAME).then(async (cache) => {
        const cachedResponse = await cache.match(event.request);
        const networkFetch = fetch(event.request).then((networkResponse) => {
          if (networkResponse && networkResponse.status === 200) {
            cache.put(event.request, networkResponse.clone());
          }
          return networkResponse;
        }).catch(() => cachedResponse);

        return networkFetch || cachedResponse;
      })
    );
    return;
  }

  // Cache-First for external vendor assets, fonts, CDN images
  if (
    url.hostname.includes('jsdelivr') ||
    url.hostname.includes('cloudflare') ||
    url.hostname.includes('unpkg') ||
    url.hostname.includes('unsplash')
  ) {
    event.respondWith(
      caches.open(CACHE_NAME).then(async (cache) => {
        const cachedResponse = await cache.match(event.request);
        if (cachedResponse) {
          return cachedResponse;
        }
        try {
          const networkResponse = await fetch(event.request);
          if (networkResponse && networkResponse.status === 200) {
            cache.put(event.request, networkResponse.clone());
          }
          return networkResponse;
        } catch (err) {
          return cachedResponse || Response.error();
        }
      })
    );
  }
});
