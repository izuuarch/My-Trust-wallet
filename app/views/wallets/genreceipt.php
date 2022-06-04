<link href="<?= ASSETS ?>walletassets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= ASSETS ?>walletassets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= ASSETS ?>walletassets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= ASSETS ?>walletassets/css/theme.css" rel="stylesheet" media="all">
    <style>
        .loader {
  height: 5rem;
  width: 5rem;
  border-radius: 50%;
  border: 10px solid orange;
  border-top-color: #002147;
  box-sizing: border-box;
  background: transparent;
  animation: loading 1s linear infinite;
}

@keyframes loading {
  0% {
    transform: rotate(0deg);
  }
  0% {
    transform: rotate(360deg);
  }
}
    </style>
<?php
if(isset($data['gensentreceipt'])){
    $grab = $data['gensentreceipt'];
    $transactionid = $grab->transactionid;
    $walletname = $grab->walletname;
    $amount = $grab->amount;
    $walladdress = $grab->walletaddress;
    $transactiondate = $grab->transactiondate;
    ?>
     <div class="col-lg-12">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Amount Sent: <?=$amount?> <?= ucfirst($walletname)?></label>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Recipient</label>
        <input class="form-control" type="text" id="" value="<?= $walladdress ?>" readonly>
    </div>
    
                                    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Wallet Name</label>
        <input class="form-control" type="text" id="" value="<?= ucfirst($walletname)?>" readonly>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Date</label>
        <input class="form-control" type="text" id="" value="<?= $transactiondate ?>" readonly>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Status:</label>
        <output class="form-control"><h6 class="text-danger">0 comfirming</h6></output>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Amount Sent:</label>
        <output class="form-control"><h6 class="text-danger"><?=$amount?> <?= ucfirst($walletname)?></h6></output>
    </div>
    <div class="loader"></div>
                                      
                                    </div>
                                </div>
         </div>
    <?php
}
?>
<?php
if(isset($data['genrecreceipt'])){
    $grabrec = $data['genrecreceipt'];
    $transactionid = $grabrec->transactionid;
    $walletname = $grabrec->walletname;
    $amount = $grabrec->amount;
    $walladdress = $grabrec->walletaddress;
    $transactiondate = $grabrec->transactiondate;
    ?>
     <div class="col-lg-12">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Recipient</label>
        <input class="form-control" type="text" id="" value="<?= $walladdress ?>" readonly>
    </div>
                                    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Amount Received: <?=$amount?> <?= ucfirst($walletname)?></label>
    </div>
                                    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Wallet Name</label>
        <input class="form-control" type="text" id="" value="<?= ucfirst($walletname)?>" readonly>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Date</label>
        <input class="form-control" type="text" id="" value="<?= $transactiondate ?>" readonly>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Status:</label>
        <output class="form-control"><h6 class="text-success">6 comfirmed</h6></output>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Amount Received:</label>
        <output class="form-control"><h6 class="text-danger"><?=$amount?> <?= ucfirst($walletname)?></h6></output>
    </div>
                                      
                                    </div>
                                </div>
         </div>
    <?php
}
?>