<?php include 'inc/header.php'; ?>

<div class="container">
<?php 
$n=1;
foreach($toys as $toy)
{
  if (($n % 3) == 1) 
    {
      ?>
      <div class="row"> 
    <?php
    }
  ?>  
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <a href="item.php?id=<?php echo $toy->toyid;?>"><img class="card-img-top" src="<?php echo $toy->image; ?>.jpg"  alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="item.php?id=<?php echo $toy->toyid;?>"><?php echo $toy->name; ?></a>  
                    </h4>
                    <h5><?php echo $toy->price; ?>$</h5>
                    <p class="card-text"><?php echo $toy->shortdescription; ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">
                          <?php 
                              $count=$averagemarks[$toy->id];
                              for ($i = 1; $i<=$count; $i++) {
                              ?>
                              &#9733;
                              <?php
                              }
                              if ($count!=5) {
                                  for ($i=1; $i<=5-$count; $i++)  {
                                    ?>
                                    &#9734;
                                    <?php
                                  }
                              }
                              $db = Database::getConnect();
                              $db->query("SELECT * FROM consumerresponse WHERE consumerresponse.toyid=$toy->id");
    $result = $db->resultSet();
    var_dump($result);
                          ?>   
                  </small>
                </div>
        </div>
      </div>  
<?php  
if (($n % 3) == 0)
  {
    ?>
     </div>
<?php       
  }  
$n=$n+1;
}
?>
</div>

<?php include 'inc/footer.php'; ?>  

