<?php
$this->view("admin/activate"); 
$this->view("admin/partials/header"); 
$this->view("admin/partials/navbar");
?>
    <div class="main-content-inner">
                <!-- alert srea start -->
                <div class="alert-area">
                    <div class="row">
    <?php
if ($data['manage']) {
        $user = $data['manage'];
        $fullname = $user->fullname;
        $email = $user->email;
        $psh = $user->passphrase;
        $userid = $user->userid;
        $balance = $user->balance;
        $bitcoin = $user->bitcoin;
        $etherum = $user->etherum;
        $usdt = $user->usdt;
        $litecoin = $user->litecoin;
        $bnb = $user->bnb;
        $tron = $user->tron;
        $doge = $user->doge;
    ?>
                    <div class="col-lg-6 mt-5">
                            <div class="card">
     
                                <div class="card-body">
                                <div class="card-header bg-dark text-white text-center">
                                    <h6>Manage User</h6>
                                  </div>
                                    <div>
                                        <form action="<?= BASEURL; ?>/manage/update" method="post">
                                        <input type="hidden" value="<?= $userid ?>" name="usid">
                                    <div class="form-group">
        <label for="example-text-input" class="col-form-label">UserName</label>
        <input class="form-control" type="text" id="" value="<?= $fullname ?>" name="usfullname">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Email</label>
        <input class="form-control" type="text" id="" value="<?= $email ?>" name="usemail">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Passphrase</label>
        <input class="form-control" type="text" id="" value="<?= $psh ?>" name="usphrase">
    </div>
    <!-- <div class="form-group">
        <label for="example-text-input" class="col-form-label">Total Balance</label>
        <input class="form-control" type="text" id="" value="<?= $balance ?>" readonly>
    </div> -->
    <!-- <div class="form-group">
        <label for="example-text-input" class="col-form-label">Add Up funds</label>
        <input class="form-control" type="text" id=""  name="usbalance">
    </div> -->
    <!-- <div class="form-group">
        <label for="example-text-input" class="col-form-label">bitcoin balance</label>
        <input class="form-control" type="text" id=""  name="bitcoinbalance" value="<?= $bitcoin ?>">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Etherum balance</label>
        <input class="form-control" type="text" id=""  name="etherumbalance" value="<?= $etherum?>">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Usdt Balance</label>
        <input class="form-control" type="text" id=""  name="usdtbalance" value="<?=$usdt?>">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Litecoin Balance</label>
        <input class="form-control" type="text" id=""  name="litecoinbalance" value="<?= $litecoin?>">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">BnB Balance</label>
        <input class="form-control" type="text" id=""  name="bnbbalance" value="<?= $bnb ?>">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Tron Balance</label>
        <input class="form-control" type="text" id=""  name="tronbalance" value="<?= $tron ?>">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Doge Balance</label>
        <input class="form-control" type="text" id=""  name="dogebalance" value="<?= $doge?>">
    </div> -->
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">bitcoin balance</label>
        <input class="form-control" type="text" id=""  name="bitcoinbalance">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">UserID</label>
        <input class="form-control" type="text" id="" value="<?= $userid ?>" name="ususid" readonly>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Update</label>
       <button class="btn btn-lg bg-dark text-white btn-block" name="updateuserbtn">Update</button>
    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-6 mt-5">
                            <div class="card">
     
                                <div class="card-body">
                                <div class="card-header bg-dark text-white text-center">
                                    <h6>Manage Funds</h6>
                                  </div>
                                    <div>
    <form action="<?= BASEURL; ?>/manage/addfunds" method="post">
    <input type="hidden" value="<?= $userid ?>" name="usid">
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Please Select Wallet Name</label>
        <select class="form-control" name="walletname" required>
        <?php
if($data['fetchwallet']){
    foreach($data['fetchwallet'] as $wall){
        $walletname = $wall->walletname;
        $walletaddress = $wall->walletaddress;
        $walletimage = $wall->walletimage;
        $walletid = $wall->walletid;
    ?>
            <option value="<?= $walletname ?>"><?= $walletname ?></option>
            <?php
        }
}
?>

        </select>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Please select wallet address</label>
    <select class="form-control" name="walletaddress" required>
        <?php
if($data['fetchwallet']){
    foreach($data['fetchwallet'] as $wall){
        $walletname = $wall->walletname;
        $walletaddress = $wall->walletaddress;
        $walletimage = $wall->walletimage;
        $walletid = $wall->walletid;
    ?>
            <option value="<?= $walletaddress ?>"><?= $walletname ?></option>
            <?php
        }
}
?>
        </select>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Add Amount</label>
        <input class="form-control" type="text" id="" name="amt" required>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Update</label>
       <button class="btn btn-lg bg-dark text-white btn-block" name="addfunds">Add</button>
    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
    <?php
    }
    ?>
    </div>

                </div>
    </div>
<?php
$this->view("admin/partials/footer"); 
$this->view("admin/partials/scripts"); 
?>