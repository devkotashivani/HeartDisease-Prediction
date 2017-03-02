

        <div class="col-sm-7 col-sm-offset-3 col-md-10 col-md-offset-1 main">
            <div class="panel panel-default">
                <div class="panel-heading">About Us</div>
                <div class="panel-body">
                    <form name="editHome" method="post" action="<?php echo "updateAboutus"?>">
                        <div class="form-group">
                            <label for="head">Header:</label>
                            <Input id="head" name="head" type="text" value="<?=$aboutus['head']?>" placeholder="Type home header here" class="form-control">
                        </div>
                       
                        <div class="form-group" style="overflow:auto;">
                            <label for="body">Body:</label>
                            <textarea id="body" name="body" placeholder="Type home header here" class="form-control" rows="12" >
                                <?php echo $aboutus['content']?>
                            </textarea>
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
