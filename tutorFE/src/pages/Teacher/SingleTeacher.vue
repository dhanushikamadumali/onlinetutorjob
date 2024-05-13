<template>
  <div class="pt-5"></div>
  <v-container fluid="">
    <div class="web_teacher">
      <div>
        <v-row class="pa-8">
          <v-col cols="4 pt-10 pr-8">
            <v-img src="../../assets/images/Rectangle 57.png"></v-img>
          </v-col>
          <v-col cols="6 pl-10">
            <div>
              <p class="single_teacher_header">{{ user.name }}</p>
            </div>
            <div>
              <p class="single_teacher_one_para">
                Java Teaching , Software Engineering , Maths
              </p>
            </div>
            <v-row no-gutters class="pt-4">
              <v-col v-for="k in 4" :key="k" cols="1" class="pr-4 pt-1">
                <v-img
                  src="../../assets/images/Star 1.png
            "
                  style="width: 100%"
                ></v-img>
              </v-col>

              <p class="single_teacher_one_para">0.0(0 reviews)</p>
            </v-row>
            <p class="single_teacher_second_para pt-8">
              Hi, I'm Shubhee Pandey, a skilled content writer specializing in
              blog content. With a passion for storytelling and SEO expertise, I
              deliver engaging and optimized articles tailored to your needs.
              Let's collaborate to bring your ideas to life through compelling
              writing.I am expert in Microsoft Word and Excel
            </p>
          </v-col>
        </v-row>

        <v-row class="pl-10 pt-12 pb-6">
          <v-col cols="4">
            <v-row>
              <v-img
                src="../../assets/images/Rectangle 52.png"
                max-height="50"
                max-width="50"
              ></v-img>
              <p class="single_teacher_one_para pl-3">$5 USD / hour</p>
            </v-row>
          </v-col>
        </v-row>

        <v-row class="pl-10 pb-14">
          <v-col cols="4">
            <v-row>
              <v-img
                src="../../assets/images/4a0e1f8fbec8d2108e0434fc48ef88f3 1.png"
                max-height="50"
                max-width="50"
              ></v-img>
              <p class="single_teacher_one_para pl-4">Colombo , Srilanka</p>
            </v-row>
          </v-col>
        </v-row>

        <div class="pa-10">
          <v-sheet border="1" elevation="5">
            <v-row class="pa-8" no-gutters>
              <v-col cols="4">
                <p class="single_teacher_header">Reviews</p>
              </v-col>
              <v-col cols="2" offset="6" class="pt-3">
                <v-btn variant="text" class="text-white bg-primary mx-2"
                  >Add Review</v-btn
                >
              </v-col>
            </v-row>
            <div justify="center" align="center" class="pb-16 pt-6">
              <v-col cols="12" sm="4" class="single_teacher_header">
                No reviews to see here!
              </v-col>
            </div>
            <div class="pb-16"></div>
          </v-sheet>
        </div>

        <div class="pa-10">
          <v-sheet class="pa-5" border="1" elevation="5">
            <v-col cols="4">
              <p class="single_teacher_header">Education</p>
            </v-col>

            <v-col class="single_teacher_second_para">
              <p>B.A</p>
              <p>Allahabad Agricultural Institute,India2018 - 2021</p>
              <p>(3 years)</p>
            </v-col>
          </v-sheet>
        </div>
      </div>
    </div>

    <div class="mobile_teacher">
      <v-row class="pa-8">
        <v-col cols="12 pt-10 pr-8">
          <v-img src="../../assets/images/Rectangle 57.png"></v-img>
        </v-col>
        <v-col cols="12 pl-10">
          <div>
            <p class="single_teacher_header">Sohel khan</p>
          </div>
          <div>
            <p class="single_teacher_mobile_one_para">
              Java Teaching , Software Engineering , Maths
            </p>
          </div>
          <v-row no-gutters class="pt-4">
            <v-col v-for="k in 4" :key="k" cols="1" class="pr-2 pt-2">
              <v-img
                src="../../assets/images/Star 1.png
          "
              ></v-img>
            </v-col>

            <p class="single_teacher_mobile_one_para">0.0(0 reviews)</p>
          </v-row>
          <p class="single_teacher_mobile_one_para pt-8">
            Hi, I'm Shubhee Pandey, a skilled content writer specializing in
            blog content. With a passion for storytelling and SEO expertise, I
            deliver engaging and optimized articles tailored to your needs.
            Let's collaborate to bring your ideas to life through compelling
            writing.I am expert in Microsoft Word and Excel
          </p>
        </v-col>
      </v-row>

      <v-row class="pl-10 pt-10 pb-6">
        <v-col cols="12">
          <v-row>
            <v-img
              src="../../assets/images/Rectangle 52.png"
              max-height="50"
              max-width="50"
            ></v-img>
            <p class="single_teacher_one_para pl-3">$5 USD / hour</p>
          </v-row>
        </v-col>
      </v-row>

      <v-row class="pl-10 pb-14">
        <v-col cols="12">
          <v-row>
            <v-img
              src="../../assets/images/4a0e1f8fbec8d2108e0434fc48ef88f3 1.png"
              max-height="50"
              max-width="50"
            ></v-img>
            <p class="single_teacher_one_para pl-4">Colombo , Srilanka</p>
          </v-row>
        </v-col>
      </v-row>

      <div class="pa-10">
        <v-sheet border="1" elevation="5">
          <v-row class="pa-8" no-gutters>
            <v-col cols="12">
              <p class="single_teacher_header">Reviews</p>
            </v-col>
            <v-col cols="12" class="pt-3">
              <v-btn variant="text" class="text-white bg-primary mx-2"
                >Add Review</v-btn
              >
            </v-col>
          </v-row>
          <div justify="center" align="center" class="pb-16 pt-6">
            <v-col cols="12" sm="4" class="single_teacher_header">
              No reviews to see here!
            </v-col>
          </div>
          <div class="pb-16"></div>
        </v-sheet>
      </div>

      <div class="pa-10">
        <v-sheet class="pa-5" border="1" elevation="5">
          <v-col cols="12">
            <p class="single_teacher_header">Education</p>
          </v-col>

          <v-col class="single_teacher_second_para">
            <p>B.A</p>
            <p>Allahabad Agricultural Institute,India2018 - 2021</p>
            <p>(3 years)</p>
          </v-col>
        </v-sheet>
      </div>
    </div>
  </v-container>
</template>
<script>
import singleteacherApi from "@/Api/Modules/auth.js";
export default {
  data() {
    return {
      form: {},
      id: this.$route.params.id,
      user: {},
    };
  },
  async created() {
    await this.getSingleTeacher();
  },

  methods: {
    async getSingleTeacher() {
      const res = await singleteacherApi.singleteacher(this.id);
      this.user = res.data;
      console.log(res);
    },
  },
};
</script>
