<template>
  <div>
    <!-- <Pagination
      :current_page="current_page"
      :page_tot="page_tot"
      @change="change"
    /> -->
    <Loader v-if="isLoading" />
    <div class="card-list d-flex flex-wrap">
      <PostCard
        v-for="post in posts"
        :key="post.id"
        :post="post"
        class="col-12 p-0"
      />
    </div>
  </div>
</template>

<script>
import PostCard from "./PostCard";
import Pagination from "../Pagination";
import Loader from "../Loader";
export default {
  name: "PostList",
  components: {
    PostCard,
    Pagination,
    Loader,
  },
  data() {
    return {
      posts: [],
      current_page: 1,
      page_tot: 0,
      isLoading: false,
    };
  },
  methods: {
    change(n) {
      this.getPosts(n);
    },
    getPosts(n) {
      this.isLoading = true;
      axios
        .get("http://localhost:8000/api/posts?page=" + n)
        .then((res) => {
          this.posts = res.data.data;
          this.current_page = res.data.current_page;
          this.page_tot = res.data.last_page;
        })
        .catch((err) => {
          console.error(err);
        })
        .then(() => {
          this.isLoading = false;
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