<?php
//my modal no working well !!!! 

//$display = isset($id) ? "show" : "d-none"; 

if (isset($id)) {
?>
    <div id="myModal" class="modal fade ">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Confirmation de votre réservation pour le film <?= $titre ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Numéro réservation :<?= $id ?></p>
                    <p>Nombre de personnes : <?= $nombre ?></p>
                    <p>Diffusion : <?= $film ?></p>
                    <p>Nous vous avons envoyé une confirmation par mail.</p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>