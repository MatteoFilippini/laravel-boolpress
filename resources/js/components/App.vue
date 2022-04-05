<template>
  <div>
    <header>
      <Header />
    </header>
    <main class="p-3">
      <router-view></router-view>
    </main>
    <footer></footer>
  </div>
</template>

<script>
import Header from "./Header";
export default {
  name: "App",
  components: {
    Header: Header,
  },
};
</script>
