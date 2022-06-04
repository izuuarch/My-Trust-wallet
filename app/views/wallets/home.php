<?php
$this->view("wallets/partials/header",$data); 
?>
<div class="card card-img-holder text-white" style="background-color: black; color: #fff; border-radius: 15px;">
							<div class="card-body">
								<div class="clearfix" style="border-radius:30px">
									<div class="float-right">
										<i class="fas fa-wallet icons text-blue icon-size"></i>
									</div>
									<div class="float-left">
										<p class="mb-1 text-left">Total Balance in USD</p>
										<div class="">
											<h3 class="font-weight-semibold text-right mb-3 text-white" id="total" style="size:50px;">$</h3>
										</div>
									</div>
								</div>
								<br>

							<div class="card-body text-center">
						<a href="<?= BASEURL; ?>/wallet/send" class="btn btn-lg text-dark" style="background: white;">RECEIVE <i class="fas fa-arrow-down"></i></a>

					     
						<a href="<?= BASEURL; ?>/wallet/send" class="btn btn-lg text-dark" style="background: white;">SEND <i class="fas fa-paper-plane"></i></a>
					      </div>
                
								<div class="media">
                 
                                </div>
							</div>
						</div>
                        <?php
                        // show($data['fetchwallet']);
                        if($data['fetchwallet']){
                           $bitcoin =  $data['fetchwallet']->bitcoin;
                            ?>
    <div class="col-sm-12 col-lg-12 col-xl-12" onclick="location.href='<?= BASEURL;?>/wallet/send';">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                        
                                            <div class="row"><h3>$</h3><h3 class="font-weight-bold tx-15 text-black" id="btcTotal"></h3></div>
                                            <h3 class="tx-16 text-muted mb-0" id="btcAmount"><?= $bitcoin ?></h3>
                                            
                                        </div>
                                        <div class="float-left">
                                            <p class="mb-0 text-left">BITCOIN</p>
                                            <div class="">
                                                    <img class="w-6 h-6" src="<?= BASEURL?>/coins/bitcoin.png"  style="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-0">
                                        <span class="badge badge-black" id="btcleft"></span>
                                        <span class="badge badge-black" id="update_3408"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                                    <!-- etherum wallet -->
                                    <?php
                        // show($data['fetchwallet']);
                        if($data['fetchwallet']){
                           $etherum =  $data['fetchwallet']->etherum;
                            ?>
                           <div class="col-sm-12 col-lg-12 col-xl-12" onclick="location.href='<?= BASEURL;?>/wallet/send';">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                        <span class="badge badge-black">Total in dollars</span>
                                            <h3 class="font-weight-bold tx-15 text-black" id="ethTotal"></h3>
                                            <h3 class="tx-16 text-muted mb-0" id="ethAmount"><?= $etherum ?></h3>
                                            
                                        </div>
                                        <div class="float-left">
                                            <p class="mb-0 text-left">ETHERUM</p>
                                            <div class="">
                                                    <img class="w-6 h-6" src="<?= BASEURL?>/coins/etherum.jpg" alt="image" lt="" style="100px; height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-0">
                                        <span class="badge badge-black" id="ethleft"></span>
                                        <span class="badge badge-black" id="update_3408"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                        <!-- tron wallet -->
                        <?php
                        // show($data['fetchwallet']);
                        if($data['fetchwallet']){
                           $tron =  $data['fetchwallet']->tron;
                            ?>
                               <div class="col-sm-12 col-lg-12 col-xl-12" onclick="location.href='<?= BASEURL;?>/wallet/send';">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                        <span class="badge badge-black">Total in dollars</span>
                                            <h3 class="font-weight-bold tx-15 text-black" id="tronTotal"></h3>
                                            <h3 class="tx-16 text-muted mb-0" id="tronAmount"><?= $tron ?></h3>
                                            
                                        </div>
                                        <div class="float-left">
                                            <p class="mb-0 text-left">TRON</p>
                                            <div class="">
                                                    <img class="w-6 h-6" src="<?= BASEURL?>/coins/tron.png" alt="image" lt="" style="100px; height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-0">
                                        <span class="badge badge-black" id="tronleft"></span>
                                        <span class="badge badge-black" id="update_3408"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                           <!-- usdt wallet -->
                           <?php
                        // show($data['fetchwallet']);
                        if($data['fetchwallet']){
                           $usdt =  $data['fetchwallet']->usdt;
                            ?>
                                                 <div class="col-sm-12 col-lg-12 col-xl-12" onclick="location.href='<?= BASEURL;?>/wallet/send';">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                        <span class="badge badge-black">Total in dollars</span>
                                            <h3 class="font-weight-bold tx-15 text-black" id="usdtTotal"></h3>
                                            <h3 class="tx-16 text-muted mb-0" id="usdtAmount"><?= $usdt ?></h3>
                                            
                                        </div>
                                        <div class="float-left">
                                            <p class="mb-0 text-left">THETA</p>
                                            <div class="">
                                                    <img class="w-6 h-6" src="<?= BASEURL?>/coins/usdt.png" alt="image" lt="" style="100px; height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-0">
                                        <span class="badge badge-black" id="usdtleft"></span>
                                        <span class="badge badge-black" id="update_3408"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                                   <!-- litecoin wallet -->
                                   <?php
                        // show($data['fetchwallet']);
                        if($data['fetchwallet']){
                           $litecoin =  $data['fetchwallet']->litecoin;
                            ?>
                                       <div class="col-sm-12 col-lg-12 col-xl-12" onclick="location.href='<?= BASEURL;?>/wallet/send';">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                        <span class="badge badge-black">Total in dollars</span>
                                            <h3 class="font-weight-bold tx-15 text-black" id="ltcTotal"></h3>
                                            <h3 class="tx-16 text-muted mb-0" id="ltcAmount"><?= $litecoin ?></h3>
                                            
                                        </div>
                                        <div class="float-left">
                                            <p class="mb-0 text-left">LTC</p>
                                            <div class="">
                                                    <img class="w-6 h-6" src="<?= BASEURL?>/coins/litecoin.png" alt="image" lt="" style="100px; height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-0">
                                        <span class="badge badge-black" id="ltcleft"></span>
                                        <span class="badge badge-black" id="update_3408"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                         <!-- bnb -->
                         <?php
                        // show($data['fetchwallet']);
                        if($data['fetchwallet']){
                           $bnb =  $data['fetchwallet']->bnb;
                            ?>
                            <div class="col-sm-12 col-lg-12 col-xl-12" onclick="location.href='<?= BASEURL;?>/wallet/send';">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                        <span class="badge badge-black">Total in dollars</span>
                                            <h3 class="font-weight-bold tx-15 text-black" id="bnbTotal"></h3>
                                            <h3 class="tx-16 text-muted mb-0" id="bnbAmount"><?= $bnb ?></h3>
                                            
                                        </div>
                                        <div class="float-left">
                                            <p class="mb-0 text-left">BNB</p>
                                            <div class="">
                                                    <img class="w-6 h-6" src="<?= BASEURL?>/coins/bnb.png" alt="image" lt="" style="100px; height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-0">
                                        <span class="badge badge-black" id="bnbleft"></span>
                                        <span class="badge badge-black" id="update_3408"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                                      <!-- dogecoin wallet -->
                                      <?php
                        // show($data['fetchwallet']);
                        if($data['fetchwallet']){
                           $doge =  $data['fetchwallet']->doge;
                            ?>
                               <div class="col-sm-12 col-lg-12 col-xl-12" onclick="location.href='<?= BASEURL;?>/wallet/send';">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                        <span class="badge badge-black">Total in dollars</span>
                                            <h3 class="font-weight-bold tx-15 text-black" id="dogeTotal"></h3>
                                            <h3 class="tx-16 text-muted mb-0" id="dogeAmount"><?= $doge ?></h3>
                                            
                                        </div>
                                        <div class="float-left">
                                            <p class="mb-0 text-left">Dogecoin</p>
                                            <div class="">
                                                    <img class="w-6 h-6" src="<?= BASEURL?>/coins/doge.png" alt="image" lt="" style="100px; height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-0">
                                        <span class="badge badge-black" id="dogeleft"></span>
                                        <span class="badge badge-black" id="update_3408"></span>
                                    </p>
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
    let data = [];
const coins = [
  'bitcoin',
  'ethereum',
  'tether',
  'bnb',
  'dogecoin',
  'tron',
  'litecoin',
];
const total = document.querySelector('#total');
let totalAmount = 0;

const btcleft = document.querySelector('#btcleft');
const btcAmount = document.querySelector('#btcAmount').textContent;
const btcTotal = document.querySelector('#btcTotal');
let btcPrice = 0;

const ethleft = document.querySelector('#ethleft');
const ethAmount = document.querySelector('#ethAmount').textContent;
const ethTotal = document.querySelector('#ethTotal');
let ethPrice = 0;

const usdtleft = document.querySelector('#usdtleft');
const usdtAmount = document.querySelector('#usdtAmount').textContent;
const usdtTotal = document.querySelector('#usdtTotal');
let usdtPrice = 0;

const bnbleft = document.querySelector('#bnbleft');
const bnbAmount = document.querySelector('#bnbAmount').textContent;
const bnbTotal = document.querySelector('#bnbTotal');
let bnbPrice = 0;

const dogeleft = document.querySelector('#dogeleft');
const dogeAmount = document.querySelector('#dogeAmount').textContent;
const dogeTotal = document.querySelector('#dogeTotal');
let dogePrice = 0;

const tronleft = document.querySelector('#tronleft');
const tronAmount = document.querySelector('#tronAmount').textContent;
const tronTotal = document.querySelector('#tronTotal');
let tronPrice = 0;

const ltcleft = document.querySelector('#ltcleft');
const ltcAmount = document.querySelector('#ltcAmount').textContent;
const ltcTotal = document.querySelector('#ltcTotal');
let ltcPrice = 0;

fetch(
  'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&per_page=20',
)
  .then((res) => res.json())
  .then((res) => {
    data.push(...res);
    const t = data.filter((f) => coins.includes(f.name.toLowerCase()));
    console.log(t);
    t.forEach((i, index) => {
      switch (i.symbol.toLowerCase()) {
        case 'btc':
          btcPrice = i.current_price;
          btcleft.textContent = i.current_price;
          btcTotal.textContent = `${Math.floor(btcPrice * btcAmount)}`;
          break;
        case 'eth':
          ethPrice = i.current_price;
          ethleft.textContent = i.current_price;
          ethTotal.textContent = `${Math.floor(ethPrice * ethAmount)}`;
          break;
        case 'usdt':
          usdtPrice = i.current_price;
          usdtleft.textContent = i.current_price;
          usdtTotal.textContent = `${Math.floor(usdtPrice * usdtAmount)}`;
          break;
        case 'trx':
          tronPrice = i.current_price;
          tronleft.textContent = i.current_price;
          tronTotal.textContent = `${Math.floor(tronPrice * tronAmount)}`;
          break;
        case 'ltc':
          ltcPrice = i.current_price;
          ltcleft.textContent = t[6].current_price;
          ltcTotal.textContent = `${Math.floor(ltcPrice * ltcAmount)}`;
          break;
        case 'bnb':
          bnbPrice = i.current_price;
          bnbleft.textContent = i.current_price;
          bnbTotal.textContent = `${Math.floor(bnbPrice * bnbAmount)}`;
          break;
        case 'doge':
          dogePrice = i.current_price;
          dogeleft.textContent = i.current_price;
          dogeTotal.textContent = `${Math.floor(dogePrice * dogeAmount)}`;
          break;
        default:
          break;
      }
    });
    totalAmount = Number(btcTotal.textContent) + Number(ethTotal.textContent) + Number(bnbTotal.textContent) + Number(dogeTotal.textContent) + Number(ltcTotal.textContent) + Number(tronTotal.textContent) + Number(usdtTotal.textContent)
    total.textContent = totalAmount
  })
  .catch((err) => console.log(err));

// fetch('https://json.geoiplookup.io')
//   .then((res) => res.json())
//   .then((res) => {
//     console.log(res.ip);
//   })
//   .catch((err) => console.log(err));

</script>