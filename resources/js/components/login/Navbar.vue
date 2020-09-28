<template>
  <div class="navbr">
    <div class="left-menu">< GO BACK</div>
    <div class="right-menu">
      NEED ACCOUNT? <a href="#">REGISTER</a>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style lang="scss" scoped>
.navbr {
  width: 100%;
  height: 80px;
  position: absolute;
  top: 0;
  color: white;
  font-size: 25px;
  letter-spacing: 2px;

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
  a{
    border:1px solid white;
    color:white;
    text-decoration: none;
  }
}
</style>