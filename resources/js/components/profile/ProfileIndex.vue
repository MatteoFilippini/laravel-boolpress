<template>
  <div>
    <div class="container">
      <div class="row mt-3">
        <div class="col d-flex justify-content-between p-0">
          <ProfileIndexInfo :user="true" />
        </div>
      </div>
      <div class="row">
        <div
          class="
            col
            info
            d-flex
            justify-content-between
            align-items-center
            mt-3
            p-0
          "
        >
          <h6 class="text-muted m-0">Suggeriti per te</h6>
          <div>Mostra tutti</div>
        </div>
      </div>
      <div class="row flex-column">
        <ProfileIndexInfo />
        <ProfileIndexInfo />
      </div>
      <div class="row">
        <div class="col mt-3 p-0">
          <div class="text-muted">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum
            totam vitae deleniti ab nemo dicta enim tempore fugit quod, a neque
            iusto debitis! Dolor, consectetur at. Pariatur incidunt quas
            excepturi.
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ProfileIndexInfo from "./ProfileIndexInfo";
export default {
  name: "ProfileIndex",
  components: { ProfileIndexInfo },
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