<template>
  <div>
    <div class="main_label">
      <div class="pt-3"></div>
      <center><span class="main_heading"> Request a tutor</span></center>
    </div>

    <div class="pt-11"></div>

    <div>
      <!--starting  jobs request form -->
      <v-container>
        <v-form @submit.prevent>
          <label class="form_header">Request Heading</label>
          <div class="pt-8"></div>
          <v-text-field
            v-model="form.heading"
            :rules="[required]"
            variant="solo"
            placeholder="Online individual  tutor for  A/l maths...."
          ></v-text-field>

          <label class="form_header">Request Description</label>
          <div class="pt-8"></div>
          <v-textarea
            v-model="form.description"
            :rules="[required]"
            variant="solo"
            placeholder="I am looking for someone to teach me PLC ladder diagram"
          ></v-textarea>

          <label class="form_header">Request Subjects/Languages </label>
          <div class="pt-8"></div>
          <v-autocomplete
            label="Select Subjects"
            :items="categories"
            item-title="name"
            item-value="name"
            variant="solo"
            multiple=""
            v-model="form.subjects"
          ></v-autocomplete>

          <button @click="openCouponModal()">
            <span style="color: #1397cf; font-size: 20px">
              <a>If not in options above, add a new subject.</a></span
            >
          </button>
          <br /><br />
          <label class="form_header">Request meeting type</label>
          <div class="pt-8"></div>
          <v-autocomplete
            label="Select Meeting Type"
            :items="['Online', 'At My Place', 'Travel To Tutor']"
            variant="solo"
            v-model="form.meetingtype"
          ></v-autocomplete>

          <label class="form_header">Your Payment Rate(RS)</label>
          <div class="pt-8"></div>
          <v-row>
            <v-col>
              <v-text-field
                v-model="form.paymentrate"
                :rules="[required]"
                variant="solo"
                placeholder="100"
              ></v-text-field>
            </v-col>
            <v-col>
              <v-autocomplete
                label="Select Payment Type"
                :items="['Per Hour', 'Per Day', 'Per Week', 'Per Month']"
                variant="solo"
                v-model="form.paymenttype"
              ></v-autocomplete>
            </v-col>
          </v-row>
          <br /><br />
          <v-btn
            type="submit"
            block
            height="80px"
            style="text-transform: capitalize"
            color="#20349E"
            @click="addRequest()"
            ><span class="button_styles">Submit Request</span></v-btn
          >
        </v-form>
      </v-container>

      <!--end of jobs request form -->
    </div>
  </div>

  <!-- category  modal -->
  <v-dialog v-model="dialogCategory" width="500">
    <v-card>
      <v-card-title class="headline black" primary-title>
        Enter New Category
      </v-card-title>
      <v-card-text class="pa-5">
        <v-form>
          <v-text-field
            v-model="form2.name"
            label="Category"
            :rules="[required]"
          ></v-text-field>
        </v-form>
      </v-card-text>
      <v-card-actions class="pa-5">
        <v-btn class="ml-auto" @click="addCategory()" outlined color="primary"
          >Save</v-btn
        >
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>

<script>
import CategoryApi from "@/Api/Modules/categories";
import JobApi from "@/Api/Modules/studentJob";
export default {
  data() {
    return {
      form: {},
      categories: [],
      form2: {},
      dialogCategory: false,
    };
  },
  async created() {
    await this.getCategories();
  },
  methods: {
    async getCategories() {
      const res = await CategoryApi.allCategory();
      this.categories = res.data.data;
      console.log(  res.data.data )
    },
    openCouponModal() {
      this.dialogCategory = true;
    },
    required(v) {
      return !!v || "Field is required";
    },
    async addRequest() {
      console.log(this.form.subjects);
      await JobApi.addJob(this.form);
    },

    async addCategory() {
      console.log(this.form2);
      await CategoryApi.addCategory(this.form2);
    },
  },
};
</script>
