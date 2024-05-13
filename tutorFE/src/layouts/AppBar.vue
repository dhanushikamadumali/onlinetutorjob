<template>
  <div>
    <SiteHeader />
    <br />

    <v-main style="background-color: #EDEDED;">
      <router-view />
    </v-main>
    <br />

    <SiteFooter />
  </div>
</template>

<script>
import SiteHeader from "@/components/HeaderComponent.vue";
import SiteFooter from "@/components/FooterComponent.vue";
export default {
  components: {
    SiteHeader,
    SiteFooter,
  },
};
</script>
