<?php
include ('../config/database.php');
//getdata
$f_name = $_POST ['fname'];
$l_name = $_POST ['lname'];
$m_phone = $_POST ['mphone'];
$e_mail= $_POST ['email'];
$p_sswd= $_POST ['passwd'];
$enc_pass = md5($p_sswd);
$sql ="INSERT INTO users (nombre,apellido,telefono,email,contrasena) VALUES ('$f_name','$l_name','$m_phone','$e_mail','$enc_pass')";
pg_query($sql);
?>