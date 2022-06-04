<?php
class authmodel{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function signup(){
        if(isset($_POST['signupbtn'])){
            function phrase() {
                $phrase1 = array(
                    'cup',
                    'not',
                    'bit',
                    'read',
                    'net',
                    'low',
                    'throw',
                    'fill',
                    'feel',
                    'lock',
                    'that',
                    'loop',
                    'up',
                    'down',
                    'wet',
                );
            
                $phrase2 = array(
                    'lock',
                    'that',
                    'loop',
                    'go',
                    'chew',
                    'tap',
                    'pow',
                    'get',
                    'jit',
                    'ket',
                    'bit',
                    'read',
                    'net',
                );
                $phrase3 = array(
                    'up',
                    'down',
                    'wet',
                    'crew',
                    'row',
                    'queue',
                    'was',
                    'lip',
                    'get',
                    'jit',
                    'ket',
                    'chew',
                    'pow',
                );
                $phrase4 = array(
                    'how',
                    'hey',
                    'bow',
                    'blink',
                    'sip',
                    'key',
                    'will',
                    'less',
                    'grow',
                    'zet',
                    'mit',
                    'new',
                    'lim',
                );
                $phrase5 = array(
                    'cup',
                    'not',
                    'bit',
                    'read',
                    'catch',
                    'git',
                    'new',
                    'ban',
                    'zeal',
                    'bet',
                    'hit',
                    'month',
                    'few',
                );
                $phrase6 = array(
                    'lope',
                    'tye',
                    'vit',
                    'fet',
                    'ricket',
                    'space',
                    'settings',
                    'window',
                    'far',
                    'hair',
                    'car',
                    'pouch',
                    'float',
                );
                $phrase7 = array(
                    'char',
                    'put',
                    'palm',
                    'boom',
                    'read',
                    'catch',
                    'git',
                    'far',
                    'sip',
                    'key',
                    'will',
                );
                $phrase8 = array(
                    'tab',
                    'change',
                    'heir',
                    'nap',
                    'cruel',
                    'function',
                    'model',
                    'activate',
                    'ray',
                    'light',
                    'with',
                );
                $phrase9 = array(
                    'you',
                    'var',
                    'vit',
                    'gut',
                    'view',
                    'hot',
                    'flee',
                    'hope',
                    'deg',
                    'but',
                    'bongs',
                );
                $phrase10 = array(
                    'car',
                    'pouch',
                    'float',
                    'gut',
                    'you',
                    'var',
                    'vit',
                    'hope',
                    'sip',
                    'key',
                    'will',
                );
                $phrase11 = array(
                    'path',
                    'gat',
                    'coin',
                    'clay',
                    'park',
                    'public',
                    'private',
                    'space',
                    'mate',
                    'jot',
                    'mill',
                );
                $phrase12 = array(
                    'bin',
                    'nab',
                    'flat',
                    'cool',
                    'free',
                    'incredible',
                    'goal',
                    'light',
                    'tunnel',
                    'saw',
                    'dash',
                );
            
                // $name = $firstname[rand ( 0 , count($firstname)
                // $name .= ' ';
                // $name .= $lastname[rand ( 0 , count($lastname) -1)];
            
                // return $name;
                
                $first = $phrase1[rand ( 0 , count($phrase1) -1)];
                $second = $phrase2[rand ( 0 , count($phrase2) -1)];
                $third = $phrase3[rand ( 0 , count($phrase3) -1)];
                $fourth = $phrase4[rand ( 0 , count($phrase4) -1)];
                $fifth = $phrase5[rand ( 0 , count($phrase5) -1)];
                $sixth = $phrase6[rand ( 0 , count($phrase6) -1)];
                $seventh = $phrase7[rand ( 0 , count($phrase7) -1)];
                $eight = $phrase8[rand ( 0 , count($phrase8) -1)];
                $nine = $phrase9[rand ( 0 , count($phrase9) -1)];
                $ten = $phrase10[rand ( 0 , count($phrase10) -1)];
                $eleven = $phrase11[rand ( 0 , count($phrase11) -1)];
                $twelve = $phrase12[rand ( 0 , count($phrase12) -1)];
            
               return $keyphrase = $first.'  '.$second.'  '.$third.'  '.$fourth.'  '.$fifth.'  '.$sixth.'  '.$seventh.'  '.$eight.'  '.$nine.'  '.$ten.'  '.$eleven.'  '.$twelve;
            }
               $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
             'fullname' => trim($_POST['fname']),
             'email' => trim($_POST['email']),
             'passlog' => trim($_POST['password']),
             'comfirmpass' => trim($_POST['compassword']),
            ];
            // hash the password
            $data['passlog'] = password_hash($data['passlog'], PASSWORD_DEFAULT);
            $otpcheck = "0";
            // otpnumber generation
            $num = "1234532223d453267d788654d333267888g999s998337d6545g7f483927494s7394g7494742v92674927d36484k647383s836452894746388392748473473892091827347637282929273674657392294756382930596769708090847352342325375979089099058476352424325475970709858736374856960708080698346355254274970890";
            $otpnumber = substr(str_shuffle($num), 0 , 6);
            // user id
            $tapnameappend = "STK";
            $getid = "738389399487575894949303020293747567585960070808726526132543856978099098463648596798098985634232232634875869679324263734854960708090965746352372829495890809097574523424326859709090807573524";
               $getrandid = substr(str_shuffle($getid), 0 , 7);
               $userid = $tapnameappend.$getrandid;
               // phrase number generate
               $getphrase1 = "738389399487575894949303020293747567585960070808726526132543856978099098463648596798098985634232232634875869679324263734854960708090965746352372829495890809097574523424326859709090807573524";
               $getphrase2 = "73838939948gsvucudeufe8f8q9w0dwsyfgqwedewq9ddushudchdscggvcugf8eqdvwe87dev8vyyvvdfdfevevvdhbbwefbewfbewufq98wd98ywbq8yd9bebedb9ddbeq9qb09dq0bd0bebeb0fnundiebdeob7573524";
               $getrandphrase1 = substr(str_shuffle($getphrase1), 0 , 10);
               $getrandphrase2 = substr(str_shuffle($getphrase2), 0 , 10);
               $r = "RAWK";
               $s = "SEED";
               $phrasenumber = $r . $s . $getrandphrase1 . $getrandphrase2;

               // check for email already taken
               $this->db->query('SELECT * FROM users WHERE email=:checkemail');
               $this->db->bind(':checkemail', $data['email']);
               $row = $this->db->single();
               if ($this->db->rowCount() > 0) {
                //   echo "email already taken";
                  $_SESSION['emailtaken'] =  "Email already exists";

                  header('Location: ' . BASEURL . '/wallet/signup');
               }elseif($_POST['password'] != $_POST['compassword']){
                $_SESSION['notmatch'] =  "Password Does Not Match";

                header('Location: ' . BASEURL . '/wallet/signup');
               }else{
                $this->db->query('INSERT INTO users(fullname,email,password,passphrase,otpcheck,otpnum,userid) VALUES (:fullname, :email, :password, :passphrase, :otpcheck, :otpnum, :userid)');
                $this->db->bind(':fullname', $data['fullname']);
                $this->db->bind(':email', $data['email']);
                $this->db->bind(':password', $data['passlog']);
                $this->db->bind(':passphrase', phrase());
                $this->db->bind(':otpcheck', $otpcheck);
                $this->db->bind(':otpnum', $otpnumber);
                $this->db->bind(':userid', $userid);
                if($this->db->execute()){
                    $this->db->query('SELECT email,userid FROM users WHERE email=:email');
		    $this->db->bind(':email', $data['email']);
            if ($this->db->single()) {
                $row = $this->db->single();
                $email = $row->email;
                $userid = $row->userid;

                $_SESSION['staked'] = $userid;

               header('Location: ' . BASEURL . '/wallet');
//                $from  = WEBSITE_TITLE; 
//                $namefrom = WEBSITE_TITLE;
// $mail = new PHPMailer();
// $mail->SMTPDebug = 0;
// $mail->CharSet = 'UTF-8';
// $mail->isSMTP();
// $mail->SMTPAuth   = true;
// $mail->Host   = HOST;
// $mail->Port       = 465;
// $mail->Username   = $from;
// $mail->Password   = HOST_PASSWORD;
// $mail->SMTPSecure = "ssl";
// $mail->setFrom(SUPPORT, WEBSITE_TITLE);
// $mail->addAddress($data['email']);
// $mail->Subject  = ''.WEBSITE_TITLE.' OTP MESSAGE';
// $mail->isHTML();
// $mail->Body = 'Your Otp Number : '.$otpnumber.'';
// $mail->AltBody  = 'OTP MESSAGE';
// return $mail->send();
            }
                }
               }

        }
    }
    public function login(){
        if(isset($_POST['logbtn'])){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
             'email' => trim($_POST['email']),
             'password' => trim($_POST['password']),
            ];
            $this->db->query('SELECT email,password,usertype,userid FROM users WHERE email=:email');
		    $this->db->bind(':email', $data['email']);
            $this->db->execute();
            if ($this->db->execute()) {
                if ($this->db->rowCount() === 1) {
                    if ($row = $this->db->single()) {
                        $pass = $row->password;
                        $emailpass = $row->email;
                        $usertype = $row->usertype;
                        $userid = $row->userid;
                        if (password_verify($data['password'],$pass)) {
                            if ($usertype == "admin") {
                               
                                $_SESSION['admin'] = $userid;
                               header('Location: ' . BASEURL . '/admin');
                                      exit;
                     }else{
                       $_SESSION['staked'] = $userid;
                     header('Location: ' . BASEURL . '/wallet');
                            exit;
                     }
                        }else{
                            // echo "password is invalid";
                            $_SESSION['invalidpassword'] =  "Password is invalid";

                            header('Location: ' . BASEURL . '/wallet/login');
                        }
                    }else{}
                }else{
                    // echo "invalid details";
                    $_SESSION['invaliddetails'] =  "Invalid Credentials";

                    header('Location: ' . BASEURL . '/wallet/login');
                }
            }
        }
    }
    public function forgot(){
        if(isset($_POST['linkbtn'])){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
             'email' => trim($_POST['email'])
            ];
            $this->db->query('SELECT * FROM users WHERE email=:checkemail');
            $this->db->bind(':checkemail', $data['email']);
            $row = $this->db->single();
            if ($this->db->rowCount() > 0) {
                $token = "wfwejfekmflenflmelfmedhcdkjvdj2envjkdnjvjjkdlvnldsnvlnkdfvjrjovpjrkvlmlsdmlmvkodvodnkvjdlswheofewojfkowrfruijvnknvjkdscpadsjcjdoeovcdkdvdnvledkldlvdhvdhkvbhoacjdjvdbivchsdjvldjaooudgrowgpowr647230292746r29029e38r743r8r9e2e0wuf";
                $gentoken = substr(str_shuffle($token), 0 , 15);
                $this->db->query('UPDATE users SET token=:token  WHERE email=:email');
                $row = $this->db->bind(':token', $gentoken);
                $row = $this->db->bind(':email', $data['email']);
                $this->db->execute();
               $_SESSION['emailsent'] =  "Check Your Mail for Confirmation";
               header('Location: ' . BASEURL . '/wallet/forgot');

            //    $from  = WEBSITE_TITLE; 
            //    $namefrom = WEBSITE_TITLE;
            //    $mail = new PHPMailer();
            //    $mail->SMTPDebug = 0;
            //    $mail->CharSet = 'UTF-8';
            //    $mail->isSMTP();
            //    $mail->SMTPAuth   = true;
            //    $mail->Host   = HOST;
            //    $mail->Port       = 465;
            //    $mail->Username   = $from;
            //    $mail->Password   = HOST_PASSWORD;
            //    $mail->SMTPSecure = "ssl";
            //    $mail->setFrom(SUPPORT, WEBSITE_TITLE);
            //    $mail->addAddress($data['email']);
            //    $mail->Subject  = ''.WEBSITE_TITLE.' Forgot Password';
            //    $mail->isHTML();
            //    $mail->Body = 'HELLO, click on this <a href="'.BASEURL.'/wallet/reset/?token='.$gentoken.'">Link</a> To reset your password';
            //    $mail->AltBody  = 'Reset Your Password';
            //    return $mail->send();

            $to = $data['email'];
            $subject = ''.WEBSITE_TITLE.' Forgot Password';
            $txt = '
            <!Dctype html>
            <html>
<head>
<title>Password Change</title>
</head>
<body>
<p>Hello, Welcome to Rawkchain</p>
<table>
<tr>
<th>Do You want to change your email</th>
</tr>
<tr>
<td>Click on these <a href="'.BASEURL.'/wallet/reset/?token='.$gentoken.'">Link</a> To reset your password</td>
</tr>
</table>
</body>
</html>
            ';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers = "From: support@rawkchain.com" . "\r\n" .
            "CC: support@rawkchain.com";
            
            mail($to,$subject,$txt,$headers);
               
            }else{
                $_SESSION['wrongemail'] =  "We dont have That email";
               header('Location: ' . BASEURL . '/wallet/forgot');
            }
        }
    }
    public function reset(){
        if(isset($_POST['newpwdbtn'])){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
             'token' => trim($_POST['hiddentoken']),
             'newpassword' => trim($_POST['newpassword']),
             'compassword' => trim($_POST['newcompassword']),

            ];
            if($data['newpassword'] != $data['compassword']){
                $_SESSION['passerror'] =  "Password do not match";
               header('Location: ' . BASEURL . '/wallet/reset/?token='.$data['token'].'');
            }else{
                $hashed = password_hash($data['newpassword'], PASSWORD_DEFAULT);
                $this->db->query('UPDATE users SET password=:pass  WHERE token=:token');
                $row = $this->db->bind(':token', $data['token']);
                $row = $this->db->bind(':pass', $hashed);
                if($this->db->execute()){
                    $_SESSION['changedsuccessfully'] =  "Password changed successfully (You may now login)";
                    header('Location: ' . BASEURL . '/wallet/login');
                }
            }
        }
    }
    public function resendotp(){
        if(isset($_POST['resendotpbtn'])){
            $logid = $_SESSION['staked'];
            $num = "1234532223d453267d788654d333267888g999s998337d6545g7f483927494s7394g7494742v92674927d36484k647383s836452894746388392748473473892091827347637282929273674657392294756382930596769708090847352342325375979089099058476352424325475970709858736374856960708080698346355254274970890";
            $otpnumber = substr(str_shuffle($num), 0 , 6);
            $this->db->query('SELECT email FROM users WHERE userid=:userid');
            $this->db->bind(':userid', $logid);
            $row = $this->db->single();
            $email = $row->email;
            $this->db->query('UPDATE users SET otpnum=:otpnum  WHERE userid=:userid');
            $row = $this->db->bind(':otpnum', $otpnumber);
            $row = $this->db->bind(':userid', $logid);
            if($this->db->execute()){
                $_SESSION['otpresent'] =  "Otp ReSent To your mail";
                header('Location: ' . BASEURL . '/otpcheck');
                $from  = WEBSITE_TITLE; 
                $namefrom = WEBSITE_TITLE;
$mail = new PHPMailer();
$mail->SMTPDebug = 0;
$mail->CharSet = 'UTF-8';
$mail->isSMTP();
$mail->SMTPAuth   = true;
$mail->Host   = HOST;
$mail->Port       = 465;
$mail->Username   = $from;
$mail->Password   = HOST_PASSWORD;
$mail->SMTPSecure = "ssl";
$mail->setFrom(SUPPORT, WEBSITE_TITLE);
$mail->addAddress($email);
$mail->Subject  = ''.WEBSITE_TITLE.' OTP MESSAGE';
$mail->isHTML();
$mail->Body = 'Your Otp Number : '.$otpnumber.'';
$mail->AltBody  = 'OTP MESSAGE';
return $mail->send();
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

    public function logout(){
        if(isset($_POST['logoutbtn'])){
            if (isset($_SESSION['staked'])) {
                session_start();
                session_unset();
                session_destroy();
                header('Location: ' . BASEURL . '/wallet/login');
                }
        }
    }
}