<template>
  <div>
    <div class="main_label">
      <div class="pt-3"></div>
      <center><span class="main_heading">All Teachers</span></center>
    </div>
  </div>
  <div class="pt-5"></div>
  <v-container fluid="">
    <v-row>
      <v-col lg="10">
        <v-text-field
          v-model="form.name"
          :rules="[required]"
          variant="solo"
          placeholder="Online individual  tutor for  A/l maths...."
        ></v-text-field>
      </v-col>
      <v-col lg="2">
        <v-btn
          type="submit"
          height="57px"
          block=""
          style="text-transform: capitalize"
          color="#20349E"
          @click="addReview()"
          ><span class="button_styles_search">Search</span></v-btn
        >
      </v-col>
    </v-row>

    <v-sheet border="1" elevation="5">
      <div v-for="user in users" :key="user.id">
        <div class="pa-6">
          <h3 class="tutor_job_header">{{ user.name }}</h3>
        </div>

        <div class="pl-6 pr-6">
          <v-row>
            <v-col lg="2" cols="6">
              <v-card rounded="0" border="" class="card_border">
                <v-card-text class="text-center"
                  ><span class="box-text-sizes"></span
                ></v-card-text>
              </v-card>
            </v-col>
            <v-col lg="2" cols="6">
              <v-card rounded="0" border="" class="card_border" style="ca">
                <v-card-text class="text-center"
                  ><span class="box-text-sizes"></span
                ></v-card-text>
              </v-card>
            </v-col>
          </v-row>
          <br />
          <p class="para_styles">
            I am looking for someone to teach me PLC ladder diagram —- I’m using
            logo and Cade software. I’m currently learning how to use logo
            software to design ladder diagram to control tank level and piston
            and how to do latching. I want someone who can explain for me the
            above mentioned examples only practical not theory ….. I want a
            tutor who can speak...
          </p>

          <br />

          <span class="under_text"> $20 per Hour</span>
          &nbsp; &nbsp;
          <span class="under_text"> Colombo , Srilanka</span>
          <br /><br />
          <v-btn @click="$router.push(`/single_teachers/${user.id}`)"
            >View More
          </v-btn>
          <hr />
        </div>
      </div>
      <br />
    </v-sheet>
  </v-container>
</template>
<script>
import authApi from "@/Api/Modules/auth.js";
export default {
  data() {
    return {
      form: {},
      users: [],
    };
  },
  async created() {
    await this.getAllTeacher();
  },

  methods: {
    async getAllTeacher() {
      await authApi
        .allteacher()
        .then((res) => {
          this.users = res.data.data;
          console.log(res.data);
        })
        .catch(() => {});
    },
  },
};
</script>
