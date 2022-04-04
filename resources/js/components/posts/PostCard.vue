<template>
  <div>
    <div class="card mb-3">
      <div class="card-author">{{ post.id }} - nome autore</div>
      <img class="card-img-top" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">{{ post.title }}</h5>
        <p class="card-text">
          {{ post.content }}
        </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
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