<template>
  <div class="col d-flex justify-content-between p-0 align-items-center">
    <div class="col-7 p-0">
      <div class="user-info d-flex" :class="{ sm: !user }">
        <div class="circle"></div>
        <div class="user-name ml-3">
          <h6 class="m-0">Pluto</h6>
          <div>matteo</div>
        </div>
      </div>
    </div>
    <div class="col-3 p-0 d-flex justify-content-end">
      <div v-if="userMain">puntini</div>
      <div v-else>
        <a href="" v-if="user">logout</a>
        <a href="" v-else>segui</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProfileIndexInfo",
  props: ["user", "userMain"],
};
</script>

<style lang="scss" scoped>
.user-info {
  .circle {
    background-color: red;
    height: 40px;
    width: 40px;
    border-radius: 50%;
  }
  .user-name {
    margin: auto 0;
    font-size: 14px;
    h6 {
      font-size: 14px;
    }
  }
}
.user-info.sm {
  .circle {
    background-color: green;
    height: 30px;
    width: 30px;
    border-radius: 50%;
  }
  .user-name {
    margin: auto 0;
    font-size: 12px;
    h6 {
      font-size: 12px;
    }
  }
}
a {
  font-size: 12px;
}
</style>