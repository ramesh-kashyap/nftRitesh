var cacheName = "nfty";
var filesToCache = [
  "./",
  "./index.html",
  "./assets/css/vendors/bootstrap.css",
  "./assets/css/vendors/bootstrap.rtl.css",
  "./assets/css/vendors/pikaday.css",
  "./assets/css/vendors/remixicon.css",
  "./assets/css/vendors/swiper-bundle.min.css",
  "./assets/css/style.css",
  "./assets/js/bootstrap.bundle.min.js",
  "./assets/js/script.js",
  "./assets/js/swiper-bundle.min.js",
  "./assets/js/pikaday.js",
  "./assets/js/custom-pikaday.js",
  "./assets/js/custom-swiper.js",
  "./assets/js/toast.js",
  "./assets/js/homescreen-popup.js",
  "./assets/js/otp.js",
];

/* Start the service worker and cache all of the app's content */
self.addEventListener("install", function (e) {
  e.waitUntil(
    caches.open(cacheName).then(function (cache) {
      return cache.addAll(filesToCache);
    })
  );
  self.skipWaiting();
});

/* Serve cached content when offline */
self.addEventListener("fetch", function (e) {
  e.respondWith(
    caches.match(e.request).then(function (response) {
      return response || fetch(e.request);
    })
  );
});
