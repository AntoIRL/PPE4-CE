<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=PPE4;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>

    <head>

    </head>

    <body>

        <h1>Utilisateurs</h1>

<?php
$Req = $bdd->query('SELECT * FROM utilisateurs');

while ($donnees = $Req->fetch())
{
?>
        <table>

            <tr>

                <th>ID Compte</th>
                <th>Passwd</th>
                <th>Poste</th>
                <th>RefCentreVacance</th>
                <th>RefCadeau</th>
                <th>NbrENfant</th>
                <th>Mail</th>


            </tr>

            <tr>

                <td>ID Compte</td>
                <td>Passwd</td>
                <td>Poste</td>
                <td>RefCentreVacance</td>
                <td>RefCadeau</td>
                <td>NbrENfant</td>
                <td>Mail</td>

            </tr>

            <tr>

                <td>ID Compte</td>
                <td>Passwd</td>
                <td>Poste</td>
                <td>RefCentreVacance</td>
                <td>RefCadeau</td>
                <td>NbrENfant</td>
                <td>Mail</td>

            </tr>

            <tr>

                <td>ID Compte</td>
                <td>Passwd</td>
                <td>Poste</td>
                <td>RefCentreVacance</td>
                <td>RefCadeau</td>
                <td>NbrENfant</td>
                <td>Mail</td>

            </tr>

        </table>

<?php     
}
$Req->closeCursor();
?>

<h1>Centre de Vacance</h1>

<?php 
$Req2 = $bdd->query('SELECT * FROM centredevacance');

while ($donnees = $Req2->fetch())
{
?>        
        <table>
    
            <tr>

                <th>RefCentreVacance</th>
                <th>DateDébut</th>
                <th>DateFin</th>
                <th>Lieu</th>
                <th>Prix</th>


            </tr>

            <tr>

                <td>ID Compte</td>
                <td>Passwd</td>
                <td>Poste</td>
                <td>RefCentreVacance</td>
                <td>RefCadeau</td>

            </tr>

            <tr>

                <td>ID Compte</td>
                <td>Passwd</td>
                <td>Poste</td>
                <td>RefCentreVacance</td>
                <td>RefCadeau</td>

            </tr>

            <tr>

                <td>ID Compte</td>
                <td>Passwd</td>
                <td>Poste</td>
                <td>RefCentreVacance</td>
                <td>RefCadeau</td>

            </tr>
    
        </table>

<?php   
}

$Req2->closeCursor();

?>

<h1>Cadeau de Noël</h1>

<?php 
$Req3 = $bdd->query('SELECT * FROM cadeaudenoel');

while ($donnees = $Req3->fetch())
{
?>        
        <table>
    
            <tr>

                <th>RefCadeau</th>
                <th>Fournisseur</th>
                <th>Prix</th>
                <th>Description</th>


            </tr>

            <tr>

                <td>ID Compte</td>
                <td>Passwd</td>
                <td>Poste</td>
                <td>Description</td>

            </tr>

            <tr>

                <td>ID Compte</td>
                <td>Passwd</td>
                <td>Poste</td>
                <td>RefCentreVacance</td>

            </tr>

            <tr>

                <td>ID Compte</td>
                <td>Passwd</td>
                <td>Poste</td>
                <td>RefCentreVacance</td>

            </tr>

            <tr>

                <td>ID Compte</td>
                <td>Passwd</td>
                <td>Poste</td>
                <td>Description</td>

            </tr>

            <tr>

                <td>ID Compte</td>
                <td>Passwd</td>
                <td>Poste</td>
                <td>Description</td>

            </tr>

            <tr>

                <td>ID Compte</td>
                <td>Passwd</td>
                <td>Poste</td>
                <td>Description</td>

            </tr>

        </table>
    
    
<?php   
}
$Req3->closeCursor();

?>

    </body>

</html>
