<?php  
    include '../functions/guest-session.php';
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
              <a href="index.html" class="site_title"><i class="fa fa-user"></i> <span><?php echo $title ?></span></a>
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
              <div class="title_left">
                 <h1><i class="fa fa-user"></i> Client Information</h1>

              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                      <form ng-app="app" name="process" action="" class="form-horizontal form-label-left" method="post" novalidate>

                      <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">First Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <input class="form-control col-md-7 col-xs-12" type="text" name="date" value="<?php echo date('Y-M-d')?>">
                            </div>
                      </div>

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Request Number <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="fname" disabled name="requestnum" value="<?php echo rand(111111,999999);?>" type="text" required />
                            </div>
                          </div>

                            <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">First Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" type="text" id="fname" name="fname" ng-model="fname" ng-minlength="2" ng-maxlength="20" type="text" required />
                              <div ng-messages="process.fname.$error">
                                  <span ng-message="minlength" class="label label-danger">Firstname is too short</span>
                                  <span ng-message="maxlength" class="label label-danger">Firstname is too long</span>
                            </div>
                          </div>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Middle Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" type="text" id="mname" name="mname" ng-model="mname" ng-minlength="2" ng-maxlength="20" type="text" required />
                              <div ng-messages="process.mname.$error">
                                  <span ng-message="minlength" class="label label-danger">Middlename is too short</span>
                                  <span ng-message="maxlength" class="label label-danger">Middlename is too long</span>
                            </div>
                          </div>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Last Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="lname" name="lname" ng-model="lname" ng-minlength="2" ng-maxlength="20" type="text" required />
                              <div ng-messages="process.lname.$error">
                                  <span ng-message="minlength" class="label label-danger">Lastname is too short</span>
                                  <span ng-message="maxlength" class="label label-danger">Lastname is too long</span>
                              </div>
                            </div>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Division <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="division" class="form-control col-md-7 col-xs-12">
                                    <option value="">SELECT DIVISION</option>
                                    <option value="">One Stop Shop</option>
                                    <option value="">PIMD</option>
                                    <option value="">ARD</option>
                                    <option value="">LSD</option>
                                    <option value="">POSMD</option>
                                    <option value="">AFMD</option>
                                    <option value="">PERSONEL</option>
                                    <option value="">MEID</option>
                                </select>
                            </div>
                          </div>

                          

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"><h2>Request Category</h2>
                            </label>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Type of Service Request <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="division" class="form-control col-md-7 col-xs-12">
                                    <option value="">SOFTWARE</option>
                                    <option value="">HARDWARE</option>
                                    <option value="">NETWORK</option>
                                    <option value="">OTHERS</option>
                                </select>
                            </div>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Request Description <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea class="form-control col-md-7 col-xs-12" id="request" name="request" ng-model="request" ng-minlength="2" ng-maxlength="20" type="text" required /></textarea>
                              <div ng-messages="process.request.$error">
                                  <span ng-message="minlength" class="label label-danger">Request Description is too short</span>
                                  <span ng-message="maxlength" class="label label-danger">Request Description is too long</span>
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

<?php 
    include 'scripts.php'; 
    ?>

  </body>
</html>
