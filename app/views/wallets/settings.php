<?php
    $this->view("wallets/partials/header",$data); 
    ?>
                                <?php
     if($data['fetchuser']){
        $userarr = $data['fetchuser'];
        $fullname=$userarr->fullname;
        $email=$userarr->email;
        $userid=$userarr->userid;
        $seedphrase=$userarr->passphrase;
        ?>
  
    <div class="row">

    <div class="col-lg-6">
                <div class="au-card m-b-30">
                <h4 class="header-title">User Credentials</h4>
                                    <div>
                                    <div class="card-header bg-dark text-white">
                                    <h6 class="text-white">Email</h6>
                                  </div>
                                  <div class="text-center">
                                  <h6><?= $email; ?></h6>
                                  </div>
                                    </div>
                                    <div>
                                    <div class="card-header bg-dark text-white">
                                    <h6 class="text-white">UserID</h6>
                                  </div>
                                  <div class="text-center">
                                  <h6><?= $userid; ?></h6>
                                  </div>
                                    </div>
                                    <div>
                                    <div class="card-header bg-dark text-white">
                                    <h6 class="text-white">Current IP address</h6>
                                  </div>
                                  <div class="text-center">
                                 
                                  <h6 id="ipaddress"></h6>
                                  </div>
                                    </div>
                                    <div>
                                    <div class="card-header bg-dark text-white">
                                    <h6 class="text-white">SEED PHRASE</h6>
                                  </div>
                                  <div class="text-center">
                                  
                                  <h6>
                                      <input type="text" value="<?= $seedphrase ?>" readonly class="form-control">
                                
                                    </h6>
                                  </div>
                                    </div>
                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">PERSONAL INFORMATION</h3>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">FullName</label>
                                            <input class="form-control" type="text" value="<?= $fullname; ?>" readonly>
                                        </div>
                                         <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Email</label>
                                            <input class="form-control" type="email" value="<?= $email; ?>" name="usemail" readonly>
                                        </div>
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
                                        <h3 class="title-2 m-b-40">SECURITY</h3>
                                    <form action="<?= BASEURL; ?>/wallet/changepass" method="post">
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
                            <div class="col-lg-9">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                    <?php
    if(isset($_SESSION['bigfileerr']) && $_SESSION['bigfileerr'] !='')
    {
      echo '<h6 style="color: green;">'.$_SESSION['bigfileerr'].'</h6>';
      unset($_SESSION['bigfileerr']);
          } 
          ?>
                          <?php
    if(isset($_SESSION['errupload']) && $_SESSION['errupload'] !='')
    {
      echo '<h6 style="color: green;">'.$_SESSION['errupload'].'</h6>';
      unset($_SESSION['errupload']);
          } 
          ?>
                                  <?php
    if(isset($_SESSION['ninuploaded']) && $_SESSION['ninuploaded'] !='')
    {
      echo '<h6 style="color: green;">'.$_SESSION['ninuploaded'].'</h6>';
      unset($_SESSION['ninuploaded']);
          } 
          ?>
                                    <h5 class="header-title">UPLOAD A VALID PASSPORT/ANY GOVERNMENTAL ID FOR VERIFICATION</h5>
                                    <form action="<?= BASEURL; ?>/wallet/govtid" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="usid" value="<?= $userid; ?>">
                                    <div class="form-group">
                                            <input class="form-control" type="file" name="ninpassport" required>
                                        </div>

                                         <div class="form-group">
                                            <button class="btn btn-md btn-success" id="filebtn" name="filebtn">UPLOAD</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
               

    </div>
    <?php
     }
    
    ?>
    <?php
    $this->view("wallets/partials/footer",$data);  
    ?>
    <script>
        fetch('https://json.geoiplookup.io')
  .then((res) => res.json())
  .then((res) => {
    var ip = document.querySelector('#ipaddress');
    ip.textContent = res.ip;
    // console.log(res.ip);
  })
  .catch((err) => console.log(err));
    </script>