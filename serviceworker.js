//fetch event afin de répondre quand on est en mode hors ligne.
self.addEventListener('fetch', function(event) {
    event.respondWith(
    caches.open('ma_sauvegarde').then(function(cache) {
    return cache.match(event.request).then(function (response) {
    return response || fetch(event.request).then(function(response) {
    cache.put(event.request, response.clone());
    return response;
    });
    });
    })
    );
    });
         