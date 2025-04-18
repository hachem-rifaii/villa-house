<div>
    <div id="map" style="height: 400px;"></div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var lat = @json($latitude ?? 11.2);
            var lng = @json($longitude ?? 11.3);

            var map = L.map('map').setView([lat, lng], 12); // الإعدادات الافتراضية للخريطة

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var marker = L.marker([lat, lng], { draggable: true }).addTo(map);

            map.on('click', function (e) {
                var newLat = e.latlng.lat;
                var newLng = e.latlng.lng;

                marker.setLatLng([newLat, newLng]);

                // تحديث Livewire بالـ latitude و longitude
                @this.set('latitude', newLat);
                @this.set('longitude', newLng);
            });
        });
    </script>
</div>
