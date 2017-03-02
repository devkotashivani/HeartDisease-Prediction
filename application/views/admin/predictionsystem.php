<div id="page-wrapper">
    <div class="container-fluid">
    <div class="col-lg-offset-3 col-lg-4">

        <form name='addgallery' enctype='multipart/form-data' action='<?=site_url()?>/dashboard/predictionsystem' method='post'>
            <table>
                <tr>
                    <td> Add Chart: </td>
                   
                    <td> <input type='file' name='image'> </td>
                </tr>
                 <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td> Title: </td>
                    <td>
                        <input class="form-control" name="title" placeholder="Title*" style="color:black" >
                     </td>
                 </tr>  

                                
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>

                <tr>
                    <td> Description: </td>
                    <td>
                       <textarea name = "description" placeholder="Description*" style="width:350px; height:100px; color:black">
                           
                       </textarea>
                     </td>
                 </tr>
                 <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                    <td> <input type='submit' name='submit' value='Update' style="color:black;"> </td>
                </tr>
            </table>
        </form>
        </div>

        <div class="col-lg-offset-2 col-lg-8">

        <h2></h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th><center>Id</center></th>    <?php $count = 1; ?>
                        <th><center>Image</center></th>
                        <th><center>Title</center></th>
                        <th><center>Description</center></th>
                        
                        <th colspan='2'><center>Option</center></th>
                    </tr>
                </thead>
                <tbody>
                
                   <?php if ($charts != NULL) { ?>
                        <?php foreach ($charts as $ch): ?>
                            <tr>
                                <td align='center'><?php echo $count++; ?></td>
                                <td align='center'>
                                    <img src="<?php echo base_url();?>img/upload/<?php echo $ch['image'];?>" height="100px" width="200px">
                                </td>
                                <td align='center'><?php echo $ch['Title'] ?></td>
                                <td align='center'><?php echo $ch['Description']?></td>
                               
                                <td align="center"> <a href="<?=site_url("dashboard/edit").'/'.$ch['id']?>" > Edit </a></td>
                                <td align="center"> <a onclick="return confirm('Are you sure?');" href="<?=site_url("dashboard/delete").'/'.$ch['id']?>""> Delete </a> </td>
                            </tr>
                        <?php endforeach; }?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
