<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  //if(isset($_POST['btnBarras']))
  {
    $sucrec;
    $Fecha=$_POST["Fecha"];
    $sucursal=$_POST["sucursal"];
    $count = count($sucursal);
    for ($i = 0; $i < $count; $i++) {
        if ($i==0) {
          $sucrec=$sucursal[$i];
        }
        else
        {
          $sucrec=$sucrec.','.$sucursal[$i];
        }
    }
    $conn = oci_connect('alsea', 'alsea2017', '192.168.15.41:1521/alseaPDB','AL32UTF8');
    if (!$conn)
    {
      $m = oci_error();
      echo $m['message'], "\n";
      exit;
    }
    else{
        $lat=[];
        $lng=[];
        //$alt=[];
        $query ='SELECT Latitud,Longitud FROM ALSEADATOS WHERE LOCATION_CODE=11174';
        //echo $query;
        $stid = oci_parse($conn, $query);
        oci_execute($stid);
        while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
          {
            array_push($lat, $row[0]);
            array_push($lng, $row[1]);
          }
        oci_free_statement($stid);
    }
  }
?>

<script type="text/javascript" charset="UTF-8">
    var lat = <?php echo json_encode($lat);?>;
    //alert(lat[0]);
    var lng = <?php echo json_encode($lng);?>;
    //alert(lng[0]);
    var length= lat.length;
    alert(length);
    function addMarkersToMap(map) {
      for (var i = 0; i < lat.length; i++) {
        //var point = new H.map.Marker({lat:lat[i], lng:lng[i]});
        map.addObject(new H.map.Marker({lat: lat[i], lng: lng[i]}));
        //map.addObject(new H.map.Marker({lat: lat[i], lng: lng[i]}, {icon: icon}));
        //alert("Latitud: "+lat[i]+", Longitud: " +lng[i]);
      }
      // var point = new H.map.Marker({lat:$.each(lat,function(i,val){
      //         return val;}), lng:$.each(lng,function(i,value){return value;})});
      // Jquery.each( lat, function( i, val ) {
      //   alert(val);
      //   //var point = new H.map.Marker({lat:val, lng:lng[val]});
      // });
      // $.each(lat,function(i,val){
      //   //alert(val);
      // });
      //var point = new H.map.Marker({lat:lat, lng:lng});
      //map.addObject(point);
    }

    function addPolygonToMap(map) {
      var lineString = new H.geo.LineString(
        [52, 13, 100, 48, 2, 100, 48, 16, 100, 52, 13, 100],
        'values lat lng alt'
      );
      map.addObject(
        new H.map.Polygon(lineString, {
          style: {
            fillColor: '#FFFFCC',
            strokeColor: '#829',
            lineWidth: 8
          }
        })
      );
    }

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
        center: {lat:19.35807, lng:-99.12535},
        zoom: 12
      });

      //Step 3: make the map interactive
      // MapEvents enables the event system
      // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
      var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

      // Create the default UI components
      var ui = H.ui.UI.createDefault(map, defaultLayers);

      // Now use the map as required...
      addMarkersToMap(map);
      //addPolygonToMap(map);
</script>
