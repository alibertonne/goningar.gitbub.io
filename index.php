<?php session_start();include("func.php"); ?>
<?php include'template/nav.php';?>
  <div class="container" >
<div class="row">
  <!-- articles -->
  <div class="col-md-9">
    <div class="card-header"><h1>Les Derniers Articles</h1> </div>

<?php $get_art= "SELECT * FROM articles";  
    $run_art = mysqli_query($db,$get_art);
    while($row_art=mysqli_fetch_array($run_art)){
$art_id = $row_art['article_id'];
   $art_title = $row_art['article_title'];
$art_desc = $row_art['article_desc'];
       $art_img = $row_art['article_image'];
   $article_description=substr($art_desc,0,100);
$get_cat= "SELECT * FROM categories"; 
 $run_cat = mysqli_query($db,$get_cat);
    while($row_cat=mysqli_fetch_array($run_cat)){
$cat_id = $row_cat['cat_id'];
    $cat_title = $row_cat['cat_title'];}?>

<div class="card " style="margin-top: 10px" width: 18rem;>
    <div class="row no-gutters">
        <div class="col-sm-5 d-flex" style="background: #868e96;">
     <img class="card-img-top h-100"   src='admin_area/product_images/<?php echo $art_img ?>' >        </div>
        <div class="col-sm-7 d-flex">
   
     <div class="card-body h-100" style="width: 90%">
         <h6 class="card-title"  style="text-align:right;"><?php echo  $row_art['dat'] ?></h6>

                <h5 class="card-title"><?php echo $art_title  ?></h5>
                <p class="card-text"><?php echo  $article_description ?></p>
                <a class="btn-sm btn-warning stretched-link" href="lire.php?art_id=<?php echo$art_id ?>" class="stretched-link">Continuer de lire</a>
             
            </div>
        </div>
    </div>
</div>

<?php
} ?>

 <div class="col-md-9">
    <div class="card-header"><h1>Les Derniers Medias</h1> </div>

<?php $get_media= "SELECT * FROM media";  
    $run_media = mysqli_query($db,$get_media);
    while($row_media=mysqli_fetch_array($run_media)){
$media_id = $row_media['media_id'];
   $media_title = $row_media['media_title'];
$media_desc = $row_media['media_desc'];
       $media_img = $row_media['media_image'];
   $media_description=substr($media_desc,0,100);
$get_cat= "SELECT * FROM categories"; 
 $run_cat = mysqli_query($db,$get_cat);
    while($row_cat=mysqli_fetch_array($run_cat)){
$cat_id = $row_cat['cat_id'];
    $cat_title = $row_cat['cat_title'];

}
  ?>
 
<div class="card"  style="margin-top: 10px;width: 51rem" >
    <div class="row no-gutters">
    
   <div class="col-sm-5" style="background: #868e96;" >
    <div class="embed-responsive embed-responsive-16by9">
  <iframe  class="card-img-top h-100" max-height='150px' class="embed-responsive-item" src='admin_area/product_images/<?php echo $media_img ?>'></iframe>
</div> 
</div>
        <div class="col-sm-7">
            <div class="card-body" style="width: 100%">
   <h6 class="card-title"  style="text-align:right;"><?php echo  $row_media['dat'] ?></h6>

                <h5 class="card-title"><?php echo $media_title  ?></h5>
                <p class="card-text"><?php echo  $media_description ?></p>
                <a class="btn-sm btn-warning stretched-link" href="media_desc.php?media_id=<?php echo$media_id ?>" class="stretched-link">Continuer de lire</a>
             
            </div>
        </div>
    </div>
</div>
   
<?php
}

?>
</div>
</div>

<div class="col-md-3">
  <div class="list-group">
  <b> <a href="#" class="list-group-item" style="color:#003366">Les Categories</a></b>
 <?php 
 $get_cat= "SELECT * FROM categories";  
    $run_cat = mysqli_query($db,$get_cat);
    while($row=mysqli_fetch_array($run_cat)){
$cat_id = $row['cat_id'];
   $cat_title = $row['cat_title'];

echo " <b><a href='categorie.php?cat_id=$cat_id' style='color:;' class='list-group-item' > $cat_title  </a></b>";
        
    }
     ?> 
        </div>

<div class="card" style="margin-top: 10px;color:#003366">
  
  <div class="card-header">
<B>les Articles récents </B>
</div>
<div class="card-body">
<?php 

$get_art= "SELECT * FROM articles";  
    $run_art = mysqli_query($db,$get_art);
    while($row_art=mysqli_fetch_array($run_art)){
$art_id = $row_art['article_id'];
$art_title=$row_art['article_title'];
echo "<p> <img style=' width:50px; height:25px' src='svg/hand-o-right.svg'>
 <a href='lire.php?art_id=$art_id'>$art_title</a> </p> ";

}
?>

   </div>

</div>

      </div>

    
</div>


</div>

<div class="col-md-12" style="height:20Px;margin-top:30px;background-color: white">
</div>
 <div class="container flex-grow-1 ">
     <div class="row py-5">
         <div class="col-lg-12 text-black text-center">
             <h1 class="display-3 ">Qui sommes nous</h1>
             <p class="lead mb-0">La Fédération des Associations des Parents d’Elèves wilaya de SETIF (FAPE W/S) a
été créée en 1962, suivant l’agrément n° 92/058 du 06/09/1992. Elle est constituée par l’union
des Associations des Parents d’Elèves des établissements scolaires des trois niveaux
d’enseignement (primaire, moyen et secondaire).
La Fédération est dirigée par un conseil de 11 membres, élus pour trois années par
l’assemblée générale. Le conseil d’administration décide des grandes orientations stratégiques
de la fédération. Il se réunit une fois au moins tous les 3 mois sur convocation du président,
ou sur la demande du un tiers de ses membres.
L’intégration à la FAPE se fait par adhésion, qui est ouverte à toutes les Associations
des Parents d’Elèves des établissements scolaires installés sur le territoire de la province de SETIF...<?php echo "<a href='presentation.php'>Cliquer pour lire la suite </a>"; ?> </p>
         </div>
     </div>
   </div>
   <div class="col-md-12" style="height:20Px;background-color: white">
</div>

<section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <form>
                            <h2>Souscrire à Notre Newletter</h2>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Entrer votre email">
                                <span class="input-group-btn">
                                    <button class="btn" type="submit">S'inscrire maitenant</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<iframe
    src="https://player.twitch.tv/?channel=goningar&parent=ns01.000webhost.com/&muted=true"
    height="720"
    width="1280"
    frameborder="0"
    scrolling="no"
    allowfullscreen="true">
</iframe>
<iframe src="https://player.vimeo.com/video/462425759" width="640" height="480" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

<?php include'template/footer.php' ?>
</body>

</html>
 



