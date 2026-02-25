<?php

session_start();
session_unset();
session_destroy();

header('location:' . $_ENV["RUTA"] . $linkZonaAdmin);
die;
