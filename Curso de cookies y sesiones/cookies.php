<?php

setcookie(
    name: "example_cookie",
    value: "Michi salvaje",
    expires_or_options: time() + 60 *60 * 24, // 0 La cookie estara viva mientas la sesion, time() en tiempo inmediato
    path : "/configuracion", // url en la que estara disponible la cookie, si se deja solo / la cookie estara disponible en cualquier path de la página
    domain: "localhost", // dominio en el que estará disponible
    secure: false, //la cookie podra definirse solo si el dominio tiene ssl
    httponly: true // puede ser accedida desde Front, en flase estara disponible solo en server side
);
