<?php  

    include '../../functions/admin-session.php';
          
    $id = $_SESSION['ids'];
    $query = $conn->query("SELECT * FROM user_accounts_tbl WHERE id= $id");
    $row   = $query->fetch_object();
    $id    = $row->id;
    $office_region    = $row->office_region;
    $division         = $row->division;
    $unit_section     = $row->unit_section;
    $username         = $row->username;
    $statuss           = $row->status;
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
               <h2><i class="fa fa-user"></i> Admin Information</h2> 

              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                     
                    <form class="form-horizontal form-label-left" method="post" novalidate>
                        <input type="hidden" name="id" value="<?php echo $id?>">
                            
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Office/Region <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" placeholder="Optional" value="<?php echo $office_region ?>" name="office_region"  type="unit_section">
                            </div>
                          </div>  

                           <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Division <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" placeholder="Optional" value="<?php echo $division ?>" name="division"  type="unit_section">
                            </div>
                          </div>  

                           <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Unit/Section <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" placeholder="Optional" value="<?php echo $unit_section ?>" name="unit_section"  type="unit_section">
                            </div>
                          </div>  

                           <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" placeholder="Optional" value="<?php echo $username ?>" name="username"  type="unit_section">
                            </div>
                          </div>  

                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Status <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="status" class="form-control col-md-7 col-xs-12">
                                    <option value="<?php echo $statuss ?>"><?php echo $statuss ?></option>
                                    <option value="Activated">Activated</option>
                                    <option value="Deactivated">Deactivated</option>
                                </select>
                            </div>
                          </div>

                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                              <button type="submit" name="btn-back" class="btn btn-primary"><i class="fa  fa-mail-reply"></i> Back</button>
                              <?php 
                                if(isset($_POST['btn-back'])){
                                  echo '<script>window.location.href="add-user.php"</script>';
                                }
                              ?>
                              <?php modify_user_account(); ?>
                              <button type="submit" name="btn-update" class="btn btn-success"><i class="fa  fa-pencil"></i> Update</button>
                              <?php deactivate_user_account(); ?>
                               <?php 
                              if($statuss == 'Deactivated'){
                              echo "<button type='submit' name='btn-deactivate' disabled class='btn btn-danger'><i class='fa  fa-pencil'></i> Deactivate</button>";
                              }else{
                              echo "<button type='submit' name='btn-deactivate' class='btn btn-danger'><i class='fa  fa-danger'></i> Deactivated</button>";
                              }
                              ?>
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


    <?php include 'scripts.php'; ?>

  </body>
</html>
