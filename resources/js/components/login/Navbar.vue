<template>
  <div class="navbr">
    <div class="left-menu" v-on:click="isHidden = true">
      <font-awesome-icon icon="angle-left" /> GO BACK {{ isHidden }}
    </div>
    <div class="right-menu">NEED ACCOUNT? <a href="#">REGISTER</a></div>
  </div>
</template>
<script>
export default {
  props: ["isHidden"]
};
</script>
<style lang="scss" scoped>
.navbr {
  width: 100%;
  height: 80px;
  position: absolute;
  top: 0;
  color: white;
  font-size: 20px;
  letter-spacing: 2px;
  font-weight: bold;
  padding: 30px 20px 20px 20px;
}

.left-menu {
  height: 100%;
  width: auto;
  float: left;
}

.right-menu {
  height: 100%;
  width: auto;
  float: right;
  a {
    border: 2px solid white;
    color: white;
    text-decoration: none;
    padding: 10px 20px 10px 20px;
    border-radius: 25px;
  }
}
</style>