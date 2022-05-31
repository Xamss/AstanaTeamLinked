function formValidation()
{
    let password1 = document.registration.password;
    let password2 = document.registration.user_pass_check;
    let username = document.registration.first_name;
    let email = document.registration.email;
    if (username.value == "")
    {

        window.alert("Please enter your name.");
        return false;
    }
    if(UsernameValidation(username))
    {
        if(EmailValidation(email))
        {
            if(PasswordValidation(password1))
            {
                if (MatchPassword(password1, password2))
                {
                    return true;
                }
            }
        }
    }
    return false;
}

function EmailValidation(email)
{
    var mailform = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.value.match(mailform))
    {
        return true;
    }
    else
    {
        window.alert("You have entered an invalid email address!");
        return false;
    }
}




function PasswordValidation(password1)
{
    let password_len = password1.value.length;
    if (password_len == 0 )
    {
        window.alert("Password should not be empty");
        return false;
    }
    return true;
}


function UsernameValidation(username)
{
    let letters = /^[A-Za-z]+$/;
    if(username.value.match(letters))
    {
        return true;
    }
    else
    {
        window.alert('Username must have alphabet characters only');
        return false;
    }
}


function MatchPassword(password1, password2)
{
    if (password1.value !== password2.value)
    {
        window.alert('Password does not match');
        return false;
    }
    else
    {
        return true;
    }
}


function formValidation2()
{
    let password1 = document.authorization.password;
    let email = document.authorization.email;
    if (email.value == "")
    {
        window.alert("Please enter your email.");
        return false;
    }
    if(EmailValidation(email))
    {
        if(PasswordValidation(password1))
        {
            return true;
        }
    }
    return false;
}















