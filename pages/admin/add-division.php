<?php
    
    include '../../functions/admin-session.php';

?>

<!DOCTYPE html>
<html lang="en">


    <!-- Head links here -->
      <?php include 'head-links.php'; ?>
    <!-- // End of head links -->


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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-user-plus"></i> Add Divsion</button> 
                <?php add_division(); ?>
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus"></i> Add Division</h4>
                        </div>
                        <div class="modal-body">
                           <form ng-app="app" name="process" action="" class="form-horizontal form-label-left" method="post" novalidate>

                            <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Division <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="division" name="division" ng-model="division" ng-minlength="2" type="division" required="">
                                     <div ng-messages="process.division.$error">
                                          <span ng-message="minlength" class="label label-danger">Division is too long</span>
                                    </div>
                            </div>
                          </div>  
                         
                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                              <button type="submit" name="btn-add" class="btn btn-success" ng-disabled="!process.$valid">Confirm</button>
                            </div>
                          </div>
                      </form>
                        </div>
                      </div>
                    </div>
                  </div> 

              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    
                       <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Division</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                                 <?php  show_division(); ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-left">
            <strong><?php echo $footer ?> &copy; <?php echo date('Y')?> </strong>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


    <?php include 'scripts.php'; ?>

  </body>
</html>
