<template>
  <div>
    <div class="main_label">
      <div class="pt-3"></div>
      <center><span class="main_heading">All Tutor Jobs</span></center>
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
      <div v-for="item in items" :key="item.id">
        <div class="pa-6">
          <h3 class="tutor_job_header">
            {{ item.heading }}
          </h3>
        </div>

        <div class="pl-6 pr-6">
          <v-row>
            <v-col lg="2" cols="6">
              <v-card rounded="0" border="" class="card_border">
                <v-card-text class="text-center"
                  ><span class="box-text-sizes">Java Development</span></v-card-text
                >
              </v-card>
            </v-col>
            <v-col lg="2" cols="6">
              <v-card rounded="0" border="" class="card_border">
                <v-card-text class="text-center"
                  ><span class="box-text-sizes">
                    {{ item.meetingtype }}</span
                  ></v-card-text
                >
              </v-card>
            </v-col>
          </v-row>
          <br />
          <p class="para_styles">
            {{ item.description }}
          </p>

          <br />

          <span class="under_text"> $20 per Hour</span>
          &nbsp; &nbsp;
          <span class="under_text"> Colombo , Srilanka</span>
          <br /><br />

          <hr />
          <br />
          <v-btn @click="$router.push(`/studentjobs/${item.id}/proposal`)">Bid </v-btn>
        </div>
      </div>

      <br />
    </v-sheet>
  </v-container>
</template>
<script>
import studentJobApi from "@/Api/Modules/studentJob.js";
export default {
  data() {
    return {
      form: {},
      items: [],
    };
  },
  async created() {
    await this.getAllJobs();
  },

  methods: {
    async getAllJobs() {
      const res = await studentJobApi.alljob();

      this.items = res.data.data;
      console.log(this.items);
    },
  },
};
</script>
