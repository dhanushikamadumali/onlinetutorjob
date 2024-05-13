<!-- eslint-disable vue/multi-word-component-names -->
// eslint-disable-next-line vue/multi-word-component-names //
eslint-disable-next-line vue/multi-word-component-names
<template>
  <div>
    <SectionOne />
    <SectionTwo />
    <SectionThree />
  </div>
</template>

<script>
import SectionOne from "./Components/SectionOne.vue";
import SectionTwo from "./Components/SectionTwo.vue";
import SectionThree from "./Components/SectionThree.vue";

export default {
  components: {
    SectionOne,
    SectionTwo,
    SectionThree,
  },
};
</script>
