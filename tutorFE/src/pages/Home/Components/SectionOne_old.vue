<template lang="">
  <div class="web_only_view">
    <div class="main_container">
      <v-img
        :width="full"
        :height="400"
        cover
        src="@/assets/Rectangle 3.png"
      ></v-img>
      <div class="main_title">
        Hire the best <br />
        teachers for any <br />
        requirnment for free
      </div>
      <div class="title_btn_container">
        <v-btn class="section_one_btn">Find All Tutors</v-btn>
        <v-btn class="section_one_btn">Find Tutor Jobs</v-btn>
      </div>
    </div>
  </div>

  <div class="mobile_only_view">
    <v-img
      :width="full"
      :height="400"
      cover
      src="@/assets/Rectangle 3.png"
    ></v-img>
    <div class="main_title">
      Hire the best <br />
      teachers for any <br />
      requirnment for free
    </div>
    <div class="title_btn_container">
      <v-btn class="section_one_btn">Find All Tutors</v-btn>
      <v-btn class="section_one_btn">Find Tutor Jobs</v-btn>
    </div>
  </div>
</template>

<script>
export default {};
</script>
<style scoped>
.section_one_btn {
  background-color: #20349e;
  color: white;
  font-family: Urbainst;
  margin-right: 30px;
  text-transform: capitalize;
  font-weight: 300;
  padding-left: 30px;
  padding-right: 30px;
}
</style>
