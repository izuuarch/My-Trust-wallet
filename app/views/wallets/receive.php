<?php
    $this->view("wallets/partials/header",$data); 
    ?>
    <?php
         if($data['fetchuser']){
            $userarr = $data['fetchuser'];
            $fullname=$userarr->fullname;
            $email=$userarr->email;
            $userid=$userarr->userid;
         }
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
    <div class="d-flex justify-content-center">
      <div class="col-lg-6 mt-5">
                            <div class="card">
     
                                <div class="card-body">
                                    <div>
                                    <div class="d-flex justify-content-center">
                                            <img src="../qrupload/<?= $qrimage; ?>" style="width: 200px; height: 200px;">
                                        </div>
                                        <!-- <div class="form-group">
        <label for="example-text-input" class="col-form-label">Copy Wallet Address</label>
        <input class="form-control" type="text" id="myInput" value="<?= $walletaddress?>" readonly>
        <input class="form-control text-white" type="button" id="" value="copy" style="cursor: pointer; background: black;" onclick="myFunction()">
    </div> -->
    <form id="paycoin">
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Wallet Name</label>
        <input class="form-control" type="text" id="walletType" value="<?= $walletname?>" readonly>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Amount</label>
        <input class="form-control" type="number" id="usdamount">
        <output id="convert" class="text-success"></output>
        <output id="convert2" class="text-success" style="display: none;"></output>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Description</label>
        <input class="form-control" type="text" id="desc">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Expected Arrival</label>
        <input class="form-control" type="text" id="" value="1 network confirmation" readonly>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Expected Unlock</label>
        <input class="form-control" type="text" id="" value="2 network confirmation" readonly>
    </div>
    <div class="form-group">
        <button class="btn btn-danger btn-block" type="submit">Send through coinbase gateway page</button>
    </div>
    </form>
                                    </div>
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
    function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Wallet address Copied: " + copyText.value);
}
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#paycoin").submit(function(e){
        e.preventDefault();
        var amount = $('#convert2').val();
        var desc = $('#desc').val();
        $.ajax({
        url: 'https://api.commerce.coinbase.com/charges',
        method: 'POST',
        dataType: 'json',
        headers: {

          // API Key ** Very Important
          "X-CC-Api-Key": "fdcc5eaa-3647-47b5-a945-66e58696cdae",

          // API Version Date **
          "X-CC-Version": "2018-03-22"
        },
        // The following data must be sent to the API.
        data: {
          // Name of Trasaction
          "name": "<?= $walletaddress?>",

          // Description of Transaction
          "description": desc,

          // Local Price and Amount and Currecny
          "local_price": {

            //Amount
            "amount": amount,

            // Currency
            "currency": "USD"
          },
          // Don't TOuch
          "pricing_type": "fixed_price",

          // Customer Details
          "metadata": {
            // Customer ID from your Data Base
            "customer_id": "<?= $userid ?>",

            // Customer Name from database or text box
            "customer_name": "<?= $fullname ?>"
          },
          // URL if payment is successful
          "redirect_url": "<?= BASEURL ?>/confirmation",


          // URL if payment fails
          "cancel_url": "<?= BASEURL ?>/wallet"
        },
        success: function (result) {

          // Logs General Result
          console.log(result)

          // Concatenates the payment ID to the full link
          console.log(result.data.hosted_url)

          // Save the Payment link with the variable name "paylink"
          var paylink = result.data.hosted_url

          //Uncomment below to make the payment link visible
          // $('#paylink').text(paylink)

          // Loads the requested Link
          window.location.href = paylink;


        },
        error: function (error) {
          // Incase an error occurs
          console.log(error.responseText);
        }
      });

});
});

  </script>
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
const recresult = document.querySelector('#convert2')

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
    document.querySelector('#usdamount').addEventListener('input', (e) => {
      switch (walletType.value.toLowerCase()) {
        case 'bitcoin':
          result.textContent = `Your result in dollars $${
            e.target.value * btcPrice
          }`;
          recresult.textContent = `${
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