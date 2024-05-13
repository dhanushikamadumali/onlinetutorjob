<template lang="">
  <v-img class="section_one_img" cover src="@/assets/Rectangle 3.png">
    <div class="pt-7"></div>
    <v-container>
      <div class="section_one_title">
        <p class="urbanist">
          Hire the best <br />
          teachers for any <br />
          requirnment for free
        </p>
      </div>
      <br />
      <v-row no-gutters>
        <v-col cols="12" lg="2" md="3" sm="12">
          <v-btn rounded="1" color="#20349E" class="urbanist section_one_btn" @click="$router.push('/all_teachers')" 
            ><span style="font-size: 15px">Find All Tutors</span></v-btn
          >
        </v-col>
        <div class="mobile_header"><br /><br /></div>
        <v-col cols="12" lg="2" md="3" sm="12">
          <v-btn rounded="1" color="#20349E"  @click="$router.push('/tutor_jobs')" class="urbanist section_one_btn"
            ><span style="font-size: 15px">Find Tutor Jobs</span></v-btn
          >
        </v-col>
      </v-row>
    </v-container>
  </v-img>
</template>

<script>
export default {};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap");

.urbanist {
  font-family: "Urbanist";
}
.section_one_btn_mobile {
  background-color: #20349e;
  color: white;
  font-family: Urbainst;
  text-transform: capitalize;

}
</style>
