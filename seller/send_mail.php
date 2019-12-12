 <?php include("user_header.php");   ?>
      <div class="content-wrapper">
        
<div class="page-title">
  <div>
    <h1><i class="fa fa-envelope"></i> Send Mail</h1>
  </div>
  <div>
    
  </div>
</div>

<div class="card">
       <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="text-center">Send Mail</h4>
        </div>
        <div class="panel-body">
            <form method="POST" action="">                
                <br>
                <div class="row">
                    <div class="col-md-2">
                        
                    </div>
                    
                    <div class="col-md-8">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">To</span>
                            <select class="form-control" name="fee_payment_session">
                                <option selected="selected">--select--</option>
                                <option>Mr Ezekiel</option><option>Isaiah</option><option>Sarah</option><option>Zara</option><option>Ola</option><option>Ebuka</option>                            
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Subject</span>
                            <input type="text" class="form-control" placeholder="Subject" >

                        </div>
                        <div class="">
                           <br>
                            <textarea cols="" rows="8" class="form-control" placeholder="type your message">
                              
                            </textarea>

                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        
                    </div>
                    
                    
                </div>
                <br>
                <center><input name="fetch_detail_btn" id="submit" value="Send Mail" class="btn btn-large btn-primary text-center" type="submit"></center>  
            </form>
           </div>
    </div>
</div>      </div>
        <?php include("user_footer.php");   ?>