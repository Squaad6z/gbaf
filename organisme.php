<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Acteur</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <?php
    require_once('functions/auth.php');
    require_once('config.php');
    include('extensions/header.php')
    ?>
    <?php

    $id_acteur = isset($_GET['id']) ? $_GET['id'] : 0;

    $stmt = $conn->prepare("SELECT * FROM acteur WHERE id_acteur = :id");

    $stmt->bindValue(':id', $id_acteur);

    $stmt->execute();

    $acteur = $stmt->fetch(PDO::FETCH_ASSOC);

   
    if ($acteur) {
        $stmt = $conn->prepare("SELECT COUNT(*) FROM post WHERE id_acteur = :id");
        $stmt->bindValue(':id', $id_acteur);
        $stmt->execute();
        $comment_count = $stmt->fetchColumn();
        
    ?>
    
        <div class="element2">
            <div class="divimg2">
                <img class="img_acteur" src="<?php echo $acteur['logo']; ?>" alt="Logo <?php echo $acteur['acteur']; ?>">
            </div>
            <div class="acteurtxt2">
                <h3><?php echo $acteur['acteur']; ?></h3>
                <p><?php echo $acteur['description']; ?></p>
            </div>
        </div>
        <div class="comments">
            <?php echo $comment_count . " " . "Commentaires"?>
            <form action="comments_traitement.php" method="post">
            <input type="hidden" name="id_acteur" value="<?php echo $id_acteur; ?>">
            <input type="text" name="post" required><br>
                <div class ="groupe_btn">
                <button class="like_btn"><i class="fa fa-thumbs-up"></i></button>
                <button class="dislike_btn"><i class="fa fa-thumbs-down"></i></button>
                <a class="comments-btn" href="comments_traitement.php?id_acteur=<?php echo $id_acteur; ?>"><button type="submit" name="button_comments" > Ajouter un commentaire</button></a>
        </div></form>
        </div>
    <?php
    }
    ?>
<?php include('extensions/footer.php'); ?>
</body>

</html>