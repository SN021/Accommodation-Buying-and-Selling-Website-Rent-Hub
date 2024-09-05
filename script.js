// Initialize the map
var map = L.map('map').setView([6.821313081643639, 80.04140445106043], 13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Property data
var properties = [
  {
    name: 'Sarasavi Madura Hostel Premises(Girls)',
    description: '3 bedrooms + 2 bed',
    price: 'LKR 12,500',
    amenities: 'Air conditioning, Wi-Fi, Kitchen',
    nearbyPlaces: '2.4 km away',
    landlord: 'Mr. Namal Perera',
    contactNo: '+94768888888',
    latitude: 6.824913953632588,
    longitude: 80.04177435980361
  },
  {
    name: 'DVS Boys Hostel',
    description: '2 bedrooms + 4 bathrooms',
    price: 'LKR 10,500',
    amenities: 'Kitchen, Wifi',
    nearbyPlaces: '930 m away',
    landlord: 'Mr. Ranil Perera',
    contactNo: '+94768888888',
    latitude: 6.824849138179653,
    longitude: 80.0454589411405
  },
  {
    name: 'Hiltop Girls Hostel',
    description: '2 bedrooms, 2 bathrooms',
    price: 'LKR 21,800',
    amenities: 'Parking, Garden',
    nearbyPlaces: 'About 2 km away',
    landlord: 'Mr. Banuka nimal',
    contactNo: '+94768888888',
    latitude: 6.822652609181089,
    longitude: 80.04558949722372
  },
  {
    name: 'Grand 7 Luxury Girls Hostel',
    description: '2 bedrooms, 2 bathrooms',
    price: 'LKR 14,700',
    amenities: 'Wifi,Kitchen, Garden',
    nearbyPlaces: '1km away',
    landlord: 'Mr. Amila Perera',
    contactNo: '+94768888888',
    latitude: 6.8223645390611365,
    longitude: 80.04680076707697
  },

];

// Add location markers to the map
properties.forEach(function(property) {
  L.marker([property.latitude, property.longitude]).addTo(map)
    .on('click', function() {
      displayPropertyDetails(property);
    });
});

// Function to display property details
function displayPropertyDetails(property) {
  document.getElementById('property-name').textContent = property.name;
  document.getElementById('property-description').textContent = property.description;
  document.getElementById('property-price').textContent = property.price;
  document.getElementById('property-amenities').textContent = property.amenities;
  document.getElementById('property-nearby').textContent = property.nearbyPlaces;
  document.getElementById('property-landlord').textContent = property.landlord;
  document.getElementById('property-contactNo').textContent = property.contactNo;
}