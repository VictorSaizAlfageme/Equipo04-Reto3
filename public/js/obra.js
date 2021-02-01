(function() {
    var placesAutocomplete = places({
        appId: 'pl6BLHDH86HJ',
        apiKey: '8755c0e9bd2c43d71055e0c8dac6d5fb',
        container: document.querySelector('#form-address'),
        templates: {
            value: function(suggestion) {
                return suggestion.name;
            }
        }
    }).configure({
        type: 'address'
    });
    placesAutocomplete.on('change', function resultSelected(e) {
        //https://community.algolia.com/places/documentation#suggestions
        coor = e.suggestion.latlng;

        document.querySelector('#longitud').value = coor.lng;
        document.querySelector('#latitud').value = coor.lat;

        document.querySelector('#form-city').value = e.suggestion.city || '';
        document.querySelector('#form-zip').value = e.suggestion.postcode || '';


    });
})();
