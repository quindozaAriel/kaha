<template>
  <div class="login-div">
    <div class="login-logo">
      <label class="flip">K</label>
      <label>K</label>
    </div>
    <input type="text" id="username" class="login-input" autocomplete="off" />
    <label for="username">USERNAME</label>

    <div class="separator"></div>

    <input type="password" id="password" class="login-input" />
    <label for="password">PASSWORD</label>

    <button class="btn-login" type="button">LOGIN</button>
  </div>
</template>
<script>
export default {};
</script>
<style lang="scss" scoped>
.login-div {
  width: 400px;
  height: auto;
  padding: 50px;
  text-align: center;
  .login-input {
    display: block;
    width: 100%;
    height: 50px;
    text-align: center;
    background: transparent;
    color: white;
    border: 0px;
    border-bottom: 1px solid rgb(235, 224, 206);
    outline: none;
    font-size: 25px;
    letter-spacing: 2px;
  }
  label {
    display: block;
    font-size: 20px;
    color: white;
    margin-top: 10px;
    letter-spacing: 5px;
  }
}

.btn-login {
  width: 100%;
  height: 50px;
  margin-top: 30px;
  border: 0;
  font-size: 20px;
  letter-spacing: 5px;
  font-weight: bold;
  background: #b1815f;

  color: rgb(241, 219, 219);
  border-radius: 10px;
  outline: none !important;
  border: none !important;
}

.btn-login:hover {
  background: #805c42;
}

.btn-login:active {
  outline: none;
  border: none;
  font-size: 18px;
}

.login-logo {
  .flip {
    -moz-transform: scale(-1, 1);
    -webkit-transform: scale(-1, 1);
    -o-transform: scale(-1, 1);
    -ms-transform: scale(-1, 1);
    transform: scale(-1, 1) !important;
  }
  label {
    display: inline-block;
    font-size: 100px;
  }
}

.separator {
  width: 100%;
  height: 20px;
}
</style>