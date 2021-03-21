var name=false,u_email=false,psw=false;
function email_val(email){
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
    {
        document.getElementById('useremail').classList.remove("is-invalid");
        document.getElementById('useremail').classList.add("is-valid"); 
        u_email=true;
    }
    else{
        document.getElementById('useremail').classList.remove("is-valid");
        document.getElementById('useremail').classList.add("is-invalid");
        u_email=false;
    }
}
function full_name(full_name)
{
    if(/^[a-zA-Z ]+$/.test(full_name))
    {
        document.getElementById('username').classList.remove("is-invalid");
        document.getElementById('username').classList.add("is-valid");
        name=true;
    }
    else
    {
        document.getElementById('username').classList.remove("is-valid");
        document.getElementById('username').classList.add("is-invalid");
        name=false;
    }
}
function confirm_psw_val(c_psw)
{
    if(document.getElementById('userpassword').value==c_psw && c_psw.length>=6)
    {
        document.getElementById('userpassword').classList.remove('is-invalid');
        document.getElementById('userconfirmpassword').classList.remove('is-invalid');
        document.getElementById('userpassword').classList.add('is-valid');
        document.getElementById('userconfirmpassword').classList.add('is-valid');
        psw=true;
    }
    else
    {
        document.getElementById('userpassword').classList.remove('is-valid');
        document.getElementById('userconfirmpassword').classList.remove('is-valid');
        document.getElementById('userpassword').classList.add('is-invalid');
        document.getElementById('userconfirmpassword').classList.add('is-invalid');
        psw=false;
    }

}

function form_submit()
{
    if((name && u_email && psw)==false)
    {
        return false;
    }
}
