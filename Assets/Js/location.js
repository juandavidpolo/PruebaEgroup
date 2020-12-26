var map = L.map('map').setView([12.5772019,-81.7030991], 17);
L.tileLayer('https://api.maptiler.com/maps/topo/{z}/{x}/{y}.png?key=Be4lmuCMHfvPdx0f9wAV',
{
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 20,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(map);
var marker = L.marker([12.5772019,-81.7030991]).addTo(map);