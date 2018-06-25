<div class="login-box">
  <div class="login-logo">
    <b>Login Volt</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    {{ form("login/login","method": "post") }}
      {{ hidden_field(security.getTokenKey(), "value": security.getToken()) }}
      <div class="form-group has-feedback">
        {{ text_field('email', 'class':'form-control', 'placeholder': 'Email','name':'login[email]','value':login.email,'required':'required') }}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {{ password_field('password', 'class':'form-control', 'placeholder': 'Password','name':'login[password]','value':'','required':'required') }}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      {{ endForm() }}

    <a href="#">I forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
