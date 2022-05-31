<x-postlayout>
    <div class="main">
        <div class="privet" >
            <h1>Login or Create a Free Account!</h1>
        </div>
        <p>Lorem iopsum dolor sit amit,consetetur sadipscing eliter,sed diam voluptua.At vero  eso et accusam et justo duo dolores et ea rebum. </p>

        <ul class="left-form">
            <form  method="post" action="" onsubmit = "return formValidation()" name="registration">
                <h2>New Account:</h2>
                <li>
                    <input name = "user_name" type="text"   placeholder="Username" required/>
                    <a href="#" class="icon ticker"> </a>
                    <div class="clear"> </div>
                </li>
                <li>
                    <input name = "user_email" type="text" placeholder="Email" required/>
                    <a href="#" class="icon ticker"> </a>
                    <div class="clear"> </div>
                </li>
                <li>
                    <input name = "user_pass" type="password"   placeholder="password" required/>
                    <a href="#" class="icon into"> </a>
                    <div class="clear"> </div>
                </li>
                <li>
                    <input name = "user_pass_check" type="password"   placeholder="password" required/>
                    <a href="#" class="icon into"> </a>
                    <div class="clear"> </div>
                </li>
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Please inform me of upcoming  w3layouts, Promotions and news</label>
                <input type="submit" onclick="myFunction()" value="Create Account">
                <div class="clear"> </div>
            </form>
        </ul>

        <ul class="right-form">
            <form  method="post" action="" onsubmit = "return formValidation2()" name="authorization">
                <h3>Login:</h3>
                <div>
                    <li><input name = "username" type="text"  placeholder="Username" required/></li>
                    <li> <input name = "password" type="password"  placeholder="Password" required/></li>
                    <h4>I forgot my Password!</h4>
                    <input type="submit" onclick="myFunction()" value="Login" >
                </div>
                <div class="clear"> </div>
            </form>
        </ul>
        <div class="clear"> </div>

    </div>
</x-postlayout>

