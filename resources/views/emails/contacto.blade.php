<html>
<head>
  <title>Contacto</title>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
  <style>
   hr {
    display: inline-block;
    width: 600px;
    text-align: left;
    border-style: solid;
    border-width: 1px;
    border-color: #DFDFDF;
    margin-bottom: 0px;
  }
</style>

</head>

<body bgcolor='#FFFFFF' text='#000000'>
 <table width='720' border='0' cellspacing='10' cellpadding='0' bgcolor='#FFFFFF'>
  <tr> 
    <td valign='middle' style='font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #333333'> 
      <p style='font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #333333'>
       <b>Nombre:</b> {{ isset($nombre) ? $nombre : '' }}<br>
       <b>Email:</b> <span style='color: #666666; text-decoration: none;'>{{ isset($email) ? $email : '' }}</span><br>
       <b>Telefono:</b> {{ isset($telefono) ? $telefono : '' }}<br>
       <b>Asunto:</b> {{ isset($asunto) ? $asunto : '' }}<br>
       
     </p>
     <br>
     
     <p style='font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #333333'><b>Mensaje:</b><br>{{ isset($mensaje) ? $mensaje : '' }}</p>
     <p>&nbsp;</p>
   </td>
 </tr>
</table>
<hr/>
<table width='720' border='0' cellspacing='10' cellpadding='0' bgcolor='#FFFFFF'>
  <tr> 
    <td><a href='{{ URL::asset('') }}' target='_self'><img src='{{ URL::asset('/images/mail.png') }}' width='94' height='90' border='0'></a></td>
  </tr>
  <tr> 
    <td style='font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #666666; text-decoration: none;'>
     Tel: +54 11-4554-8658 / +54 11-4554-8650 
     
     
     
   </td>
 </tr>
 <tr>
  <td style='font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #666666'><a href='mailto:ventas@ocsport.com.ar' style='font-family: Arial, Helvetica, sans-serif; font-size: 

    11px; color: #666666; text-decoration: none;' >ventas@ocsport.com.ar</a> / <a href='{{ URL::asset('') }}' style='font-family: Arial, Helvetica, 
    sans-serif; font-size: 11px; color: #666666; text-decoration: none;'>wwww.ocsport.com.ar/</a></td>
  </tr>
</table>
</body>
</html>