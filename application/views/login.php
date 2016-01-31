<?php echo $HEADER; ?>
<script src="<?php echo base_url(); ?>js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/login.js"></script>
<script type="text/javascript">
                var baseurl = "<?php echo base_url(); ?>";
    </script>
<div id="login_header">
        
        <p><span><a class="login_name" href="<?php echo base_url(); ?>login">Login</a></span></p>
        <p class="account_style">If you don't have an account: <a href="<?php echo base_url(); ?>register" style="color: firebrick"><b>Open an Account</b></a></p>
        

        <div class="login_form">
            <fieldset class="login">
				<div id="login_error" class="error"></div>
              <!--  <legend></legend>      -->              
                    <table>
                        <tr>
                            <td align="left">* User Name :</td> 
                            <td align="right"><input type="text" id="username" placeholder="Username" name="username"/></td>
                        </tr>
                        <tr>
                            <td align="left">* Password :</td>
                            <td align="right"><input type="password" id="password" class="cre_acc" placeholder="Password" name="password"/></td>
                        </tr>
                        <td align="right"><input type="checkbox" name="remember"/>Remember me</td>
                        <tr>
                            <td><button class="button_style" id="login_chk" type="submit" style="background-color: gainsboro; color: black; border-radius:20px;">Login</button></td>   
                        </tr>                     
                    </table>
            </fieldset>
        </div>
    </div>
            
</body>
</html>