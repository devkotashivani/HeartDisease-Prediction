//carousel loading and options
$(function(){
    $('.carousel').carousel({
        interval: 3000,
        pause: false,
        keyboard: false
    });
});

//image preview
function readURL(input, temp) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(temp)
                .attr('src', e.target.result)
                .width(200)
                .height(290);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

//form validation
function contactFormValidate(){
    var name=document.getElementById("cn_your_name");
    var email=document.getElementById("cn_email");
    var subject=document.getElementById("cn_subject");
    var msg=document.getElementById("cn_msg");

    if(name.value=="")
    {
        name.style.border="solid 1px red";
        name.boxShadow="0 0 5px 1px red";
        name.placeholder="Name is required";
        name.focus();
        return false;
    }	else	{
        name.style.border="none";
        name.boxShadow="none";
        name.placeholder="Your Name";
    }

    if(email.value=="")
    {
        email.style.border="solid 1px red";
        email.boxShadow="0 0 5px 1px red";
        email.placeholder="Email is required";
        email.focus();
        return false;
    }	else	{
        email.style.border="none";
        email.boxShadow="none";
        email.placeholder="Email";
    }

    if(subject.value=="")
    {
        subject.style.border="solid 1px red";
        subject.boxShadow="0 0 5px 1px red";
        subject.placeholder="Subject is required"
        subject.focus();
        return false;
    }   else
    {
        subject.style.border="none";
        subject.boxShadow="none";
        subject.placeholder="Subject";
    }

    if(msg.value=="")
    {
        msg.style.border="solid 1px red";
        msg.boxShadow="0 0 5px 1px red";
        msg.placeholder="Message is required"
        msg.focus();
        return false;
    }   else
    {
        msg.style.border="none";
        msg.boxShadow="none";
        msg.placeholder="Message";
    }

    return true;
}