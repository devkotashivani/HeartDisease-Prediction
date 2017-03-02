

<div class="col-sm-7 col-sm-offset-3 col-md-10 col-md-offset-1 main">
            <div class="panel panel-default">
                <div class="panel-heading">Edit chart</div>
                <div class="panel-body">
<div id="page-wrapper">

    <div class="container-fluid" >
        <form name='Edit Content' clas enctype='multipart/form-data' action="<?=site_url('dashboard/update').'/'.$charts['id']?>" method='post'>
            <table align="center" >
                <div class="text-center"> 
                    <img src="<?php echo base_url(); ?>img/upload/<?php echo $charts['image']; ?>" height='100px' width='200px'> 
                </div>
               
                
                <tr>
                    <td> Title: </td>
                    <td> <input class="form-control" name="Title" value="<?php echo $charts['Title'];?>"></td>
                 </tr>

                 <tr>
                    <td> Description: </td>
                    <td> 
                        <textarea rows="10" cols="50" class="form-control" name="Description">
                            <?php echo $charts['Description'];?>
                        </textarea>
                    </td>
                 </tr>
                        
                <tr>
                    <td> <input type='submit' name='submit' value='UPDATE'> </td>
                </tr>
            </table>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
