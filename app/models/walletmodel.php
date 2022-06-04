<?php
class walletmodel{
   private $db;
   public function __construct(){
       $this->db = new Database;
   }
   public function checkotp(){
      if(isset($_POST['otpbtn'])){
         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
         $data = [
          'opttext' => trim($_POST['opttext'])
         ];
         $check="1";
         $this->db->query('UPDATE users SET otpcheck=:otpcheck  WHERE otpnum=:otpnum');
     $this->db->bind(':otpcheck', $check);
     $this->db->bind(':otpnum', $data['opttext']);
     if($this->db->execute()){
         header('Location: ' . BASEURL . '/wallet');
     }
      }
   }
   public function fetchuser(){
    if (isset($_SESSION['staked'])) {
        $logid = $_SESSION['staked'];
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
        $this->db->query('SELECT * FROM users WHERE email=:checkemail');
        $this->db->bind(':checkemail', $data['usemail']);
        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            $_SESSION['emailtaken'] =  "Email already exists";

            header('Location: ' . BASEURL . '/wallet/settings');
        }else{
            $this->db->query('UPDATE users SET fullname=:fname, email=:usemail  WHERE userid=:usid');
            $this->db->bind(':fname', $data['usfullname']);
            $this->db->bind(':usemail', $data['usemail']);
            $this->db->bind(':usid', $data['usid']);
            if($this->db->execute()){
                $_SESSION['successchange'] = "Details Succefully Changed";
                header('Location: ' . BASEURL . '/wallet/settings');
            }
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
            header('Location: ' . BASEURL . '/wallet/settings');
        }
        }
    }
}
public function govtproof(){
    if(isset($_POST['filebtn'])){

        $file = $_FILES['ninpassport'];
        $picturepostupload= $_FILES['ninpassport']['name'];
        $file_tmp = $_FILES['ninpassport']['tmp_name'];
     $fileSize= $_FILES['ninpassport']['size'];
     $fileError= $_FILES['ninpassport']['error'];
     $fileType= $_FILES['ninpassport']['type'];
     $fileExt = explode('.', $picturepostupload);
     $fileActualExt = strtolower(end($fileExt));
     $allowed = array('jpg', 'jpeg', 'png','JPG');
     
     if (in_array($fileActualExt, $allowed)) {
     if ($fileError === 0) {
      if ($fileSize < 250000000) {
        $fileNameNew1 = uniqid('', true).".".$fileActualExt;
         $fileDestination = 'ninupload/'.$fileNameNew1;
        move_uploaded_file($file_tmp, $fileDestination);
      }else{
        // echo "your file is too big";
        $_SESSION['bigfileerr'] =  "The image File is to Big";
     
       header('Location: ' . BASEURL . '/wallet/settings');
      }
     }else{
      echo "there was an error uploading your file";
      $_SESSION['errupload'] =  "There was an error uploading your file";
     
     header('Location: ' . BASEURL . '/wallet/settings');
     }
     }
     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
             'usid' => trim($_POST['usid']),
             'file' => $fileNameNew1
            ];
            $this->db->query('UPDATE users SET ninupload=:files  WHERE userid=:userid');
                $this->db->bind(':files', $data['file']);
                $this->db->bind(':userid', $data['usid']);
                if($this->db->execute()){
                    $_SESSION['ninuploaded'] = "Uploaded Successfully";
                    header('Location: ' . BASEURL . '/wallet/settings');
                }

    }
}
public function getwallet(){
    $this->db->query('SELECT * FROM wallets ORDER BY id DESC');
    $get = $this->db->resultSet();
    return $get;
}
public function transfer(){
    if(isset($_POST['transferbtn'])){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
         'amt' => trim($_POST['amt']),
         'walletaddress' => trim($_POST['walletaddress']),
         'wallname' => trim($_POST['wallname']),
         'wallid' => trim($_POST['wallid'])
        ];
        $transid = "1234532223d453267d788654d333267888g999s998337d6545g7f483927494s7394g7494742v92674927d36484k647383s836452894746388392748473473892091827347637282929273674657392294756382930596769708090847352342325375979089099058476352424325475970709858736374856960708080698346355254274970890";
        $gentransid = substr(str_shuffle($transid), 0 , 6);
        $emb = "RAWK";
        $receive = $emb.$gentransid;
        $type = "sent";
        $logid = $_SESSION['staked'];
        $this->db->query('SELECT SUM(amount) as amounts FROM transactions WHERE userid=:logkey AND walletname=:wallname');
        $row = $this->db->bind(':logkey', $logid);
        $row = $this->db->bind(':wallname', $data['wallname']);
        $row = $this->db->resultSet();
        foreach($row as $rows){
       $balance = $rows->amounts;
        // echo $balance;
                if($data['amt'] > $balance){
            $_SESSION['insufficient'] = "Insufficient Balance.(Check your balance and try again)";
            header('Location: ' . BASEURL . '/sendcoin/'.$data['wallid'].'');
        }else if($data['amt'] == "0"){
            $_SESSION['invalidamount'] = "Invalid Amount To Send";
            header('Location: ' . BASEURL . '/sendcoin/'.$data['wallid'].'');
        }else{
            $this->db->query('SELECT '.$data['wallname'].' as total FROM users WHERE userid=:logkey');
            $row = $this->db->bind(':logkey', $logid);
            $row = $this->db->single();
            $main = $row->total;
            $deduct = $main - $data['amt'];
            $this->db->query('UPDATE users SET '.$data['wallname'].'=:wallname  WHERE userid=:logkey');
                $this->db->bind(':wallname', $deduct);
                $row = $this->db->bind(':logkey', $logid);
                $this->db->execute();
                $this->db->query('INSERT INTO transactions(walletname,walletid,userid,amount,transactiontype,transactionid,walletaddress) VALUES (:wallname,:walletid, :userid, :amountadded,:type,:transid,:walladdress)');
                $this->db->bind(':wallname', $data['wallname']);
                $this->db->bind(':walletid', $data['wallid']);
                $this->db->bind(':userid', $logid);
                $this->db->bind(':amountadded', $data['amt']);
                $this->db->bind(':transid', $receive);
                $this->db->bind(':type', $type);
                $this->db->bind(':walladdress', $data['walletaddress']);
                if($this->db->execute()){
                  header('Location: ' . BASEURL . '/transfercoin/confirmation');
                }
        }
        }

    }
}
public function fetchwallet(){
    if (isset($_SESSION['staked'])) {
        $logid = $_SESSION['staked'];
        $this->db->query('SELECT * FROM users WHERE userid=:logkey');
        $row = $this->db->bind(':logkey', $logid);
        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
           return $row;
        }
 }
}
public function gettotal(){
    if (isset($_SESSION['staked'])) {
        $logid = $_SESSION['staked'];
        $this->db->query('SELECT * FROM users WHERE userid=:logkey');
        $row = $this->db->bind(':logkey', $logid);
        $row = $this->db->single();
        // return $row;
        $bitcoin = $row->bitcoin;
        $etherum = $row->etherum;
        $usdt= $row->usdt;
        $litecoin = $row->litecoin;
        $bnb = $row->bnb;
        $tron = $row->tron;
        $doge = $row->doge;
        $calc = $bitcoin + $etherum + $usdt + $litecoin + $bnb + $tron + $doge;
        return $calc;
 }
}
public function sendmsg(){
    if(isset($_POST['sendbtn'])){
        $logid = $_SESSION['staked'];
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
         'subject' => trim($_POST['subject']),
         'msgbody' => trim($_POST['msgbody']),
         'userid' => $logid
        ];
        $this->db->query('INSERT INTO support(subject,msgbody,userid) VALUES (:subject,:msgbody,:userid)');
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':msgbody', $data['msgbody']);
        $this->db->bind(':userid', $data['userid']);
        if($this->db->execute()){
            $_SESSION['msgsuccess'] = "Message Successfully Sent";
            header('Location: ' . BASEURL . '/wallet/support');
        }
    }
}

public function getcoin($u){
    $query =  $this->db->query('SELECT * FROM wallets WHERE walletid=:value ORDER BY id DESC');
    $coin = $this->db->bind(':value', $u);
    $coin = $this->db->single();
    return $coin;
}
public function getsend($u){
    $logid = $_SESSION['staked'];
    $type = "sent";
    $this->db->query('SELECT * FROM transactions WHERE userid=:logkey AND walletid=:coin AND transactiontype=:type');
            $row = $this->db->bind(':logkey', $logid);
            $row = $this->db->bind(':coin', $u);
            $row = $this->db->bind(':type', $type);
            $row = $this->db->resultSet();
            return $row;
}
public function getreceive($u){
    $logid = $_SESSION['staked'];
    $type = "receive";
    $this->db->query('SELECT * FROM transactions WHERE userid=:logkey AND walletid=:coin AND transactiontype=:type');
            $row = $this->db->bind(':logkey', $logid);
            $row = $this->db->bind(':coin', $u);
            $row = $this->db->bind(':type', $type);
            $row = $this->db->resultSet();
            return $row;
}
public function getsent(){
    if(isset($_POST['sentid2'])){
        $sentid = $_POST['sentid2'];
        $type = "sent";
        $this->db->query('SELECT * FROM transactions WHERE transactionid=:transid AND transactiontype=:type');
            $row = $this->db->bind(':type', $type);
            $row = $this->db->bind(':transid', $sentid);
            $row = $this->db->single();
            return $row;
    }
}
public function getreceived(){
    if(isset($_POST['receivedid2'])){
       $receiveid = $_POST['receivedid2'];
       $type = "receive";
       $this->db->query('SELECT * FROM transactions WHERE transactionid=:transid AND transactiontype=:type');
           $row = $this->db->bind(':type', $type);
           $row = $this->db->bind(':transid', $receiveid);
           $row = $this->db->single();
           return $row;
    }
}
}