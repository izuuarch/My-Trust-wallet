<?php
$this->view("admin/activate"); 
$this->view("admin/partials/header"); 
$this->view("admin/partials/navbar");
?>
     <?php
     if($data['fetchadm']){
        $userarr = $data['fetchadm'];
        $fullname=$userarr->fullname;
        $email=$userarr->email;
        $userid=$userarr->userid;
        ?>
         <div class="main-content-inner">
                <!-- alert srea start -->
                <div class="alert-area">
                    <div class="row">
                        <!-- normal alert area start -->
                        
                        <div class="col-lg-6 mt-5">
                            <div class="card">
                            <?php
    if(isset($_SESSION['successchange']) && $_SESSION['successchange'] !='')
    {
      echo '<h6 style="color: green;">'.$_SESSION['successchange'].'</h6>';
      unset($_SESSION['successchange']);
          } 
          ?>
                                <div class="card-body">
                                    <h4 class="header-title">Update Profile</h4>
                                    <form action="<?= BASEURL; ?>/admin/update" method="post">
                                        <input type="hidden" name="usid" value="<?= $userid; ?>">
                                    <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">FullName</label>
                                            <input class="form-control" type="text" value="<?= $fullname; ?>" name="usfullname">
                                        </div>
                                         <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Email</label>
                                            <input class="form-control" type="email" value="<?= $email; ?>" name="usemail">
                                        </div>

                                         <div class="form-group">
                                          
                                           
                                            <button class="btn btn-md btn-success" id="Updateuserbtn" name="updatebtn">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- normal alert area end -->
                        <!-- link alert area start -->
                        <div class="col-lg-6 mt-5">
                            <div class="card">
                            <?php
    if(isset($_SESSION['notmatch']) && $_SESSION['notmatch'] !='')
    {
      echo '<h6 style="color: green;">'.$_SESSION['notmatch'].'</h6>';
      unset($_SESSION['notmatch']);
          } 
          ?>
                       <?php
    if(isset($_SESSION['passchange']) && $_SESSION['passchange'] !='')
    {
      echo '<h6 style="color: green;">'.$_SESSION['passchange'].'</h6>';
      unset($_SESSION['passchange']);
          } 
          ?>
                                <div class="card-body">
                                    <h4 class="header-title">Update Password</h4>
                                    <form action="<?= BASEURL; ?>/admin/changepass" method="post">
                                    <input type="hidden" name="usid" value="<?= $userid; ?>">
                                    <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">New Password</label>
                                            <input class="form-control" type="Password" required="" name="newpwd">
                                        </div>
                                                  <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Confirm New Password</label>
                                            <input class="form-control" type="Password" required="" name="comnewpwd">
                                        </div>

                                                <div class="form-group">
                                          
                                           
                                            <button class="btn btn-md btn-success"  type="submit" name="passbtn">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                    
                    </div>
                </div>
                <!-- alert srea end -->
            </div>
        <?php
     }
     ?>
<?php
$this->view("admin/partials/footer"); 
$this->view("admin/partials/scripts"); 
?>