<x-postlayout>
    <div class="main">
        <div class="privet" >
            <h1>Login or Create an Account!</h1>
        </div>
        <p>Lorem iopsum dolor sit amit,consetetur sadipscing eliter,sed diam voluptua.At vero  eso et accusam et justo duo dolores et ea rebum. </p>

        <ul class="left-form">
            <form  method="post" action="user/welcome" onsubmit="return formValidation()" name="registration">
                <h2>New Account:</h2>
                @csrf
                <li>
                    <input name = "first_name" type="text"   placeholder="Username" required/>
                    <div class="clear"> </div>
                </li>
                <li>
                    <input name = "email" type="text" placeholder="Email" required/>
                    <div class="clear"> </div>
                </li>
                <li>
                    <input name = "password" type="password"   placeholder="Password" required/>
                    <div class="clear"> </div>
                </li>
                <li>
                    <input name = "user_pass_check" type="password"   placeholder="Repeat password" required/>
                    <div class="clear"> </div>
                </li>
                <input type="submit" onclick="myFunction()" value="Create Account">
                <div class="clear"> </div>
            </form>
        </ul>

        <ul class="right-form">
            <form  method="get" action="user/welcome" onsubmit = "return formValidation2()" name="authorization">
                <h3>Login:</h3>
                @csrf
                <div>
                    <li><input name = "email" type="text"  placeholder="Username" required/></li>
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

