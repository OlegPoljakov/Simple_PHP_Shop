<?php include 'inc/header.php'; ?>

 
<div class="container">
    <div class="row">
        <!--<div class="card mt-6">-->
          <img class="card-img-top img-fluid" src="<?php echo $toyinfo['image']; ?>.jpg"  alt="">
          <div class="card-body">
            <h3 class="card-title"><?php echo $toyinfo['name']; ?></h3>
            <h4><?php echo $toyinfo['price']; ?>$</h4>
            <p class="card-text"><?php echo $toyinfo['fulldescription']; ?></p>
            <?php
                for($i = 1; $i <= $averagemark; $i++) 
                  {
                      ?>
                      <span class="text-warning">&#9733;</span>
                      <?php
                  } 
                if ($averagemark!=5) {
                    for ($i=1; $i<=5-$averagemark; $i++)  {
                        ?>
                        &#9734;
                        <?php
                    }
                }  
            ?>
            <p><?php echo $averagemark; ?> stars</p>
          </div>
        <!--</div>-->
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product Reviews
          </div>
          <div class="card-body">
            <?php
            foreach($reviews as $review)
              {   
                ?>  
                <p><?php echo $review->review; ?></p>    
                <small class="text-muted">Posted by <?php echo $review->consumername; ?> on <?php echo $review->date; ?></small>
                <hr>
                <?php
              } 
            ?>
            <!--<a href="#" class="btn btn-success">Leave a Review</a>-->
          </div>
        </div>
        <!-- /.card -->
     

      <form method="post" action="addreview.php"> <!--в ссылку подставляется номер корректируемой вакансии-->        
        <input type="hidden" name="toyid" value="<?php echo $toyinfo['toyid']; ?>"> 
        <div class="form-group">
          <label>First and Last name</label> 
          <input type="text" class="form-control" name="consumername" placeholder="Your first & second name" value="">
        </div>   
        <!--Оставляем отзывы-->
        <div class="form-group">
          <label>Your review</label> 
          <input type="text" class="form-control" name="review" value="Leave a comment">
        </div>   

        <div class="form-group">
          <label>Seize the item by numbers:</label>
          <select class="form-control" name="numofstars">
            <option value="1">1</option>
            <option value="2" selected="selected">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div> 
        <input type="submit" class="btn btn-default" value="submit" name="Оставить отзыв">
      </form>  

    </div>
  <!-- /.col-lg-9 -->    
</div>


<?php include 'inc/footer.php'; ?>  


