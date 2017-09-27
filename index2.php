<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<link rel="stylesheet" type="text/css" href="https://js.cit.api.here.com/v3/3.0/mapsjs-ui.css" />
<script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-core.js"></script>
<script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
</head>
<body>

  <div id="mapContainer" style="width: 100%; height: 950px; background: grey" />
  <script  type="text/javascript" charset="UTF-8" >
     function addMarkersToMap(map) {
      // for (var i = 0; i < lat.length; i++) {
      //   //map.addObject(new H.map.Marker({lat: lat[i], lng: lng[i]}));
      //   map.addObject(new H.map.Marker({lat: lat[i], lng: lng[i]}, {icon: icon}));
      // }
      map.addObject(new H.map.Marker({lat: 19.365125, lng: -99.179432}, {icon: icon}));
      map.addObject(new H.map.Marker({lat: 19.365712, lng: -99.179749}, {icon: icon}));
      map.addObject(new H.map.Marker({lat: 19.365975, lng: -99.181042}, {icon: icon}));
      map.addObject(new H.map.Marker({lat: 19.366329, lng: -99.180548}, {icon: icon}));
      map.addObject(new H.map.Marker({lat: 19.365884, lng: -99.181267}, {icon: icon}));
      map.addObject(new H.map.Marker({lat: 19.366972, lng: -99.180419}, {icon: icon}));
      map.addObject(new H.map.Marker({lat: 19.365778, lng: -99.179974}, {icon: icon}));
      map.addObject(new H.map.Marker({lat: 19.366360, lng: -99.179609}, {icon: icon}));
      map.addObject(new H.map.Marker({lat: 19.3662692, lng: -99.180070}, {icon: icon}));
      map.addObject(new H.map.Marker({lat: 19.366304, lng: -99.180381}, {icon: icon}));
      map.addObject(new H.map.Marker({lat: 19.3665572, lng: -99.1798831}, {icon: icon}));
    }

    function addPolygonToMap(map) {
      var polygon = new H.geo.LineString(
        [19.367475, -99.180812, 0,
      19.364974, -99.181625, 0,
      19.364701, -99.180048, 0,
      19.365713, -99.178696, 0,
      19.366796, -99.179683, 0,
      19.367484, -99.180799, 0],
        'values lat lng alt'
      );

      map.addObject(new H.map.Polygon(polygon,{style:{strokeColor:'rgba(204,34,34,0.66)',fillColor:'rgba(204, 34, 34, 0.66)',lineWidth:1}}));
      var polygon2 = new H.geo.LineString([
        19.367752, -99.181094, 0,
      19.365923, -99.181632, 0,
      19.366384, -99.183247, 0,
      19.367285, -99.181756, 0,
      19.367752, -99.181094, 0],
        'values lat lng alt'
      );
      map.addObject(new H.map.Polygon(polygon2,{style:{strokeColor:'rgba(204,34,34,0.66)',fillColor:'rgba(204, 34, 34, 0.66)',lineWidth:1}}));
    }

    function addPolylineToMap(map) {
      var polyline = new H.geo.LineString();
      var polyline2 = new H.geo.LineString();

      //Polilinea 1
      polyline.pushPoint({lat:19.367475, lng:-99.180812});
      polyline.pushPoint({lat:19.364974, lng:-99.181625});
      polyline.pushPoint({lat:19.364701, lng:-99.180048});
      polyline.pushPoint({lat:19.365713, lng:-99.178696});
      polyline.pushPoint({lat:19.366796, lng:-99.179683});
      polyline.pushPoint({lat:19.367484, lng:-99.180799});

      //Poliliena2
      polyline2.pushPoint({lat:19.367752, lng:-99.181094});
      polyline2.pushPoint({lat:19.365923, lng:-99.181632});
      polyline2.pushPoint({lat:19.366384, lng:-99.183247});
      polyline2.pushPoint({lat:19.367285, lng:-99.181756});
      polyline2.pushPoint({lat:19.367752, lng:-99.181094});


      map.addObject(new H.map.Polyline(polyline, { style: { strokeColor: 'rgba(204, 34, 34, 0.66)',lineWidth: 7 }}));
      map.addObject(new H.map.Polyline(polyline2, { style: { strokeColor: 'rgba(46, 121, 27, 1)', lineWidth: 7 }}));
    }

    // img
    var svg =
          '<svg width="26" height="36" xmlns="http://www.w3.org/2000/svg">' +
     '<defs>' +
      '<clipPath clipPathUnits="userSpaceOnUse" id="clipPath16">' +
       '<path d="m-61.787487,101.292982l36,0l0,-36l-36,0l0,36z" id="path18"/>' +
      '</clipPath>' +
      '<clipPath clipPathUnits="userSpaceOnUse" id="clipPath32">' +
       '<path d="m-56.060487,95.674982c-0.477,-0.233 -0.539,-0.84 -0.414,-1.278l0,0c0.125,-0.437 10.687,-27.104 10.687,-27.104l0,0c0,0 1,-2 2,-2l0,0c1.104,0 2,2 2,2l0,0l10.704,27.22c0,0 0.213,0.843 -0.569,1.229l0,0c-1.744,0.862 -6.088,2.551 -12.135,2.551l0,0c-6.213,0 -10.615,-1.81 -12.273,-2.618" id="path34"/>' +
      '</clipPath>' +
     '</defs>' +
     '<g>' +
      '<g id="g10" transform="matrix(0.5483078239153621,0,0,-0.6687958013653175,37.845709017337555,69.3310340520454) ">' +
       '<g id="g12">' +
        '<g id="g14" clip-path="url(#clipPath16)">' +
         '<g id="g20">' +
          '<path fill="#f4900c" fill-rule="nonzero" d="m-43.787487,97.292982c7.257,0 13,-4 14.699,-2c0.197,0.323 0.301,0.657 0.301,1c0,2 -6.716,5 -15,5c-8.284,0 -15,-3 -15,-5c0,-0.343 0.104,-0.677 0.301,-1c1.699,-2 7.442,2 14.699,2" id="path22"/>' +
         '</g>' +
         '<g id="g24">' +
          '<path fill="#ffcc4d" fill-rule="nonzero" d="m-43.787487,98.292982c-6.213,0 -10.616,-1.81 -12.273,-2.618c-0.477,-0.233 -0.54,-0.84 -0.415,-1.278c0.125,-0.437 10.688,-27.104 10.688,-27.104c0,0 0.896,-2 2,-2c1.105,0 2,2 2,2l10.704,27.221c0,0 0.213,0.841 -0.569,1.228c-1.743,0.862 -6.088,2.551 -12.135,2.551" id="path26"/>' +
         '</g>' +
        '</g>' +
       '</g>' +
       '<g id="g28">' +
        '<g id="g30" clip-path="url(#clipPath32)">' +
         '<g id="g36">' +
          '<path fill="#be1931" fill-rule="nonzero" d="m-43.787487,70.292982c0,-2.208 -1.791,-4 -4,-4c-2.209,0 -4,1.792 -4,4c0,2.208 1.791,4 4,4c2.209,0 4,-1.792 4,-4" id="path38"/>' +
         '</g>' +
         '<g id="g40">' +
         ' <path fill="#be1931" fill-rule="nonzero" d="m-44.787487,81.292982c0,-2.208 -1.792,-4 -4,-4c-2.209,0 -4,1.792 -4,4c0,2.209 1.791,4 4,4c2.208,0 4,-1.791 4,-4" id="path42"/>' +
         '</g>' +
         '<g id="g44">' +
          '<path fill="#be1931" fill-rule="nonzero" d="m-41.787487,93.292982c0,-2.209 -1.792,-4 -4,-4c-2.209,0 -4,1.791 -4,4c0,2.209 1.791,4 4,4c2.208,0 4,-1.791 4,-4" id="path46"/>' +
         '</g>' +
         '<g id="g48">' +
          '<path fill="#be1931" fill-rule="nonzero" d="m-32.787487,88.292982c0,-2.209 -1.792,-4 -4,-4c-2.208,0 -4,1.791 -4,4c0,2.209 1.792,4 4,4c2.208,0 4,-1.791 4,-4" id="path50"/>' +
         '</g>' +
         '<g id="g52">' +
          '<path fill="#be1931" fill-rule="nonzero" d="m-34.787487,76.292982c0,-2.208 -1.792,-4 -4,-4c-2.208,0 -4,1.792 -4,4c0,2.208 1.792,4 4,4c2.208,0 4,-1.792 4,-4" id="path54"/>' +
         '</g>' +
         '<g id="g56">' +
          '<path fill="#be1931" fill-rule="nonzero" d="m-51.787487,89.292982c0,-2.209 -1.791,-4 -4,-4c-2.209,0 -4,1.791 -4,4c0,2.209 1.791,4 4,4c2.209,0 4,-1.791 4,-4" id="path58"/>' +
         '</g>' +
        '</g>' +
       '</g>' +
      '</g>' +
     '</g>' +
    '</svg>'
    var options = {
      'size': new mapsjs.math.Size(28, 36),
      'anchor': new mapsjs.math.Point(14, 32),
      'hitArea': new mapsjs.map.HitArea(
          mapsjs.map.HitArea.ShapeType.POLYGON, [0, 16, 0, 7, 8, 0, 18, 0, 26, 7, 26, 16, 18, 34, 8, 34])
      };
    icon = new mapsjs.map.Icon(svg, options);

      //Step 1: initialize communication with the platform
      var platform = new H.service.Platform({
        app_id: '8IJGBAtiZWLgsB4pYlZT',
        app_code: '-8-e5rFfP-pD7Jpy_r6dIg',
        useCIT: true,
        useHTTPS: true
      });
      var defaultLayers = platform.createDefaultLayers();


      //Step 2: initialize a map - this map is centered over Europe
      var map = new H.Map(document.getElementById('mapContainer'),
        defaultLayers.normal.map,{
        center: {lat:19.366628 , lng:-99.181089},
        zoom: 17
      });

      //Step 3: make the map interactive
      // MapEvents enables the event system
      // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
      var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

      // Create the default UI components
      var ui = H.ui.UI.createDefault(map, defaultLayers);

      // Now use the map as required...
      addMarkersToMap(map);
      addPolygonToMap(map);
      addPolylineToMap(map);
</script>
  </script>
</body>
</html>
