<?php require ('header.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-12 pt-5 p-0 text-center">
            <form method="post" action="http://92.222.64.223/~arno/portfolio/contact.php">
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="prenom" class="form-control" placeholder="Prenom">
                    </div>
                    <div class="col-6">
                        <input type="text" name="nom" class="form-control" placeholder="Nom">
                    </div>
                </div>
                <div class="form-group pt-5">
                    <label for="exampleInputEmail1">Votre adresse mail</label>
                    <input type="email" name="expediteur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="entrer mail">

                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" name="envoi" class="btn btn-primary">envoyer</button>
            </form>
        </div>
    </div>
</div>

<?php 
if(isset($_POST['envoi'])){
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$message = $_POST['message'];
$expediteur = $_POST['expediteur'];

$from = $expediteur;
$to = 'zerathearno@gmail.com';
$subject = "PHP Mail Test script";
$message = $message;

$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo "Mail envoyer";
}
?>
<?php require ('footer.php'); ?>