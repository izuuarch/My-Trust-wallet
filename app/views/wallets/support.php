<?php
    $this->view("wallets/partials/header",$data); 
    ?>
    <div class="d-flex justify-content-center">
    <div class="col-lg-6">
            <div class="au-card m-b-30">
                <div class="au-card-inner">
                <?php
    if(isset($_SESSION['msgsuccess']) && $_SESSION['msgsuccess'] !='')
    {
      echo '<h6 style="color: green;">'.$_SESSION['msgsuccess'].'</h6>';
      unset($_SESSION['msgsuccess']);
          } 
          ?>
<form action="<?= BASEURL?>/wallet/sendmsg" method="post">
        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Subject</label>
                        <input class="form-control" type="text" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Message Body</label>
                        <textarea name="msgbody" id="" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">                                   
                        <button class="btn btn-md  btn-lg btn-block" name="sendbtn" style="background: black; color: #fff;">Send Message</button>
                    </div>
                    
        </form>
                </div>
            </div>
         </div>
    </div>
<?php
 $this->view("wallets/partials/footer",$data);  
 ?>