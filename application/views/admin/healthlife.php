
<div class="container">
    <div class="text-center">

        
    </div>



<div class="col-sm-7 col-sm-offset-3 col-md-10 col-md-offset-1 main">
            <div class="panel panel-default">
                <div class="panel-heading">Health Life</div>
                <div class="panel-body">
                    <form name="editHome" method="post" action="<?php echo "updatehealthlife"?>">
                        <div class="form-group">
                            <label for="header">Header:</label>
                            <Input id="header" name="header" type="text" value="<?=$healthlife['header']?>" placeholder="Type home header here" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="subtitle">Subtitle:</label>
                            <Input id="subtitle" name="subtitle" type="text" value="<?php echo $healthlife['subtitle']?>" placeholder="Type home header here" class="form-control">
                        </div>
                        <div class="form-group">

                        <div class="col-md-4">
                        <label>body1</label>
                        <br/>
                        <input type="text" name="b1" value="<?php echo $healthlife['b1']?>" placeholder="type here">
                        <br/><br/>
                        <textarea id="body1" name="body1" placeholder="Type home header here" class="form-control" rows="12">
                            <?php echo $healthlife['body1']?>
                        </textarea>
                
                        </div>
                        <div class="col-md-4">
                        <label>body2</label>
                         <br/>
                         <input type="text" name="b2" value="<?php echo $healthlife['b2']?>"placeholder="type here">
                         <br><br/>
                        <textarea id="body2" name="body2" placeholder="Type home header here" class="form-control" rows="12">
                            <?php echo $healthlife['body2']?>
                        </textarea>
                       
                        </div>

						<div class="col-md-4">
						<label>body3</label>
						 <br/>
                         <input type="text" name="b3" value="<?php echo $healthlife['b3']?>" placeholder="type here">
                         <br><br/>
                        <textarea id="body3" name="body3" placeholder="Type home header here" class="form-control" rows="12">
                            <?php echo $healthlife['body3']?>
                        </textarea>
                       
                        </div>
                        </div>

                        <div class="form-group pull-left">
                            <input type="submit" name="edit" class="btn btn-default" value="Edit">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="button" class="btn btn-default" value="Clear" onclick="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>  


