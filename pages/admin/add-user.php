<?php
    
    include '../../functions/admin-session.php';

?>

<!DOCTYPE html>
<html lang="en">


    <!-- Head links here -->
      <?php include 'head-links.php'; ?>
    <!-- // End of head links -->


  <body class="nav-md">
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
              <?php add_user_account(); ?>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-user-plus"></i> Add User accounts</button> 

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus"></i> Add user account</h4>
                        </div>
                        <div class="modal-body">
                           <form ng-app="app" name="process" action="" class="form-horizontal form-label-left" method="post" novalidate>

                           <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Office/Region <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <select name="office_region" class="form-control col-md-7 col-xs-12">
                                    <option value="">SELECT OFFICE REGION</option>
                                    <option value="Central Office">Central Office</option>
                                    <option value="NCR">NCR</option>
                                    <option value="Region I">Region I</option>
                                    <option value="Region II">Region II</option>
                                    <option value="Region III">Region III</option>
                                    <option value="Region IV">Region IV</option>
                                    <option value="Region V">Region V</option>
                                    <option value="Region VI">Region VI</option>
                                    <option value="Region VII">Region VII</option>
                                    <option value="Region VIII">Region VIII</option>
                                    <option value="Region IX">Region IX</option>
                                    <option value="Region X">Region X</option>
                                    <option value="Region XI">Region XI</option>
                                    <option value="Region XII">Region XII</option>
                                    <option value="Region XIII">Region XIII</option>
                                </select>
                            </div>
                          </div>  

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Division <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                                <select name="division" class="form-control col-md-7 col-xs-12">
                                    <option value="">SELECT DIVISION</option>
                                    <option value="OED">OED</option>
                                    <option value="DED">DED</option>
                                    <option value="PIMD">PIMD</option>
                                    <option value="ARD">ARD</option>
                                    <option value="LSD">LSD</option>
                                    <option value="POSMD">POSMD</option>
                                    <option value="AFMD">AFMD</option>
                                    <option value="MEID">MEID</option>
                                </select>
                            </div>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Unit/Section <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" placeholder="Optional" name="unit_section"  type="unit_section">
                            </div>
                          </div>  

                            <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="username" name="username" ng-model="username" ng-minlength="2" type="username">
                                     <div ng-messages="process.username.$error">
                                          <span ng-message="minlength" class="label label-danger">Username is required</span>
                                    </div>
                            </div>
                          </div>  
                         

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Password <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="pass" name="pass" ng-model="pass" ng-required="true" ng-minlength="6" ng-maxlength="9" type="password">
                              <div ng-messages="process.pass.$error">
                                        <span ng-message="minlength" class="label label-danger">Password too short</span>
                                        <span ng-message="maxlength" class="label label-danger">Password too long</span>
                              </div>
                            </div>
                          </div>  

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Repeat Password <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" name="cpassword" id="cpassword" ng-model="cpassword" ng-required="true" ng-minlength="6" ng-maxlength="9" type="password">
                              <div ng-messages="process.cpassword.$error">
                                    <span ng-show="cpassword !== pass" class="label label-danger">Password not match!</span>
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
                          <th>Office/Region</th>
                          <th>Division</th>
                          <th>Unit/Section</th>
                          <th>Username</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                          <?php show_user_account(); ?>
                                  
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
