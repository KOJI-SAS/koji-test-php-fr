<!--Formulaire page d'accueil -->
<div class="container" style="margin-top:30px">
    <div class="row d-flex flex-row justify-content-center align-items-start">
        <div class="col-sm-8">
            <div class="error"></div>
            <form id="form1" method="post" action="<?=BACKEND."getPixels.php"?>">
            <div class="input-group mb-3">
                <input type="text" name="userNumber" class="form-control" placeholder="Entrez un chiffre compris entre 0 et 99" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Envoyer</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

