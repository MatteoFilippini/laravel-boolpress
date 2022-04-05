<template>
  <div class="container p-3">
    <div class="row d-flex justify-content-center">
      <PostList class="col-7" />
      <ProfileIndex class="col-3" />
    </div>
  </div>
</template>

<script>
import PostList from "../posts/PostList.vue";
import ProfileIndex from "../profile/ProfileIndex.vue";

export default {
  name: "HomePage",
  components: {
    PostList,
    ProfileIndex,
  },
};
</script>

<style>
</style>