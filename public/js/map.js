
var map = L.map('mapid').setView([42.846841, -2.670996], 13);

L.marker([41.66, -4.71],{draggable: true}).addTo(map);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', ).addTo(map);
