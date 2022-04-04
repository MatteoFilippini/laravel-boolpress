<template>
  <div>
    <h1 class="mt-5">Posts</h1>
    <div class="card-list d-flex flex-wrap">
      <PostCard
        v-for="post in posts"
        :key="post.id"
        :post="post"
        class="col-12"
      />
    </div>
  </div>
</template>

<script>
import PostCard from "./PostCard";
export default {
  name: "PostList",
  components: {
    PostCard,
  },
  data() {
    return {
      posts: [],
    };
  },
  methods: {
    getPosts() {
      axios
        .get("http://localhost:8000/api/posts")
        .then((res) => {
          this.posts = res.data;
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
    this.getPosts();
  },
};
</script>

<style>
</style>