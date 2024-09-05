<!DOCTYPE html>
<html>
<head>
  <title>Travel Accommodation Map</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <link rel="stylesheet" href="style.css" />
  
  </style>
</head>
<body>
  <div class="container">
    <div id="map"></div>
    <div class="property-details">
      <h2 id="property-name"></h2>
      <p id="property-description"></p>
      <p>Pricing: <span id="property-price"></span></p>
      <p>Amenities: <span id="property-amenities"></span></p>
      <p>Near by Tourist Places Board: <span id="property-nearby"></span></p>
      <p>Landlord: <span id="property-landlord"></span></p>
      <p>Contact No: <span id="property-contactNo"></span></p>
    </div>
  </div>

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="script.js"></script>
</body>
</html>