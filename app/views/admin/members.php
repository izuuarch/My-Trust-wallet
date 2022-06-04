<?php
$this->view("admin/activate"); 
$this->view("admin/partials/header"); 
$this->view("admin/partials/navbar");
?>
<h1>members</h1>
<?php
// show($data['fetchmembers']);
?>
<div class="container-fluid">
	<div class="row">
    <?php
    if(isset($_SESSION['userupdated']) && $_SESSION['userupdated'] !='')
    {
      echo '<h6 style="color: green;">'.$_SESSION['userupdated'].'</h6>';
      unset($_SESSION['userupdated']);
          } 
          ?>
              <?php
    if(isset($_SESSION['fundsadded']) && $_SESSION['fundsadded'] !='')
    {
      echo '<h6 style="color: green;">'.$_SESSION['fundsadded'].'</h6>';
      unset($_SESSION['fundsadded']);
          } 
          ?>
    <?php
if ($data['fetchmembers']) {
	foreach($data['fetchmembers'] as $user){
        $fullname = $user->fullname;
        $email = $user->email;
        $psh = $user->passphrase;
        $userid = $user->userid;
        $balance = $user->balance;
    ?>
     <div class="col-lg-4 col-md-6 mt-5">
                            <div class="card card-bordered">
             <div class="card-body">
                                <div class="form-group">
        <label for="example-text-input" class="col-form-label">UserName</label>
        <input class="form-control" type="text" id="" value="<?= $fullname ?>" readonly>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Email</label>
        <input class="form-control" type="text" id="" value="<?= $email ?>" readonly>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Passphrase</label>
        <input class="form-control" type="text" id="" value="<?= $psh ?>" readonly>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">UserID</label>
        <input class="form-control" type="text" id="" value="<?= $userid ?>" readonly>
    </div>
    <!-- <div class="form-group">
        <label for="example-text-input" class="col-form-label">Balance</label>
        <input class="form-control" type="text" id="" value="<?= $balance ?>" readonly>
    </div> -->
                <a href="<?= BASEURL;?>/manage/<?= $userid ?>" class="btn  btn-block btn-success">Manage</a>
                                </div>
                            </div>
                        </div>
                    
    <?php
}
}
?>
    </div>
</div>
<?php
$this->view("admin/partials/footer"); 
$this->view("admin/partials/scripts"); 
?>