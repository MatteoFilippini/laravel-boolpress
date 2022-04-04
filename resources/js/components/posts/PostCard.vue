<template>
  <div>
    <div class="card mb-3">
      <div class="card-author">{{ post.id }} - nome autore</div>
      <img class="card-img-top" alt="Card image cap" :src="post.image" />
      <div class="card-body">
        <h5 class="card-title">{{ post.title }}</h5>
        <p class="card-text">
          {{ post.content }}
        </p>
        <div>
          <h5 class="m-0">Category:</h5>
          <span class="badge badge-pill badge-primary mb-3">{{
            post.category.label
          }}</span>
        </div>
        <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PostCard",
  props: ["post"],
};
</script>

<style>
</style>