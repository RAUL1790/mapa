<!DOCTYPE html>
<html>
<head>
	<title>Mapas de Google</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="">
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

     <!--        GOOGLE MAPS                    -->

      <style type="text/css">
      #map_canvas { width:1000px; height: 1000px}
    </style>


     </style>

      <script src="http://maps.googleapis.com/maps/api/js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	  <script type="text/javascript" 
           src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&sensor=false">
    </script>

    <script type="text/javascript">
       
     var map; 
     var service;



       function inicializar(locacion)
       {
       /* console.log(locacion); 
        console.log(locacion.coords.latitude)  
        console.log(locacion.coords.longitude)*/ 
        var nueva_esparta =  new google.maps.LatLng(10.961573, -64.096157);
           var mapOptions =
            {
               zoom: 11,
               center: nueva_esparta,
               mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);


          /*           PONER MARCADORES             */
          
         var porlamar =  new google.maps.LatLng(10.973707, -63.875057);

         var marker = new google.maps.Marker({
           position : porlamar,
           map : map,
         });     



       } // FIN FUNCION INICIALIZAR
      
      $(document).ready(function()
      {
        // navigator.geolocation.getCurrentPosition(inicializar);   con esto puedo obtener la locacion donde me encuentro      
       inicializar();
      });    
    </script>

</head>
<body>
<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250694.4939711694!2d-64.09429219999996!3d10.955707450000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c31932a585cfef3%3A0x3c082f2200cab1c0!2sNueva+Esparta!5e0!3m2!1ses!2sve!4v1416967491860" width="600" height="450" frameborder="0" style="border:0"></iframe>-->

<div id="map_canvas"></div>

</body>
</html>