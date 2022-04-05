<template>
  <div>
    <header>
      <Header />
    </header>
    <main>
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
