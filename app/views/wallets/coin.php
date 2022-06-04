<?php
    $this->view("wallets/partials/header",$data); 
    ?>
    <div class="d-flex justify-content-center">
    <?php
if ($data['fetchcoin']) {
    $wall = $data['fetchcoin'];
        $walletname = $wall->walletname;
        $walletaddress = $wall->walletaddress;
        $walletimage = $wall->walletimage;
        $walletid = $wall->walletid;
    ?>
      <div class="col-lg-6 mt-5">

                            <div class="card">
                      <?php
    if(isset($_SESSION['insufficient']) && $_SESSION['insufficient'] !='')
    {
      echo '
      <div class="card-header bg-danger text-white">
      <h6>'.$_SESSION['insufficient'].'</h6>
    </div>
      ';
      unset($_SESSION['insufficient']);
          } 
          ?>
                       <?php
    if(isset($_SESSION['invalidamount']) && $_SESSION['invalidamount'] !='')
    {
      echo '
      <div class="card-header bg-danger text-white">
                                    <h6>'.$_SESSION['invalidamount'].'</h6>
                                  </div>
      ';
      unset($_SESSION['invalidamount']);
          } 
          ?>
                                <div class="card-body">
                                    <div>
                                    <div class="d-flex justify-content-center">
                                            <img src="../walletupload/<?= $walletimage; ?>" style="width: 200px; height: 200px; border-radius: 50%;">
                                       </div>
                                        <form action="<?= BASEURL;?>/transfercoin" method="post">
                                        <input type="hidden" name="wallid" value="<?= $walletid ?>">
                                        <div class="form-group">
        <label for="example-text-input" class="col-form-label">Wallet Name</label>
        <input class="form-control" type="text" name="wallname" value="<?= $walletname?>" readonly id="walletType">
        
    </div>
    <!-- <h3 id="walletType">etherum</h3> -->
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Amount</label>
        <input class="form-control" type="text" id="test" name="amt" required>
        <div class="text-success" id="convert"></div>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Wallet Address</label>
        <input class="form-control" type="text" id="" name="walletaddress" required>
    </div>
    <div class="form-group">
     <button class="btn btn-block text-white" type="submit" name="transferbtn" style="background: black;">Transfer</button>
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
<?php
 $this->view("wallets/partials/footer",$data);  
 ?>
 <script onload="true">
     let btcPrice = 0;
let ethPrice = 0;
let usdtPrice = 0;
let bnbPrice = 0;
let dogePrice = 0;
let tronPrice = 0;
let ltcPrice = 0;
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
const walletType = document.querySelector('#walletType')
const result = document.querySelector('#convert')

fetch(
  'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&per_page=20',
)
  .then((res) => res.json())
  .then((res) => {
    data.push(...res);
    const t = data.filter((f) => coins.includes(f.name.toLowerCase()));
    t.forEach((i, index) => {
        // console.log(i.name);
      switch (i.name.toLowerCase()) {
        case 'bitcoin':     
          btcPrice = i.current_price;
          break;
        case 'ethereum':
          ethPrice = i.current_price;
          break;
        case 'tether':
          usdtPrice = i.current_price;
          break;
        case 'tron':
          tronPrice = i.current_price;
          break;
        case 'litecoin':
          ltcPrice = i.current_price;
          break;
        case 'bnb':
          bnbPrice = i.current_price;
          break;
        case 'dogecoin':
          dogePrice = i.current_price;
          break;
        default:
          break;
      }
    });
    document.querySelector('#test').addEventListener('input', (e) => {
      switch (walletType.value.toLowerCase()) {
        case 'bitcoin':
          result.textContent = `Your result in dollars $${
            e.target.value * btcPrice
          }`;
          break;
        case 'etherum':
          result.textContent = `Your result in dollars ${
            e.target.value * ethPrice
          }`;
          break;
        case 'dogecoin':
          result.textContent = `Your result in dollars ${
            e.target.value * dogePrice
          }`;
          break;
        case 'usdt':
          result.textContent = `Your result in dollars ${
            e.target.value * usdtPrice
          }`;
          break;
        case 'bnb':
          result.textContent = `Your result in dollars ${
            e.target.value * bnbPrice
          }`;
          break;
        case 'tron':
          result.textContent = `Your result in dollars ${
            e.target.value * tronPrice
          }`;
          break;
        case 'litecoin':
          result.textContent = `Your result in dollars ${
            e.target.value * ltcPrice
          }`;
          break;
        default:
          break;
      }
    })
  })
  .catch((err) => console.log(err));

 </script>