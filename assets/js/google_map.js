     function initMap() {
             var uluru = {lat: 27.681827, lng: 85.318728};
             var map = new google.maps.Map(document.getElementById('map'), {
               zoom: 18,
               center: uluru
             });

             var contentString = '<div id="content">'+
                 '<div id="siteNotice">'+
                 '</div>'+
                 '<h3 id="firstHeading" class="firstHeading">Center for Infrastructure Developement Studies</h3>'+
                 '<div id="bodyContent">'+
                 '<p><b>Center for Infrastructure Developement Studies</b>, also referred to as <b>CIDS</b>, in short.' +
                 '<p><b><i class="fa fa-fw fa-location-arrow fa-lg"></i> Location: </b> '+
                 'Pulchowk, Lalitpur </p>'+
                 '</div>'+
                 '</div>';

             var infowindow = new google.maps.InfoWindow({
               content: contentString
             });

             var marker = new google.maps.Marker({
               position: uluru,
               map: map,
               title: 'Uluru (Ayers Rock)'
             });
             marker.addListener('click', function() {
               infowindow.open(map, marker);
               infowindow.open(map);
             });
           }
