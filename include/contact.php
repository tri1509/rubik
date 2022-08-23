<form action="index.php" method="post" onsubmit="signup()">
    <div class="auth-form hide-on-tablet">
        <div class="auth-form-header">
            Đăng nhập
        </div>
        <form action="" method="post">
            <div class="auth-form__form">
                <div class="auth-form__group">
                    <input type="tel" class="auth-form__input" maxlength="11" placeholder=" ">
                    <lable for="sdt" class="auth-form__lable">Số điện thoại</lable>
                </div>
                <div class="auth-form__group">
                    <input type="text" class="auth-form__input" maxlength="50" placeholder=" " name="email_login" id="email_login" required="">
                    <lable for="ipnPassword" class="auth-form__lable">Email</lable>
                </div>
                <div class="auth-form__group">
                    <input class="auth-form__input" type="password" name="password_login" id="password_login3" maxlength="20" placeholder=" " required="">
                    <lable for="pass" class="auth-form__lable">Nhập mật khẩu</lable>
                    <span id="showPassword3"><i class="fas fa-eye eye"></i></span>
                </div>
            </div>
        
            <div class="auth-form__controls">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                        <a href="#" class="auth-form-link__controls" data-bs-toggle="modal" data-bs-target="#dangky">
                            Bạn chưa có tải khoản ?
                        </a>
                    </div>
                    
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                        <input type="submit" class="auth-form-btn__controls" name="dangnhap_home" value="Đăng nhập">
                    </div>
                </div>
            </div>
        </form>
    </div>
</form>

<button class="business-hours">
    <span class="business-hours-span-1"></span>
    <span class="business-hours-span-2"></span>
    <span class="business-hours-span-3"></span>
    <span class="business-hours-span-4"></span>
    <p style="color : #04b591">
        <i class="hours-icon fa-regular fa-clock"></i>
        Giờ mở cửa: 8h-20h</p>
    <p style="color : #3db46e">
        <i class="hours-icon fa-solid fa-phone"></i>
        Hotline: 0898.303.889</p>
    <p style="color : #b43d9a">
        <i class="hours-icon fa-solid fa-file-word"></i>
        Hướng dẫn mua hàng</p>
    <p style="color : #791e65">
        <i class="hours-icon fa-solid fa-headphones"></i>
        Tư vấn trực tuyến</p>
    <p style="color : #ccb013">
        <i class="hours-icon fa-solid fa-money-check-dollar"></i>
        Mua hàng online</p>
    <p style="color : #374092">
        <i class="hours-icon fa-solid fa-rocket"></i>
        Giao hàng toàn quốc</p>
    <p style="color : #ff0000">
        <i class="hours-icon fa-brands fa-get-pocket"></i>
        Đăng ký</p>

    <div class="loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
</button>

<script>
    $(document).ready(function(){
    $('#showPassword').on('click', function(){
        var passwordField = $('#password_login');
        var passwordFieldType = passwordField.attr('type');
        if(passwordFieldType == 'password') {
            passwordField.attr('type', 'text');
            $(this).val('Hide');
        }
        else {
        passwordField.attr('type', 'password');
            $(this).val('Show');
        }
    });
  });
</script>
<script>
    $(document).ready(function(){
    $('#showPassword3').on('click', function(){
        var passwordField = $('#password_login3');
        var passwordFieldType = passwordField.attr('type');
        if(passwordFieldType == 'password') {
            passwordField.attr('type', 'text');
            $(this).val('Hide');
        }
        else {
        passwordField.attr('type', 'password');
            $(this).val('Show');
        }
    });
  });
</script>
<script>
    $(document).ready(function(){
    $('#showPassword2').on('click', function(){
        var passwordField = $('#password2');
        var passwordFieldType = passwordField.attr('type');
        if(passwordFieldType == 'password') {
            passwordField.attr('type', 'text');
            $(this).val('Hide');
        }
        else {
        passwordField.attr('type', 'password');
            $(this).val('Show');
        }
    });
  });
</script>