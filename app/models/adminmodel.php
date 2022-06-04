<?php
class adminmodel{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function fetchmembers(){
        $type = "";
        $this->db->query('SELECT * FROM users WHERE usertype=:type ORDER BY id DESC');
        $get = $this->db->bind(':type', $type);
        $get = $this->db->resultSet();
        return $get;
    }
    public function manage($u){
        $query =  $this->db->query('SELECT * FROM users WHERE userid=:value');
        $user = $this->db->bind(':value', $u);
        $user = $this->db->single();
        return $user;
    }
    public function fetchactiveadmin(){
        if (isset($_SESSION['admin'])) {
            $logid = $_SESSION['admin'];
            $this->db->query('SELECT * FROM users WHERE userid=:logkey');
            $row = $this->db->bind(':logkey', $logid);
            $row = $this->db->single();
            if ($this->db->rowCount() > 0) {
               return $row;
            }
     }
    }
    public function update(){
        if(isset($_POST['updatebtn'])){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
             'usid' => trim($_POST['usid']),
             'usfullname' => trim($_POST['usfullname']),
             'usemail' => trim($_POST['usemail'])
            ];
            $this->db->query('UPDATE users SET fullname=:fname, email=:usemail  WHERE userid=:usid');
            $this->db->bind(':fname', $data['usfullname']);
            $this->db->bind(':usemail', $data['usemail']);
            $this->db->bind(':usid', $data['usid']);
            if($this->db->execute()){
                $_SESSION['successchange'] = "Details Succefully Changed";
                header('Location: ' . BASEURL . '/admin/settings');
            }
        }
    }
    public function changepass(){
        if(isset($_POST['passbtn'])){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
             'newpwd' => trim($_POST['newpwd']),
             'comnewpwd' => trim($_POST['comnewpwd']),
             'usid' => trim($_POST['usid'])
            ];
            if($data['newpwd'] != $data['comnewpwd']){
                $_SESSION['notmatch'] = "Pawword Do not match";
                header('Location: ' . BASEURL . '/admin/settings');
            }else{
                $hash = password_hash($data['newpwd'], PASSWORD_DEFAULT);
                $this->db->query('UPDATE users SET password=:pass  WHERE userid=:usid');
            $this->db->bind(':pass', $hash);
            $this->db->bind(':usid', $data['usid']);
            if($this->db->execute()){
                $_SESSION['passchange'] = "Password Changed Successfully";
                header('Location: ' . BASEURL . '/admin/settings');
            }
            }
        }
    }
    public function createwallet(){
        if(isset($_POST['createwalletbtn'])){
            $genwalletids = "1234532223d453267d788654ehifiefhef8yey8fe9yue093r9iwefrue3u9r3ur9u3er9eiw99w48u95934ur3t8r3y8ry3rhy3irh3rner9furfwjd";
            $genwalletids2 = substr(str_shuffle($genwalletids), 0 , 6);
            $fileNameNew1 = "";
       $file = $_FILES['walletimage'];
   $picturepostupload= $_FILES['walletimage']['name'];
   $file_tmp = $_FILES['walletimage']['tmp_name'];
$fileSize= $_FILES['walletimage']['size'];
$fileError= $_FILES['walletimage']['error'];
$fileType= $_FILES['walletimage']['type'];
$fileExt = explode('.', $picturepostupload);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg', 'jpeg', 'png','JPG');

if (in_array($fileActualExt, $allowed)) {
if ($fileError === 0) {
 if ($fileSize < 250000000) {
   $fileNameNew1 = uniqid('', true).".".$fileActualExt;
    $fileDestination = 'walletupload/'.$fileNameNew1;
   move_uploaded_file($file_tmp, $fileDestination);
 }else{
   // echo "your file is too big";
   $_SESSION['bigfileerr'] =  "The image File is to Big";

  header('Location: ' . BASEURL . '/admin/createwallet');
 }
}else{
 echo "there was an error uploading your file";
 $_SESSION['errupload'] =  "There was an error uploading your file";

header('Location: ' . BASEURL . '/admin/createwallet');
}
}


$fileNameNew2 = "";
$file = $_FILES['walletqr'];
$picturepostupload2= $_FILES['walletqr']['name'];
$file_tmp = $_FILES['walletqr']['tmp_name'];
$fileSize= $_FILES['walletqr']['size'];
$fileError= $_FILES['walletqr']['error'];
$fileType= $_FILES['walletqr']['type'];
$fileExt = explode('.', $picturepostupload2);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg', 'jpeg', 'png','JPG');

if (in_array($fileActualExt, $allowed)) {
if ($fileError === 0) {
if ($fileSize < 250000000) {
$fileNameNew2 = uniqid('', true).".".$fileActualExt;
$fileDestination = 'qrupload/'.$fileNameNew2;
move_uploaded_file($file_tmp, $fileDestination);
}else{
// echo "your file is too big";
$_SESSION['bigfileerr'] =  "The image File is to Big";

header('Location: ' . BASEURL . '/admin/createwallet');
}
}else{
echo "there was an error uploading your file";
$_SESSION['errupload'] =  "There was an error uploading your file";

header('Location: ' . BASEURL . '/admin/createwallet');
}
}

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
            'imagefile' => $fileNameNew1,
             'walletname' => trim($_POST['walletname']),
             'walladress' => trim($_POST['walladress']),
             'genwalletids' => $genwalletids2,
             'qrimage' => $fileNameNew2
            ];
            $tablerow = $data['walletname'];
            // $this->db->query('ALTER TABLE users ADD `{$tablerow}` varchar(255) NULL');
            // $sql = "ALTER TABLE  `users` ADD `:wallname` varchar(255) NULL";
            // $sql = $this->db->bind(':walletrow', $data['walletname']);
            // $this->db->query($sql);
            // ALTER TABLE `users` ADD `bitcoin` VARCHAR(255) NOT NULL
            $this->db->query('ALTER TABLE `users` ADD `$tablerow` varchar(255) NOT NULL');
            $this->db->query('INSERT INTO wallets(walletname,walletid,walletaddress,walletimage,qrimage) VALUES (:wallname, :wallid, :walladdress, :wallimage, :qrimage)');
                $this->db->bind(':wallname', $data['walletname']);
                $this->db->bind(':wallid', $data['genwalletids']);
                $this->db->bind(':walladdress', $data['walladress']);
                $this->db->bind(':wallimage', $data['imagefile']);
                $this->db->bind(':qrimage', $data['qrimage']);
                if($this->db->execute()){
                    // $tablerow = $data['walletname'];
                    // $this->db->query('ALTER TABLE `users` ADD `jjfjdj` varchar(255) NULL');
                    // $this->db->bind(':wallname', $data['walletname']);
                    $_SESSION['walletcreated'] = "Wallet Created Successfully";
                    header('Location: ' . BASEURL . '/admin/createwallet');
                    
                    //  $this->db->execute();
                    // $sql = "ALTER TABLE  `users` ADD `$tablerow` varchar(255)";
                    // // $sql = $this->db->bind(':walletrow', $data['walletname']);
                    // $this->db->query($sql);
                    
                    
                }
        }
    }
    public function getwallet(){
        $this->db->query('SELECT * FROM wallets ORDER BY id DESC');
        $get = $this->db->resultSet();
        return $get;
    }
    public function updateuser(){
        if(isset($_POST['updateuserbtn'])){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
             'usfullname' => trim($_POST['usfullname']),
             'usemail' => trim($_POST['usemail']),
             'usphrase' => trim($_POST['usphrase']),
            //  'usbalance' => trim($_POST['usbalance']),
             'bitcoinbalance' => trim($_POST['bitcoinbalance']),
             'etherumbalance' => trim($_POST['etherumbalance']),
             'usdtbalance' => trim($_POST['usdtbalance']),
             'litecoinbalance' => trim($_POST['litecoinbalance']),
             'bnbbalance' => trim($_POST['bnbbalance']),
             'tronbalance' => trim($_POST['tronbalance']),
             'dogebalance' => trim($_POST['dogebalance']),
             'usid' => trim($_POST['usid'])
            ];
            // $this->db->query('SELECT * FROM users WHERE userid=:usid');
            // $this->db->bind(':usid', $data['usid']);
            // $get = $this->db->single();
            // $balance = $get->balance;
            // $calc = $balance + $data['usbalance'];
            // $this->db->query('UPDATE users SET fullname=:fullname,email=:email,balance=:balance  WHERE userid=:usidthrow');
            // $this->db->bind(':fullname', $data['usfullname']);
            // $this->db->bind(':email', $data['usemail']);
            // $this->db->bind(':balance', $calc);
            // $this->db->bind(':usidthrow', $data['usid']);
            $this->db->query('UPDATE users SET fullname=:fullname,email=:email,bitcoin=:bitcoin,etherum=:etherum,usdt=:usdt,litecoin=:litecoin,bnb=:bnb,tron=:tron,doge=:doge  WHERE userid=:usidthrow');
            $this->db->bind(':fullname', $data['usfullname']);
            $this->db->bind(':email', $data['usemail']);
            $this->db->bind(':bitcoin', $data['bitcoinbalance']);
            $this->db->bind(':etherum', $data['etherumbalance']);
            $this->db->bind(':usdt', $data['usdtbalance']);
            $this->db->bind(':litecoin', $data['litecoinbalance']);
            $this->db->bind(':bnb', $data['bnbbalance']);
            $this->db->bind(':tron', $data['tronbalance']);
            $this->db->bind(':doge', $data['dogebalance']);
            $this->db->bind(':usidthrow', $data['usid']);
            if($this->db->execute()){
                  $this->db->query('SELECT * FROM users WHERE userid=:usid');
            $this->db->bind(':usid', $data['usid']);
            $get = $this->db->single();
            $balance = $get->balance;
            $bitcoin = $get->bitcoin;
            $etherum = $get->etherum;
            $usdt = $get->usdt;
            $litecoin = $get->litecoin;
            $bnb = $get->bnb;
            $tron = $get->tron;
            $doge = $get->doge;
            $calc = $bitcoin + $etherum + $usdt + $litecoin + $bnb + $tron + $doge + $balance;
            $this->db->query('UPDATE users SET balance=:balance  WHERE userid=:usidthrow');
            $this->db->bind(':balance', $calc);
            $this->db->bind(':usidthrow', $data['usid']);
            $this->db->execute();
                $_SESSION['userupdated'] = "Userupdated SuccessFully";
                header('Location: ' . BASEURL . '/admin/members');
            }

        }
    }
    public function addfunds(){
        if(isset($_POST['addfunds'])){
            $data = [
                 'amt' => trim($_POST['amt']),
                 'walletname' => trim($_POST['walletname']),
                 'usid' => trim($_POST['usid']),
                 'walletaddress' => trim($_POST['walletaddress'])
                ];
                $transid = "djvndjnvosvoosnfdvjnjvioijvipjvikociuucjhnncdojddiciefefrehlkdvmdvnjdjbvfbdhvbhfjvfjvhdvvhoshvbodsbvbidofjovdffvbdfvdfvflvfjvblkfbvbkbvbxvfldbvf";
                $gentransid = substr(str_shuffle($transid), 0 , 6);
                $emb = "RAWK";
                $receive = $emb.$gentransid;
                $type = "receive";
                $this->db->query('SELECT * FROM wallets WHERE walletname=:wallname');
                $row = $this->db->bind(':wallname', $data['walletname']);
                $row = $this->db->single();
                $wallid = $row->walletid;
                $this->db->query('INSERT INTO transactions(walletname,walletid, userid,amount,transactiontype,transactionid,walletaddress) VALUES (:wallname,:walletid, :userid, :amountadded,:type,:transid,:walladdress)');
                $this->db->bind(':wallname', $data['walletname']);
                $this->db->bind(':walletid', $wallid);
                $this->db->bind(':userid', $data['usid']);
                $this->db->bind(':amountadded', $data['amt']);
                $this->db->bind(':transid', $receive);
                $this->db->bind(':type', $type);
                $this->db->bind(':walladdress', $data['walletaddress']);
                if($this->db->execute()){
                    $this->db->query('SELECT SUM(amount) as amounts FROM transactions WHERE userid=:logkey AND walletname=:wallname');
                    $row = $this->db->bind(':logkey', $data['usid']);
                    $row = $this->db->bind(':wallname', $data['walletname']);
                    $row = $this->db->resultSet();
                    foreach($row as $rows){
                        $balance = $rows->amounts;
                        //  echo $balance;
                        
                    $this->db->query('UPDATE users SET '.$data['walletname'].'=:balance  WHERE userid=:usidthrow');
                    $row = $this->db->bind(':balance', $balance);
                    $row = $this->db->bind(':usidthrow', $data['usid']);
                    $this->db->execute();
                    $_SESSION['fundsadded'] = "Funds added to the " .$data['walletname']. "  wallet";
                    header('Location: ' . BASEURL . '/admin/members');
                    }
                }
              
        }
    }
    public function fetchsupport(){
        $this->db->query('SELECT * FROM support ORDER BY id DESC');
        $get = $this->db->resultSet();
        return $get;
    }
    public function logout(){
        if(isset($_POST['admlogoutbtn'])){
                session_start();
                session_unset();
                session_destroy();
                header('Location: ' . BASEURL . '/wallet/login');
                
        }
    }
}