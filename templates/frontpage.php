<?php include 'inc/header.php'; ?>

<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9 col-sm-offset-2">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Find A Job</h1>
            <form action="index.php" method="GET">
              <select name="category" id="" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                  <option value="<?php echo $category->id; ?>"><?php echo $category->name ?></option>
                <?php endforeach; ?>
              </select>
              <input type="submit" class="btn btn-lg btn-primary" value="FIND">
            </form>

          </div>
          <?php foreach($jobs as $job): ?>
          <div class="row">
            <div class="col-md-10">
              <h2><?php echo $job->job_title; ?></h2>
              <p><?php echo $job->description; ?></p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
          <?php endforeach; ?>
        </div><!--/.col-xs-12.col-sm-9-->
          

      </div><!--/row-->

      <hr>



<?php include 'inc/footer.php'; ?>
