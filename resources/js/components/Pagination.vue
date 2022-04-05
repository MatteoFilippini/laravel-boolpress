<template>
  <div>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a
            class="page-link"
            href="#"
            v-if="current_page > 1"
            @click="$emit('change', changePage(1))"
          >
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li
          class="page-item"
          v-for="page in page_tot"
          :key="page"
          :class="{ active: page == current_page }"
          @click="$emit('change', page)"
        >
          <a class="page-link" href="#">{{ page }}</a>
        </li>
        <li class="page-item">
          <a
            class="page-link"
            href="#"
            v-if="current_page < page_tot"
            @click="$emit('change', changePage())"
          >
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
export default {
  name: "Pagination",
  props: ["current_page", "page_tot"],
  data() {
    return {
      cp: 0,
    };
  },
  methods: {
    changePage(next = 0) {
      if (next) {
        this.cp = this.current_page - 1;
      } else {
        this.cp = this.current_page + 1;
      }
      return this.cp;
    },
  },
};
</script>

<style>
</style>