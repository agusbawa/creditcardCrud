<?php echo form_open(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="credit-card-div">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h5 class="text-muted"> Credit Card Number</h5>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="cardNumber" name="cardNumber" class="form-control" value="<?php if($data){echo $data['cardNumber']; } ?>" placeholder="Card Number" />
                                <label class="control-label hide" id="cardNumber-error" for="cardNumber">We just receive Visa card</label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font"> Expiry Month</span>
                                <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                                    <option value="">Month</option>
                                    <?php 
                                        $listMonth = array('01','02','03','04','05','06','07','08','09','10','11','12');
                                        foreach($listMonth as $m){
                                    ?>
                                    <option value="<?php echo $m ?>" <?php if(isset($data['expireMonth']) && $data['expireMonth'] == $m){ ?>selected="selected" <?php } ?>><?php echo $m ?></option>
                                    <?php } ?>
                                  </select>
                                <label class="control-label hide" id="expiry-month-error" for="expiry-month">Please Input Expire month</label>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font">  Expiry Year</span>
                                <select class="form-control" name="expiry-year">
                                    <?php for($a = date('Y');$a <= date('Y')+10;$a++){ ?>
                                    <option value="<?php echo $a; ?>" <?php if(isset($data['yearExpired']) && $data['yearExpired'] == $a){ ?>selected="selected" <?php } ?>><?php echo $a; ?></option>
                                    <?php } ?>
                                  </select>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font">  CCV</span>
                                <input type="text" class="form-control" id="ccv" name="ccv" value="<?php if($data){echo $data['cvv']; } ?>" placeholder="CCV" />
                                <label class="control-label hide" id="ccv-error" for="ccv">Please Input CCV</label>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img src="data:image/png;base64,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" class="img-rounded" />
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 pad-adjust">
                                <input type="text" class="form-control" name="nameoncard" id="nameoncard" value="<?php if($data){echo $data['nameoncard']; } ?>" placeholder="Name On The Card" />
                                <label class="control-label hide" id="nameoncard-error" for="nameoncard">Please Input CCV</label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                                <input type="hidden" name="pid" value="<?php if($data){echo $data['pid']; } ?>" />
                                <input type="submit" id="submit-btn" class="btn btn-warning btn-block hide" value="Save" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- CREDIT CARD DIV END -->
        </div>
    </div>
</div>
<?php echo form_close(); ?>
<script type="text/javascript">
    
    var errorType = true;
    var expireMonth = true;
    var ccv = true;
    var nameCard = true;
    
   function startingCheck(){
       if($("#expiry-month").val() == ''){
                $("#expiry-month").parent("div").addClass("has-error");
                $("#expiry-month-error").removeClass('hide');
                expireMonth = true;
            }else{
                $("#expiry-month").parent("div").removeClass("has-error");
                $("#expiry-month-error").addClass('hide');
                expireMonth = false;
            }
            
        if($("#ccv").val() == ''){
                $("#ccv").parent("div").addClass("has-error");
                $("#ccv-error").removeClass('hide');
                ccv = true;
            }else{
                $("#ccv").parent("div").removeClass("has-error");
                $("#ccv-error").addClass('hide');
                ccv = false;
            }
            
        if($("#nameoncard").val() == ''){
                $("#nameoncard").parent("div").addClass("has-error");
                $("#nameoncard-error").removeClass('hide');
                nameCard = true;
            }else{
                $("#nameoncard").parent("div").removeClass("has-error");
                $("#nameoncard-error").addClass('hide');
                nameCard = false;
            }
            
            checkValid();
   }
    function checkValid(){
            if(errorType == false && expireMonth == false && ccv == false && nameCard == false){
                $("#submit-btn").removeClass("hide");
            }else{
                $("#submit-btn").addClass("hide");
            }
        }
    $(function(){
        
        startingCheck();
        $('input#cardNumber').validateCreditCard(function(result) {
            console.log(result);
            if(result.card_type !== null){
                if(result.card_type.name == 'visa' && result.length_valid === true){
                    $("#cardNumber").parent("div").removeClass("has-error");
                    $("#cardNumber-error").addClass('hide');
                    errorType = false;
                }else{
                    $("#cardNumber").parent("div").addClass("has-error");
                    $("#cardNumber-error").removeClass('hide');
                    errorType = true;
                }
            }else{
                $("#cardNumber").parent("div").addClass("has-error");
                $("#cardNumber-error").removeClass('hide');
                errorType = true;
            }
            checkValid();
        });
        
        $('#expiry-month').change(function(){
            if($(this).val() == ''){
                $("#expiry-month").parent("div").addClass("has-error");
                $("#expiry-month-error").removeClass('hide');
                expireMonth = true;
            }else{
                $("#expiry-month").parent("div").removeClass("has-error");
                $("#expiry-month-error").addClass('hide');
                expireMonth = false;
            }
            checkValid();
        });
        
        $('#ccv').blur(function(){
            if($(this).val() == ''){
                $("#ccv").parent("div").addClass("has-error");
                $("#ccv-error").removeClass('hide');
                ccv = true;
            }else{
                $("#ccv").parent("div").removeClass("has-error");
                $("#ccv-error").addClass('hide');
                ccv = false;
            }
            checkValid();
        });
        
        $('#nameoncard').blur(function(){
            if($(this).val() == ''){
                $("#nameoncard").parent("div").addClass("has-error");
                $("#nameoncard-error").removeClass('hide');
                nameCard = true;
            }else{
                $("#nameoncard").parent("div").removeClass("has-error");
                $("#nameoncard-error").addClass('hide');
                nameCard = false;
            }
            checkValid();
        });
        
        
        
    });
</script>