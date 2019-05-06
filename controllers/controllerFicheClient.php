<?php
require_once '../models/modelFicheClient.php'; 
$infosPersos = getInfosPerso($_GET['id_client']);
$mails = getMail();