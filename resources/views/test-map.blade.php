<!DOCTYPE html>
<html>
<head>
    <title>Property Location Map</title>
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
    <style>
        #map { 
            height: 500px; 
            width: 100%;
            border-radius: 8px;
            margin-top: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Property Location</h1>
        
        <div id="map"></div>
        
        <!-- Display coordinates -->
        <div class="coordinates">
            <p>Latitude: {{ $location['lat'] }}</p>
            <p>Longitude: {{ $location['lng'] }}</p>
        </div>
    </div>
    
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    
    <script>
        // Initialize the map with the property location
        const map = L.map('map').setView([{{ $location['lat'] }}, {{ $location['lng'] }}], 8);
        
        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            // attribution: ' <a href="https://www.openstreetmap.org/copyright"></a> ',
            maxZoom: 50,
        }).addTo(map);
        
        // Custom icon (optional)
        const propertyIcon = L.icon({
            iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
        });
        
        // Add a marker for the property location
        const marker = L.marker([{{ $location['lat'] }}, {{ $location['lng'] }}], {
            icon: propertyIcon,
            title: 'Property Location'
        }).addTo(map);
        
        // Add popup with coordinates
     
    </script>
</body>
</html>