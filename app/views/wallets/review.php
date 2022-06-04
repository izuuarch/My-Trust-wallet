<?php
    $this->view("wallets/partials/header",$data); 
    ?>
     <?php
if ($data['fetchcoin']) {
    $wall = $data['fetchcoin'];
        $walletname = $wall->walletname;
        $walletaddress = $wall->walletaddress;
        $walletimage = $wall->walletimage;
        $walletid = $wall->walletid;
        $qrimage = $wall->qrimage;
    ?>
    <div class="card card-img-holder text-white" style="background-color: black; color: #fff; border-radius: 15px;">
							<div class="card-body">
								<div class="clearfix" style="border-radius:30px">
									<div class="float-right">
										<i class="fas fa-wallet icons text-blue icon-size"></i>
									</div>
							
								</div>
								<br>

							<div class="card-body text-center">
						<a href="<?= BASEURL;?>/receive/<?= $walletid; ?>" class="btn btn-lg text-dark" style="background: white;">RECEIVE <i class="fas fa-arrow-down"></i></a>

					     
						<a href="<?= BASEURL;?>/sendcoin/<?= $walletid; ?>" class="btn btn-lg text-dark" style="background: white;">SEND <i class="fas fa-paper-plane"></i></a>
					      </div>
                
								<div class="media">
                 
                                </div>
							</div>
						</div>
    <?php
}
    ?>
   
            <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="card" style="border-radius: 10px;">
                                <div class="card-body">
                       
                    <h4>Transaction History</h4>
                                </div>
                            </div>
                        </div>
                        <div class="default-tab">
											<nav class="nav-justified">
												<div class="nav nav-tabs" id="nav-tab" role="tablist">
													<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
													 aria-selected="true">Sent</a>
													<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"
													 aria-selected="false">Received</a>
												
												</div>
											</nav>
											<div class="tab-content pl-3 pt-2" id="nav-tabContent">
												<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <?php
                                                if($data['fetchsent']){
                                                    foreach($data['fetchsent'] as $getsent){
                                                        $coin = $getsent->walletname;
                                                        $amount = $getsent->amount;
                                                        $userid = $getsent->userid;
                                                        $transid = $getsent->transactionid;
                                                    
                                                   ?>
 <div class="col-sm-12 col-lg-12 col-xl-12">
            <div class="card" style="border-radius: 10px; cursor: pointer;" id="gensent" sentid="<?= $transid ?>">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <h3 class="tx-16 text-muted mb-0" id="userbtc"><?= $amount ?> <?= ucfirst($coin);?> </h3>
                            
                        </div>
                        <div class="float-left">
                            <p class="mb-0 text-left"><?= ucfirst($coin);?> sent</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                                   <?php
                                                }
                                            }
                                          ?>
												</div>
												<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <?php
                                                if($data['fetchreceive']){
                                                    foreach($data['fetchreceive'] as $getreceive){
                                                        $coin = $getreceive->walletname;
                                                        $amount = $getreceive->amount;
                                                        $userid = $getreceive->userid;
                                                        $transid  = $getreceive->transactionid;
                                                   ?>
                                              
                                                <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="card" style="border-radius: 10px; cursor: pointer;" id="getreceived" receivedid="<?= $transid ?>">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                            <h3 class="tx-16 text-muted mb-0" id="userbtc"><?= $amount ?> <?= ucfirst($coin);?></h3>
                                            <input type="hidden" name="userid" value="<?= $userid ?>">
                                        </div>
                                        <div class="float-left">
                                            <p class="mb-0 text-left"><?= ucfirst($coin);?> Received</p>
                                         
                                        </div>
                                    </div>
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

<?php
 $this->view("wallets/partials/footer",$data);  
 ?>
 <script>
      $(document).ready(function(){
      $(document).on('click', '#gensent', function(){
        var sentid2 = $(this).attr('sentid');
        // var action = "getsent";
        // var fd = new FormData();

                // fd.append('walletid',userid2);
                // fd.append('getsent',action);
                    $.ajax(
              {
                  url :'<?= BASEURL ?>/wallet/gensent',
                  method : 'POST',
                  data:{
                      "sentid2":sentid2
                  },
                  success: function(data){
                    $('#receiptmodal').modal("show");
                    $('#displayrec').html(data);
                  }
              }

          );
      });
    });
    $(document).ready(function(){
      $(document).on('click', '#getreceived', function(){
        var receivedid2 = $(this).attr('receivedid');
        // var action = "getsent";
        // var fd = new FormData();

                // fd.append('walletid',userid2);
                // fd.append('getsent',action);
                    $.ajax(
              {
                  url :'<?= BASEURL ?>/wallet/genreceived',
                  method : 'POST',
                  data:{
                      "receivedid2":receivedid2
                  },
                  success: function(data){
                    $('#receiptmodal').modal("show");
                    $('#displayrec').html(data);
                //   console.log(data);

                  }
              }

          );
      });
    });
</script>