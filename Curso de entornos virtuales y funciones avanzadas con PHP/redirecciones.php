<?php
//Para hacer una redicrección a una página web es necesario escribir la url completa
header("location: https://platzi.com");
//Es recomendable poner exit o die después de enviar el header, para evitar ataques
exit();