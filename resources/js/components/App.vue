<template>
  <div>
    <header>
      <Header />
    </header>
    <main>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <PostList />
          </div>
        </div>
      </div>
    </main>
    <footer></footer>
  </div>
</template>

<script>
import Header from "./Header";
import PostList from "./posts/PostList";
export default {
  name: "App",
  components: {
    Header: Header,
    PostList: PostList,
  },
};
</script>
