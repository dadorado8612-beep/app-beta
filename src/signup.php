<?php
include ('../config/database.php');
//getdata
$f_name = $_POST ['fname'];
$l_name = $_POST ['lname'];
$m_phone = $_POST ['mphone'];
$e_mail= $_POST ['email'];
$p_sswd= $_POST ['passwd'];
$sql ="INSERT INTO users (nombre,apellido,telefono,email,contraseña) VALUES ('$f_name','$l_name','$m_phone','$e_mail','$p_sswd')";
pg_query($sql);
?>