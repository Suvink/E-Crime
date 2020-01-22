<!DOCTYPE html>
<html>
<head>
<title>Geo City Locator by geolocation-db.com</title>
</head>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
<div id="country"></div>
<div id="region"></div>
<div id="city"></div>

    

                               

<script>
$.get("https://api.ipdata.co?api-key=test", function (response) {
	$("#response").html(JSON.stringify(response, null, 4));
  $("#country").html('Country: ' + response.country_name);
  $("#region").html('Region ' + response.region);
  $("#city").html('City' + response.city);  
}, "jsonp");
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">  </script>

</body>

</html>