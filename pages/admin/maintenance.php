<?php 
    include '../../functions/admin-session.php';

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title ?></title>
    <!-- Head links here -->
      <?php include 'head-links.php'; ?>
    <!-- // End of head links -->
  </head>

  <body class="nav-md" ng-app="app">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-wrench"></i> <span><?php echo $title ?></span></a>
            </div>

            <div class="clearfix"></div>

            

            <br />
                <!-- Sidebar here -->
                  <?php include 'sidebar.php'; ?>
                <!-- // Sidebar end -->

          </div>
        </div>

                 <!-- top navigation -->
                    <?php include 'top-navigation.php'; ?>
                <!-- /top navigation -->
       
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h2><i class="fa fa-gears"></i> Admin Maintenance</h2> 

              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <?php modify_maintenance();?>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" method="post" ng-app="app" name="process" action="" novalidate>
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="title" name="title"  type="text" value="<?php echo $title ?>" required />
                            </div>
                          </div>


                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Footer <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="footer" name="footer" type="text" value="<?php echo $footer ?>" required />
                            </div>
                          </div>

                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                              <button type="submit" name="btn-update" class="btn btn-success"><i class="fa  fa-pencil"></i> Update</button>
                            </div>
                          </div>
                      </form>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
       <footer>
          <div class="pull-Left">
           <strong> <?php echo $footer ?> &copy; <?php echo date('Y')?></strong>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


    <?php include 'scripts.php'; ?>

  </body>
</html>
