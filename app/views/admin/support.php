<?php
$this->view("admin/activate"); 
$this->view("admin/partials/header"); 
$this->view("admin/partials/navbar");
?>
  <div class="main-content-inner">
                <!-- alert srea start -->
                <div class="alert-area">
                    <div class="row">
                       <?php
                       if ($data['fetchsupport']) {
                        foreach($data['fetchsupport'] as $wall){
                            $subject = $wall->subject;
                            $msgbody = $wall->msgbody;
                            $username = $wall->userid;
                        ?>
                             <div class="col-lg-4 col-md-6 mt-5">
                            <div class="card card-bordered">
                                <div class="card-body text-center">
                                    <div class="form-group">
                                        <label for="">Sent By:</label>
                                        <output class="form-control"><?= $username ?></output>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Message Title:</label>
                                        <output class="form-control"><?= $subject ?></output>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Message body:</label>
                                        <output class="form-control"><?= $msgbody ?></output>
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
$this->view("admin/partials/footer"); 
$this->view("admin/partials/scripts"); 
?>