

<section id="p_system" class="section gray-bg">
    <div id="row" class="container">
        <div  class="row title text-center">
            <h2 class="margin-top"><?php echo $p_system['content']?></h2>
            <h5 class="light muted">Please enter the content</h5>
        </div>

        <div class="row" >
        
                
                <form  name="frmpredict" method="post" action="<?php echo site_url('an/pre')?>" onSubmit="return PredictFormValidate()">

                
                    <div  class="form-group " >
                        <div  class="col-lg-offset-3 col-lg-6">

                            <div id="form">
                            <label for="cn_age" ></label>
                            <input id="cn_age" name="age" type="text" class="form-control " placeholder="Your Age(25-80)"> 
                            </div>   
                

                                 <div id="form" class="radio form-control ">                                    
                                     BloodPresure:
                                      <label><input id="cn_bloodpressure" type="radio" name="bp" value="1" required>High</label>
                                   
                                      <label><input id="cn_bloodpressure" type="radio" name="bp" value="0">Normal</label>

                                      <label><input id="cn_bloodpressure" type="radio" name="bp" value="-1">Low</label>
                                    </div>


                                     <div id="form" class="radio form-control ">                                    
                                     BloodCholestrol:
                                      <label><input id="cn_bc" type="radio" name="bc" value="1" required>High</label>
                                   
                                      <label><input id="cn_bc" type="radio" name="bc" value="0">Normal</label>

                                      <label><input id="cn_bc" type="radio" name="bc" value="-1">Low</label>
                                      
                                    </div>

                                     <div id="form" class="radio form-control ">                                    
                                     Physical Activity:
                                      <label><input id="cn_pa" type="radio" name="pa" value="1" required>High</label>
                                   
                                      <label><input id="cn_pa" type="radio" name="pa" value="0">Normal</label>

                                      <label><input id="cn_pa" type="radio" name="pa" value="-1">Low</label>
                                      
                                    </div>

                                    <div id="form" class="radio form-control ">                                    
                                     Diet:
                                      <label><input id="cn_diet" type="radio" name="diet" value="-1" required>Poor</label>
                                   
                                      <label><input id="cn_diet" type="radio" name="diet" value="0">Normal</label>

                                      <label><input id="cn_diet" type="radio" name="diet" value="1">Good</label>
                                      
                                    </div>
                            
                             <div  id="form" class="radio form-control">                                    
                                     Stress: <label><input id="cn_stress" type="radio" name="stress" value='1' required>Yes</label>
                                   
                                      <label><input id="cn_stress" type="radio" name="stress" value='0'>No</label>
                                    </div>
                                                        
                               
                                    <div id="form" class="radio form-control ">                                    
                                     Sex: <label><input id="cn_sex" type="radio" name="sex" value="1" required>Male</label>
                                   
                                      <label><input id="cn_sex" type="radio" name="sex" value="0">Female</label>
                                    </div>

                                     <div id="form"  class="radio form-control">                                    
                                     Heriditary: <label><input id="cn_heriditary" type="radio" name="heriditary" value="1" required>Yes</label>
                                   
                                      <label><input id="cn_heriditary" type="radio" name="heriditary" value="0">No</label>
                                    </div>

                                     <div id="form" class="radio form-control">                                    
                                     Smoke: <label><input id="cn_smoke" type="radio" name="smoke" value="1" required>Yes</label>
                                   
                                      <label><input id="cn_smoke" type="radio" name="smoke" value="0">No</label>
                                    </div>
                                     <div id="form" class="radio form-control">                                    
                                     Alchohol Intake: <label><input id="cn_ai" type="radio" name="alcohol" value="1" required>Yes</label>
                                   
                                      <label><input id="cn_ai" type="radio" name="alcohol" value="0">No</label>
                                    </div>

                                     <div id="form" class="radio form-control">                                    
                                     Obesity: <label><input id="cn_obesity"  type="radio" name="obesity" value="1" required>Yes</label>
                                   
                                      <label><input id="cn_obesity"  type="radio" name="obesity" value="0">No</label>
                                    </div>

                                     <div id="form" class="radio form-control">                                    
                                     Diabetes: <label><input id="cn_diabetes" type="radio" name="diabetes" value="1" required>Yes</label>
                                   
                                      <label><input id="cn_diabetes" type="radio" name="diabetes" value="0">No</label>
                                    </div>

                                </div>
                            </div>

                        
                        <div class="row">
	                        <div class="form-group">
	                        <div class="col-lg-offset-3 col-lg-6 text-right">
                            <br/>
	                            <input type="submit" class="btn btn-default"  value="Predict" style="background-color: black">
	                        </div>
	                        </div>
                        </div>
                       

                    
                </form>

            </div>
        </div>
    </div>
</div>

        </div>


        

</section>




<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    function PredictFormValidate(){
    var age=document.getElementById("cn_age");
    var sex=document.getElementById("cn_sex");
    var smoke=document.getElementById("cn_smoke");    
    var bloodpressure=document.getElementById("cn_bloodpressure");
    var bloodchloestrol=document.getElementById("cn_bloodchloestrol");
    var stress=document.getElementById("cn_stress");
    var heredity=document.getElementById("cn_heredity");
    if(age.value=="")
    {

        if(age.value=="")
        {
            age.style.border="solid 1px red";
            age.boxShadow="0 0 5px 1px red";
            age.placeholder="Age is required";
            age.focus();
            return false;
        }   else    {
            age.style.border="none";
            age.boxShadow="none";
            age.placeholder="Your Age";
        }
}
else
{
    return true;

}
}
</script>


 


