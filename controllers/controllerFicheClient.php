<?php
require_once '../models/modelFicheClient.php'; 
$infosPersos = getInfosPerso($_GET['id_client']);
$mails = getMail();
$visites = getVisites($_GET['id_client']);
$forfait = testForfait($_GET['id_client']);