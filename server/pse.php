<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
header("Access-Control-Allow-Origin: *");
header('X-Frame-Options:ALL');
/* include './db_connexion.php';
  include './db_getList.php';
  $listeVideos= getList("ofnac_videos", array("etat" => 1));
  function createEmbed($link) {

  $parts=  explode("watch?v=", $link);
  $newLien=$parts[0]."embed/".$parts[1];
  return $newLien;
  } */
?>

<?php if (count($liste)) foreach ($liste as $video) { ?>


    <?php } ?>

<li class="">
    <div class="timeline-badge"></div>
    <div class="panel ">
        <div class="panel-heading panel-colorize">

            <div class="panel-title">
                <a href="#" class="v-mid badge badge-primary-lt badge-rounded badge-empty badge-grow"></a>
                <span class="mid">Connexion internet</span>
            </div>
            <span class="pull-right text-semi"><i class="fa fa-info-circle"></i> <span>PSE</span></span>
        </div>

        <div class="panel-body panel-colorize">
            <p>
                Connexion au serveur réussie.
            </p>
        </div>
    </div>
</li>                