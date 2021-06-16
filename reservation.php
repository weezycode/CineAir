<?php
include('config/config.php');
if (file_exists('include/req.php')) {
    include('include/req.php');
}
include('include/head.php');
//include('../include/nav.php'); 
?>
<div class="container">
    <h2 id="liste-films">Réserver votre place gratuitement</h2>
    <div class="row">
        <div class="col-sm-4">
            <!-- Article 1  -->
            <div class="card shadow-lg reserver">
                <?= $film; ?>
                <div class="card-body">
                    <h4 class="card-title"><?= $titre; ?></h4>
                    <p class="card-text"><?= $projection; ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-8 input">
            <h3> Veuillez renseigner ces informations</h3>

            <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?= $titre; ?>">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Prénom</label>
                    <span class="error">* <?= $nameErr; ?></span>
                    <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Prénom">

                </div>
                <div class="mb-3 display-none">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="text" name="titre" value="<?= $titre; ?>" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3 display-none">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="text" name="details" value="<?= $projection; ?>" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Adresse email</label>
                    </label><span class="error">* <?= $emailErr; ?></span>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label for="sel1">Nombre de personnes</label>
                    </label><span class="error"> <?= $nombreError; ?></span>
                    <select class="form-control" id="sel1" name="nombre">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <button type="submit" class="envoie btn btn-success">Envoyer</button>
            </form>
        </div>
    </div>