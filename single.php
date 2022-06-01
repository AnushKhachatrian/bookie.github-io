<?php include 'info/header.php'; 

if(isset($_GET['id'])){

  $id_pro = $_GET['id'];
  $sql = "SELECT * FROM `product` WHERE `id` = $id_pro";
  $result = mysqli_query($db,$sql);
  $product = mysqli_fetch_object($result);
}

?>
<?php include 'info/nav-menu.php';?>
<div class="container d-flex mt-5 mb-5">
<div class="col-lg-6">
<div class="container">
  <div class="col">
    <div class="card" style="width:30rem;">
      <img src="image/<?php echo $product->img;?>"  alt="...">
      <div class="card-body">
      </div>
    </div>
  </div>
</div></div>
<div class="col-6 col-sm-6 col-md-6 col-lg-5 col-xl-6 col-xxl-6">
<div class="container">
<ul class="list-group list-group-flush">
<li class="list-group-item d-flex justify-content-center align-items-start">
    <span > <h1><?php echo $product->name;?></h1></span>
  </li>  <br>
  <li class="list-group-item d-flex justify-content-between align-items-start"><h3>Author</h3>
    <span > <h2><?php echo $product->author;?></h2></span>
  </li><br>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <h3>Price</h3>
   <span > <h2><?php echo $product->price;?> $</h2></span>
  </li><br>
<li class="list-group-item"> 
<h4><span ><?php echo $product->info;?></h2></span></h4> <br> <br>

<button class="button-88" role="button"> <a href="#"> Add card</a> </button></li>
</div>
</div>
</div>
<div class="container bg-dark">

</div>

<?php include 'info\footer.php';?>