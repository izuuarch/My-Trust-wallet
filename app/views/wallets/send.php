<?php
    $this->view("wallets/partials/header",$data); 
    ?>
     <?php
    //  show($data['getwallet']);
                        // show($data['fetchwallet']);
                        if ($data['fetchwallet']) {
                            foreach($data['fetchwallet'] as $wall){
                                $walletname = $wall->walletname;
                                $walletaddress = $wall->walletaddress;
                                $walletimage = $wall->walletimage;
                                $walletid = $wall->walletid;
                                ?>
    <!-- <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                            <h3 class="font-weight-bold tx-15 text-black" id="user_usd_balance_3408">$953,060.00</h3>
                                            
                                        </div>
                                     
                                        <div class="float-left">
                                            <p class="mb-0 text-left">BITCOIN</p>
                                            <div class="">
                                                    <img class="w-6 h-6" src="../walletupload/<?= $walletimage ?>" alt="image" lt="" style="100px; height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-0">
                                        <span class="badge badge-black" id="btc">$29,743</span>
                                        <span class="badge badge-black" id="update_3408"></span>
                                    </p>
                                    <div class="text-center">
						<a href="<?= BASEURL; ?>/wallet/send" class="btn btn-lg text-white" style="background: black;">RECEIVE <i class="fas fa-arrow-down"></i></a>

					     
						<a href="<?= BASEURL; ?>/wallet/send" class="btn btn-lg text-white" style="background: black;">SEND <i class="fas fa-paper-plane"></i></a>
					      </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-sm-12 col-lg-12 col-xl-12" onclick="location.href='<?= BASEURL;?>/review/<?= $walletid; ?>';">
                            <div class="card" style="border-radius: 10px;">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                            <!-- <h3 class="font-weight-bold tx-15 text-black" id="user_usd_balance_3408">$953,060.00</h3> -->
                                            
                                        </div>
                                     
                                        <div class="float-left">
                                            <p class="mb-0 text-left"><?= ucfirst($walletname) ?></p>
                                            <div class="">
                                                    <img class="w-6 h-6" src="../walletupload/<?= $walletimage ?>" alt="image" lt="" style="100px; height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-0">
                               
                                        <span class="badge badge-black" id="update_3408"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                    }
                        ?>
                 

<?php
 $this->view("wallets/partials/footer",$data);  
 ?>