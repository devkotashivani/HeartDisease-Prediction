
      <div class="container">

         <div class="col-sm-7 col-sm-offset-3 col-md-10 col-md-offset-1 main">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Us</div>
                <div class="panel-body">
                    <form name="editHome" method="post" action="<?php echo 'updateContactus'?>">
                        
                        <div class="form-group">
                                   
                                    <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="body1">mail:</label>
                                        <Input id="body1" name="body1" type="text" value="<?=$contactus['body1']?>" placeholder="Type here" class="form-control">
                                         </div>
                                  
                                                                           
                                   <div class="col-md-12">
                                        <label for="body2">phone no:</label>
                                        <Input id="body2" name="body2" type="text" value="<?=$contactus['body2']?>" placeholder="Type here" class="form-control">   
                                         </div> 

                                     <div class="col-md-6">
                                        <label for="b1">Terms and condition:</label>
                                        <textarea id="b1" name="b1"  placeholder="Type here" class="form-control" style="height:300px"> 
                                            <?php echo$contactus['b1']?>

                                        </textarea> 
                                         </div>


                             
                                   
                                   <div class="col-md-6">
                                        <label for="b2">Privacy:</label>
                                        <textarea id="b2" name="b2"  placeholder="Type here" class="form-control" style="height:300px">
                                        <?php echo $contactus['b2']?> 
                                         
                                        </textarea>                             
                                   
                                        </div>
                                
                                                                  



                        
                        <div class="form-group pull-left">
                            <input type="submit" name="edit" class="btn btn-default" value="Edit">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="button" class="btn btn-default" value="Clear" onclick=")">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


           
    </div>    
