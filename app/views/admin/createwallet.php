<?php
$this->view("admin/activate"); 
$this->view("admin/partials/header"); 
$this->view("admin/partials/navbar");
?>
   <div class="main-content-inner">
                <!-- alert srea start -->
                <?php
    if(isset($_SESSION['walletcreated']) && $_SESSION['walletcreated'] !='')
    {
      echo '<h6 style="color: green;">'.$_SESSION['walletcreated'].'</h6>';
      unset($_SESSION['walletcreated']);
          } 
          ?>
                <div class="container-fluid">
	<div class="row">
    <?php
if ($data['fetchwallet']) {
	foreach($data['fetchwallet'] as $wall){
        $walletname = $wall->walletname;
        $walletaddress = $wall->walletaddress;
        $walletimage = $wall->walletimage;
        $walletid = $wall->walletid;
    ?>
     <div class="col-lg-4 col-md-6 mt-5">
                            <div class="card card-bordered">
                                <img class="card-img-top img-fluid" src="../walletupload/<?= $walletimage ?>" alt="image">
                                <div class="card-body text-center">
                                    <h5 class="title"><b><?= $walletname ?></b></h5>
                                    <input type="text" readonly value="<?= $walletaddress ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                    
    <?php
}
}
?>
    </div>
</div>
   </div>

   <div class="modal fade" id="walletmodal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Create Wallet</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                           
                                            <div class="modal-body">
                                            <form action="<?= BASEURL; ?>/admin/walletcreation" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="usid" value="<?= $userid; ?>">
                                    <div class="form-group">
                                            <label for="example-text-input" class="col-form-label"> Wallet Name</label>
                                            <input class="form-control" type="text" required="" name="walletname">
                                        </div>
                                                  <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Wallet Address</label>
                                            <input class="form-control" type="text" required="" name="walladress">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Wallet image</label>
                                            <input class="form-control" type="file" required="" name="walletimage">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Wallet Qrcode</label>
                                            <input class="form-control" type="file" required="" name="walletqr">
                                        </div>

                                                <div class="form-group">
                                          
                                           
                                            <button class="btn btn-md btn-success"  type="submit" name="createwalletbtn">Update</button>
                                        </div>
                                    </form>
                                        </div>

                                         <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
                                            </div>
                                    </div>
                                </div>
                            </div>

<?php
$this->view("admin/partials/footer"); 
$this->view("admin/partials/scripts"); 
?>