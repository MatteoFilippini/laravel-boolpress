<template>
  <div>
    <div class="card mb-3">
      <div class="card-header">
        <ProfileIndexInfo :userMain="true" />
      </div>
      <img
        class="card-img-top"
        alt="Card image cap"
        :src="post.image"
        style="height: 600px"
      />
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
        <router-link
          :to="{ name: 'post-detail', params: { slug: post.slug } }"
          class="btn btn-primary btn-sm"
          v-if="!isShow"
          >Dettaglio</router-link
        >
        <router-link
          :to="{ name: 'home' }"
          class="btn btn-secondary btn-sm"
          v-if="isShow"
          >Indietro</router-link
        >
      </div>
    </div>
  </div>
</template>

<script>
import ProfileIndexInfo from "../profile/ProfileIndexInfo.vue";
export default {
  name: "PostCard",
  props: ["post", "is-show"],
  components: { ProfileIndexInfo },
};
</script>

<style>
</style>