// var map;
// function initMap() {
//   map = new google.maps.Map(document.getElementById('map'), {
//     center: {lat: 6.444550, lng: 7.490180},
//     zoom: 14
//   });
// }

// Initialize and add map
function initMap() {
    // Your location
    const loc = {lat: 6.444550, lng: 7.490180};
    // Centered Map on location
    const map = new google.maps.Map(document.querySelector('.map'), // Changed 'map' to 'Map'
    {
        zoom: 14,
        center: loc
    });
    // The marker, positioned at location
    const marker = new google.maps.Marker({ // Changed 'Maker' to 'Marker'
        position: loc, map: map // Added a space between 'map:' and 'map'
    });
}

// Sticky Menu bar
window.addEventListener('scroll', function() {
    if (window.scrollY > 150) {
        document.querySelector('#navbar').style.opacity = 0.9;
    } else {
        document.querySelector('#navbar').style.opacity = 1;
    }
});


//  Smooth Scrolling
$ ('#navbar a, .btn').on('click', function(event) {
     if (this.hash !=='') {
        event.preventDefault() ;

        const hash = this.hash;

        $('html, body').animate(
            {
                scrollTop: $(hash).offset().top- 100
            },
            800
        );
     }
} );