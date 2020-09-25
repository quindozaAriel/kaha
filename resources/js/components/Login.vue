<template>
  <div class="div-wrapper">
    <div class="login-box">
      <label class="system-title">Kaha</label>
      <button class="menu-btn" v-on:click="isHidden = false">
        GET STARTED
      </button>
      <button class="menu-btn">DOCUMENTATION</button>
    </div>
    <div class="login-bg" v-if="!isHidden">
      <div class="navbr"></div>
      <div class="login-div">
        <div class="login-logo">
          <label class="flip">K</label>
          <label>K</label>
        </div>
        <input
          type="text"
          id="username"
          class="login-input"
          autocomplete="off"
        />
        <label for="username">USERNAME</label>

        <div class="separator"></div>

        <input type="password" id="password" class="login-input" />
        <label for="password">PASSWORD</label>

        <button class="btn-login" type="button">LOGIN</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: () => {
    return {
      isHidden: false,
    };
  },
  method: () => {},
};
</script>

<style lang="scss">
.div-wrapper {
  height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: Minimalistic;
}

.login-box {
  max-width: 100%;
  transition: 0.5s;
  background: linear-gradient(140deg, #cca585, #693f23);
  box-shadow: 10px 10px 8px #d5d5d5;
  border-radius: 100%;
  text-align: center;
  justify-content: center;
  align-items: center;
  display: flex;
  flex-direction: column;

  .system-title {
    font-size: 100px;
    color: white;
  }

  .menu-btn {
    border: 0px;
    border-radius: 25px;
    background: transparent;
    color: white;
    letter-spacing: 5px;
    transition: 0.5s;
    outline: 0;
  }

  .menu-btn:nth-child(2) {
    font-size: 29px;
    background: #de9e48;
    padding-left: 25px;
    padding-right: 25px;
    padding-top: 14px;
    padding-bottom: 14px;
    box-shadow: 3px 3px 6px #5a4c37;
    font-weight: bold;
  }

  .menu-btn:nth-child(3) {
    margin-top: 10px;
    font-size: 17px;
  }

  .menu-btn:nth-child(2):hover {
    background: #f7b865;
  }

  .menu-btn:nth-child(3):hover {
    background: rgb(143, 142, 142);
    padding: 10px;
    padding-left: 20px;
    padding-right: 20px;
  }

  .menu-btn:active {
    font-size: 10px;
  }
}

.separator {
  width: 100%;
  height: 20px;
}
.login-bg {
  position: fixed;
  height: 100vh;
  width: 100%;
  background: linear-gradient(140deg, #cca585, #693f23);
  animation: expand 3s;
  justify-content: center;
  align-items: center;
  display: flex;
  flex-direction: column;
}

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

.navbr {
  width: 100%;
  height: 60px;
  border: 1px solid red;
  position: absolute;
  top: 0;
}

@keyframes expand {
  from {
    clip-path: circle(100px);
  }
  to {
    clip-path: circle(2000px);
  }
}

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
  .login-box {
    width: 400px;
    height: 400px;
    font-size: 50px;
  }

  .login-box {
    .system-title {
      font-size: 80px;
    }
    .menu-btn:nth-child(2) {
      font-size: 25px;
    }

    .menu-btn:nth-child(3) {
      font-size: 15px;
    }
  }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
  .login-box {
    width: 450px;
    height: 450px;
  }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  .login-box {
    width: 450px;
    height: 450px;
  }
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  .login-box {
    width: 500px;
    height: 500px;
  }
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .login-box {
    width: 500px;
    height: 500px;
  }
}
</style>
