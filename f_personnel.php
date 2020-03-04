    <?php
    session_start();
    ?>
    <?php
        if(isset($_GET['Deconnexion'])){
            session_destroy();
            header("location:f_personnel.php");
        }

    ?>

        <?php
            require_once 'ClassPersonnel.php';
            
            if(isset($_POST["Save"])){
                $code = $_POST['code'];
                $nom = $_POST['Nom'];
                $prenom = $_POST['Prenom'];
                $Sexe=$_POST['Sexe'];
                $Date_Naissance=$_POST['Date_Naissance'];
                $Nationalité=$_POST['Nationalité'];
                $Téléphone=$_POST['Téléphone'];
                $Email=$_POST['Email'];
                $Type= $_POST['Type'];
              //appelation fonction insertionPersonel lan ki nan classPersonnel.php an.
                InsertionPersonel($code,$nom,$prenom,$Sexe,$Date_Naissance,$Nationalité,$Téléphone,$Email,$Type);
                
                                   
        }


    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="margin-left:100px;color:#58787f;">
    <form class="form-inline my-2 my-lg-0" method="get" action="">
      <input type="text" placeholder="Recherche" name="Position" style="background:#293d42;border-radius:10px 0px 0px 0px;box-shadow:inset 1px 1px 10px black;color:#f99f3f;width:800px;text-align:center;border:2px solid #905009;height:40px;"> 
      <input type="submit" value="Recherche" name="Recherche" style="border-radius:0px 10px 0px 0px;height:40px;border:2px solid #f99f3f;color:#f99f3f;">
    </form>
  </div>
  <form action="" method="get">
    <input type="submit" onclick="alert('Votre Session va etre detuite');" name="Deconnexion" value="Déconnexion" style="background:#293d42;box-shadow:inset 1px 1px 5px black;margin-left:50px;height:40px;border:2px solid #afb6b7;color:#58787f;">
  </form>
  
</nav>       
</header>
<div style="overflow:auto;color:white;font-family:verdana;font-size:12px;height:auto;width:830px;border:1px solid #bcc0c1;float:right;margin-right:10px;margin-top:35px;box-shadow:1px 1px 5px #84a7ae;">
        <table class="table" style="">
        <thead style="background:#293d42;">
            <tr>
            <th scope="col">Code</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Sexe</th>
            <th scope="col">Date_Naissance</th>
            <th scope="col">Nationalité</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody style="background:#d27f07;">
                    <?php
                    if(isset($_SESSION['Personnel'])){
                        if(!empty($_SESSION['Personnel'])){
                        if(isset($_GET['Recherche'])){
                        $Position = (int)$_GET['Position'];
                        echo("<tr>");
                        echo('<td>'.$_SESSION['Personnel'][$Position]['code'].'</td>');
                        echo('<td>'.$_SESSION['Personnel'][$Position]['nom'].'</td>');
                        echo('<td>'.$_SESSION['Personnel'][$Position]['prenom'].'</td>');
                        echo('<td>'.$_SESSION['Personnel'][$Position]['Sexe'].'</td>');
                        echo('<td>'.$_SESSION['Personnel'][$Position]['Date_Naissance'].'</td>');
                        echo('<td>'.$_SESSION['Personnel'][$Position]['Nationalité'].'</td>');
                        echo('<td>'.$_SESSION['Personnel'][$Position]['Téléphone'].'</td>');
                        echo('<td>'.$_SESSION['Personnel'][$Position]['Email'].'</td>');
                        echo('<td>'.$_SESSION['Personnel'][$Position]['Type'].'</td>');
                        echo("</tr>");
                        }
                    }
                    }
                        
                ?>  
        </tbody>
      
        </table>
</div>

<div style="background:#293d42;color:white;font-family:verdana;overflow:auto;box-shadow:1px 1px 5px #84a7ae;height:auto;width:830px;border:1px solid #bcc0c1;float:right;margin-right:10px;margin-top:15px;font-size:12px;">
<table class="table" style="font-size:12px;">
        <thead style="background:#d27f07;">
            <tr>
            <th scope="col">Code</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Sexe</th>
            <th scope="col">Date_Naissance</th>
            <th scope="col">Nationalité</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody style="">
            <?php
            if(isset($_SESSION['Personnel'])){
                if(!empty($_SESSION['Personnel'])){
            foreach($_SESSION['Personnel'] as $t){
                    echo("
                        <tr>
                            <td>$t[code]</td>
                            <td>$t[nom]</td>
                            <td>$t[prenom]</td>
                            <td>$t[Sexe]</td>
                            <td>$t[Date_Naissance]</td>
                            <td>$t[Nationalité]</td>
                            <td>$t[Téléphone]</td>
                            <td>$t[Email]</td>
                            <td>$t[Type]</td>
                        </tr>
                    
                    ");
                    }
                }
            }
        ?>
        </tbody>
        </table>    
</div>
        <div style="height:auto;width:400px;box-shadow:1px 1px 5px #84a7ae;margin-left:10px;margin-top:35px;">
            <div class="card" style="width:100%">
                <div class="card-header" style="font-family:algerian;text-align:center;color:white;FONT-WEIGHT:BOLD;background:#293d42;">
                     Enregistrement du personnel
                </div>
                <div class="card-body" style="background:#d27f07;">
                <form action="" method="post" style="font-size:16px;">
                        <input type="text" name="code" class="form-control" style="text-align:center;font-size:14px;font-family:algerian;" placeholder="Code">
                    <div class="form-row" style="margin-top:10px;">
                        <div class="col">
                            <label for="" style="font-size:14px;font-family:verdana;color:white;">Nom</label>
                        <input type="text" class="form-control" name="Nom">
                        <label for="" style="font-size:14px;font-family:verdana;color:white;" >Prenom</label>
                        <input type="text" class="form-control" name="Prenom">
                        <label for="" style="font-size:14px;font-family:verdana;color:white;" >Sexe</label>
                        <input type="text" class="form-control" name="Sexe">
                        <label for="" style="font-size:14px;font-family:verdana;color:white;" >Date naissance</label>
                        <input type="date" class="form-control" style="color:#58787f;font-family:algerian;" name="Date_Naissance">
                        </div>
                        <div class="col">
                            <label for="" style="font-size:14px;font-family:verdana;color:white;" >Nationalité</label>
                            <input type="text" class="form-control" name="Nationalité">
                            <label for="" style="font-size:14px;font-family:verdana;color:white;" >Téléphone</label>
                            <input type="text" class="form-control" name="Téléphone">
                            <label for="" style="font-size:14px;font-family:verdana;color:white;" >Email</label>
                            <input type="text" class="form-control" name="Email">
                            <label for="" style="font-size:14px;font-family:verdana;color:white;" >Type</label>
                            <select id="inputState" class="form-control" style="color:#58787f;font-family:algerian;" name="Type">
                                <option>NULL</option>
                                <option value="Etudiant">Etudiant</option>
                                <option value="Professeur">Professeur</option>
                                <option value="Administrateur">Administrateur</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" onclick="alert('Voulez-vous vraiment enregistrer ?');" name="Save" class="btn btn-secondary btn-lg btn-block" style="font-family:algerian;background:#293d42;margin-top:25px;">Save</button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>