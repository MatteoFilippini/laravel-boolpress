<template>
  <div>
    <div class="container">
      <h1>Dettaglio post</h1>
      <PostCard class="col-12" :post="post" :isShow="true" />
    </div>
  </div>
</template>

<script>
import PostCard from "../posts/PostCard.vue";

export default {
  name: "DetailPage",
  components: {
    PostCard,
  },
  data() {
    return {
      post: null,
    };
  },
  methods: {
    getPost() {
      axios
        .get("http://localhost:8000/api/posts/" + this.$route.params.slug)
        .then((res) => {
          this.post = res.data;
        })
        .catch((err) => {
          console.error(err);
        })
        .then(() => {
          console.log("Api terminata");
        });
    },
  },
  mounted() {
    this.getPost();
  },
};
</script>

<style>
</style>