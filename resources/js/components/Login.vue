<template>
  <div class="div-wrapper">
    <div class="login-box">
      <label class="system-title">Kaha</label>
      <button class="menu-btn" v-on:click="isHidden = false">GET STARTED</button>
      <button class="menu-btn">DOCUMENTATION</button>
    </div>
    <div class="login-bg" v-if="!isHidden">
      
    </div>
  </div>
</template>

<script>
export default {
  data: () => {
    return{
      isHidden:true
    }
  },
  method:() => {

  }
};
</script>

<style lang="scss">
.div-wrapper {
  height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
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
  font-family: Minimalistic;

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
  }

  .menu-btn:nth-child(2) {
    font-size: 29px;
    background: #de9e48;
    padding-left: 25px;
    padding-right: 25px;
    padding-top: 14px;
    padding-bottom: 14px;
    outline: none;
    box-shadow: 3px 3px 6px #5a4c37;
    font-weight: bold;
  }

  .menu-btn:nth-child(3) {
    margin-top: 10px;
    font-size: 17px;
  }
}

.login-bg {
  position: fixed;
  height: 100vh;
  width: 100%;
  background: linear-gradient(140deg, #cca585, #693f23);
  animation:expand 3s;
}

@keyframes expand{
  from{clip-path: circle(100px)}
  to{clip-path: circle(2000px)}
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
