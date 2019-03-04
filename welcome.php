<html>
<body>



<select>
  <option value="volvo" id="volvo">Volvo</option>
  <option value="saab"  id="saab">Saab</option>
  <option value="vw"    id="vw">VW</option>
  <option value="audi"  id="audi">Audi</option>
</select>

<script type="text/javascript">
  var demo = "<?php echo $_POST["service"]; ?>";
  document.getElementById(demo).setAttribute("selected","selected");
</script>

</body>
</html>
