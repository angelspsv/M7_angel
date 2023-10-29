<?php
// Elimina la cookie del idioma.
setcookie("language_selected","",time()-1);

header("Location: /")
?>