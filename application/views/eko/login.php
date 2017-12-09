
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Halaman Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/'); ?>css/style.css" />
    </head>
    <body>
        <div class="wrapper">
            <h1>Halaman Login</h1>
            <div class="content">
                <div id="form_wrapper" class="form_wrapper">
                    <?php
                    $attribute = array("method" => "post", "id" => "form-login", "class" => "login active");
                    echo form_open("user/login", $attribute);
                    ?>
                    <h3>Halaman Login</h3>
                    <div>
                        <label>Username:</label>
                        <input type="text" value="eko" name="username"/>
                    </div>
                    <div>
                        <label>Password: 
                        </label>
                        <input type="password" value="eko" name="password"/>
                    </div>
                    <div class="bottom">
                        <input type="submit" value="Login"></input>
                        <a href="<?php echo base_url("register"); ?>" rel="register" class="linkform">Register</a>
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