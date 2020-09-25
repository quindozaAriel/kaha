<template>
  <div class="container-fluid">
    <div style="height:100vh">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <center>
            <div class="login-box">
              <div class="login-cover hidden-login">
                <label class="app-title"></label>
              </div>
              <div class="login-body hidden"></div>
            </div>
          </center>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss">
.login-box {
  max-width: 100%;
  height: auto;
  transition: 0.5s;
  border-top-left-radius: 50px;
  border-top-right-radius: 50px;
  border-bottom-left-radius: 50px;
  border-bottom-right-radius: 50px;
  box-shadow: 10px 10px 8px #d5d5d5;

  .login-cover {
    width: 100%;
    height: 200px;
    background: linear-gradient(140deg, #28acd8, #afe6ef);
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
  }

  .login-body {
    width: 100%;
    height: 400px;
    background: linear-gradient(140deg, #e4f2f5, #ffffff);
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
  }

  .hidden {
    height: 0px;
  }

  .hidden-login {
    border-radius: 50px;
  }

  .app-title {
    font-size: 40px;
    font-weight:bold;
    color: white;
  }
}

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
  .login-box {
    width: 400px;
  }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
  .login-box {
    width: 400px;
  }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  .login-box {
    width: 450px;
  }
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  .login-box {
    width: 500px;
  }
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .login-box {
    width: 500px;
  }
}
</style>
