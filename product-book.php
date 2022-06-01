<?php include 'info/header.php';  

$sql = "SELECT * FROM `product`";
$result = mysqli_query($db,$sql);
if($result){
    $products = mysqli_fetch_object($result);
}
else{
    echo "HEllo world!";
}

?>
<!-- Slider  -->    
<div class="container">
  <div class="row ">
    <div class="col-12 col-sm-12 col-md-12 mb-12 col-lg-12 d-flex justify-content-between mt-5" > 
    <table class="table table-hover" style="width:300px;">
  <tr>
      <td> <h2>Բեսթսելլեր</h2></td>
    </tr>
    <tr>
      <td> <h2>Նոր տեսականի</h2></td>
    </tr>
    <tr>
      <td><h2>Գեղարվեստական</h2> </td>
    </tr>
    <tr>
      <td><h2>Պատանեկան</h2> </td>
    </tr>
    <tr>
      <td><h2>Մանկական</h2> </td>
    </tr>
  </tbody>
</table>
<?php include 'info/slider.php';  ?> </div> 

<?php include 'info/card.php';  ?> 
</div> </div>

<?php include 'info/footer.php'; ?>
