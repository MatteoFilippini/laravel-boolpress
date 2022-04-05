<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">
      <div
        class="
          collapse
          navbar-collapse
          d-flex
          justify-content-between
          align-items-center
        "
        id="navbarSupportedContent"
      >
        <router-link class="navbar-brand" to="/">Logo</router-link>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link class="nav-link" to="/"
              >Home <span class="sr-only">(current)</span></router-link
            >
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="{ name: 'contacts' }"
              >Contacts</router-link
            >
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: "Header",
};
</script>

<style>
</style>