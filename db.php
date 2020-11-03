<?php
function banco($sql){
$conn = pg_connect(getenv("DATABASE_URL"));
if (!$conn)
 die("erro conexão com o banco<br />");




 pg_close($conn);




}
?>