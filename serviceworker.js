/* 
self.addEventListener('fetch', function (event) {
    if (event.request.method === 'GET') {
        event.respondWith(
            caches.open('ma_sauvegarde').then(function (cache) {
                return cache.match(event.request).then(function (response) {
                    if (response) {
                        return response;
                    }
                    return fetch(event.request).then(function (networkResponse) {
                        cache.put(event.request, networkResponse.clone());
                        return networkResponse;
                    });
                });
            })
        );
    }
});
*/