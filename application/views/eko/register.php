
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Animated Form Switching with jQuery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/'); ?>css/style.css" />
        <script type="text/javascript">
//            Cufon.replace('h1', {textShadow: '1px 1px #fff'});
//            Cufon.replace('h2', {textShadow: '1px 1px #fff'});
//            Cufon.replace('h3', {textShadow: '1px 1px #000'});
//            Cufon.replace('.back');
        </script>
    </head>
    <body>
        <div class="wrapper">
            <h1>Halaman Register</h1>
            <div class="content">

                <div id="form_wrapper" class="form_wrapper">
                    <?php
                    $attribute = array("method" => "post", "class" => "login active", "id" => "form-register");
                    echo form_open('user/register', $attribute);
                    ?>
                    <h3>Register </h3>
                    <?php
                    if ($this->session->flashdata('gagal_register')) {
                        ?>
                        <h4 style="text-align: center; color: red;">
                            <strong><?php echo $this->session->flashdata('gagal_register') ?></strong> 
                        </h4>
                        <?php
                    }
                    ?>
                    <?php
                    if ($this->session->flashdata('duplikat')) {
                        ?>
                        <h4 style="text-align: center; color: red;">Username Sudah Ada, Silahkan gunakan login</h4>
                        <?php
                    }
                    ?>
                    <div>
                        <label>Username:</label>
                        <input type="text" value="eko" name="username"/>
                        <span class="error">This is an error</span>
                    </div>
                    <div>
                        <label>Password: 
                            <!--<a href="forgot_password.html" rel="forgot_password" class="forgot linkform">Forgot your password?</a>-->
                        </label>
                        <input type="password" value="eko" name="password"/>
                        <span class="error">This is an error</span>
                    </div>
                    <div class="bottom">
                        <input type="submit" value="Register"></input>
                        <a href="<?php echo base_url(); ?>" rel="register" class="linkform">Login</a>
                        <div class="clear"></div>
                    </div>
                    <!--</form>-->
                    <?php echo form_close(); ?>
                </div>
                <div class="clear"></div>
            </div>
            <!--<a class="back" href="http://tympanus.net/codrops/2011/01/06/animated-form-switching/">back to the Codrops tutorial</a>-->
        </div>
    </body>
</html>