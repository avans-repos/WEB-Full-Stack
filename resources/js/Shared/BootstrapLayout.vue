<template>
  <div class="d-flex flex-column vh-100">
    <nav-bar></nav-bar>
    <main class="flex-shrink-0 container mt-4 mb-4">
      <slot></slot>
    </main>
    <app-footer></app-footer>
  </div>
</template>

<script>
import NavBar from "@/Shared/NavBar.vue";
import AppFooter from "@/Shared/AppFooter.vue";

export default {
  components: {
    NavBar,
    AppFooter,
  },
};
</script>
