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

  <body ng-app="app" class="nav-md">
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
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

             
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
                      <?php add_administrator(); ?>
              <div class="title_left">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-user-plus"></i> Add Administrator</button> 

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus"></i> Add Administrator</h4>
                        </div>
                        <div class="modal-body">
                           <form ng-app="app" name="process" action="" class="form-horizontal form-label-left" method="post" novalidate>

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">First Name <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="fname" name="fname" ng-model="fname" ng-minlength="2" ng-maxlength="20" type="text" required />
                              <div ng-messages="process.fname.$error">
                                    <span ng-message="minlength" class="label label-danger">Firstname is required</span>
                                    <span ng-message="maxlength" class="label label-danger">Firstname is too long</span>
                              </div>
                            </div>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Middle Name <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" name="mname" required="required" type="text" id="mname" name="mname" ng-model="mname" ng-minlength="2" ng-maxlength="20" type="text" required />
                              <div ng-messages="process.mname.$error">
                                  <span ng-message="minlength" class="label label-danger">Middlename is required</span>
                                  <span ng-message="maxlength" class="label label-danger">Middlename is too long</span>
                            </div>
                          </div>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Last Name <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="lname" name="lname" ng-model="lname" ng-minlength="2" ng-maxlength="20" type="text" required />
                              <div ng-messages="process.lname.$error">
                                  <span ng-message="minlength" class="label label-danger">Lastname is required</span>
                                  <span ng-message="maxlength" class="label label-danger">Lastname is too long</span>
                              </div>
                            </div>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Contact # <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="cnumber" name="cnumber" ng-model="cnumber" ng-minlength="11" ng-maxlength="11"  type="number" required />
                              <div ng-messages="process.cnumber.$error">
                                  <span ng-message="minlength" class="label label-danger">Contact is required</span>
                            </div>
                            </div>
                          </div>  

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="email" name="email" ng-model="email" ng-minlength="2" type="email">
                                     <div ng-messages="process.email.$error">
                                          <span ng-message="minlength" class="label label-danger">Email is required</span>
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
                          <th>Firstname</th>
                          <th>Middlename</th>
                          <th>Lastname</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                          <?php show_administrator(); ?>
                                  
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
            <strong><?php echo $footer ?> &copy; 2017 <?php echo date('Y')?> </strong>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


    <?php include 'scripts.php'; ?>

  </body>
</html>
