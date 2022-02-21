<?php
/**
 * 1. Le dossier SQL contient l'export de ma table user.
 * 2. Trouvez comment importer cette table dans une des bases de données que vous avez créées, si vous le souhaitez vous pouvez en créer une nouvelle pour cet exercice.
 * 3. Assurez vous que les données soient bien présentes dans la table.
 * 4. Créez votre objet de connexion à la base de données comme nous l'avons vu
 * 5. Insérez un nouvel utilisateur dans la base de données user
 * 6. Modifiez cet utilisateur directement après avoir envoyé les données ( on imagine que vous vous êtes trompé )
 */


$server = 'localhost';
$db = 'bdd_cours';
$user = 'root';
$pass = '';
// TODO Votre code ici.
try {

    $pdo = new PDO("mysql:host=$server;dbname=$db;charset=utf8mb4", $user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Nous sommes connectés à la base de donnés.";

    $requestU = "
       INSERT INTO user (nom ,firstname ,mail, password)
       VALUES('coquelet','samuel', 'coquelet.samuel@gmail.com','Naruto1990');
   ";
    $pdo->exec($requestU);

}
catch(PDOException $exception) {
    echo $exception->getMessage();
}




/**
 * Théorie
 * --------
 * Pour obtenir l'ID du dernier élément inséré en base de données, vous pouvez utiliser la méthode: $bdd->lastInsertId()
 *
 * $result = $bdd->execute();
 * if($result) {
 *     $id = $bdd->lastInsertId();
 * }
 */