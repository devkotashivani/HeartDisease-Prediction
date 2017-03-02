<div class="col-sm-7 col-sm-offset-3 col-md-10 col-md-offset-1 main">
            <div class="panel panel-default">
                <div class="panel-heading">Home Page</div>
                <div class="panel-body">
                    <form name="editHome" method="post" action="<?php echo "updateHome"?>">
                        <div class="form-group">
                            <label for="head">Header:</label>
                            <Input id="head" name="head" type="text" value="<?php echo $home['head']; ?>" placeholder="Type home header here" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="body">Body:</label>
                            <textarea id="body" name="body" placeholder="Typemhere" class="form-control">
                            <?php echo $home['body'];?>
                         </textarea>  
                        </div>

                       
                        <div class="form-group pull-left">
                        <br/>
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


