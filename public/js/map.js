

function mostrarMarcadorMapa(lat, lng){
    var map = L.map('mapid').setView([lat, lng], 12);

    L.marker([lat, lng],{draggable: false}).addTo(map);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', ).addTo(map);

}
