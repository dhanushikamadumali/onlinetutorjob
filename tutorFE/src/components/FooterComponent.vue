<template>
  <!-- Mobile view -->
  <div class="mobile_footer">
    <v-footer class="footer_text footer">
      <v-container class="footer_container">
        <v-row justify="center" no-gutters>
          <v-col md="6" cols="12">
            <h2 class="pt-3">
              Example - <span class="text-yellow">Project</span>
            </h2>
          </v-col>

          <v-col md="6" cols="12">
            <v-row no-gutters>
              <v-col md="4" cols="12">
                <v-row class="pt-5">
                  <v-btn color="white" variant="text" class="mx-2" rounded="xl">
                    Home</v-btn
                  >
                </v-row>
                <v-row class="pt-5">
                  <v-list-item class="mx-2" subtitle="Why Us?" />
                </v-row>
              </v-col>
              <v-col md="4" cols="12">
                <v-row class="pt-5">
                  <v-btn color="white" variant="text" class="mx-2" rounded="xl">
                    Services</v-btn
                  >
                </v-row>
                <v-row class="pt-5">
                  <v-list-item class="mx-2" subtitle="Meeting Mangement" />
                </v-row>
              </v-col>

              <v-col md="4" cols="12">
                <v-row class="pt-5">
                  <v-btn color="white" variant="text" class="mx-2" rounded="xl">
                    Contact Us</v-btn
                  >
                </v-row>
                <v-row>
                  <v-col md="3" cols="3" v-for="icon in icons" :key="icon">
                    <div>
                      <v-btn class="mx-4" :icon="icon" variant="text"></v-btn>
                    </div>
                  </v-col>
                </v-row>
              </v-col>
            </v-row>
          </v-col>
        </v-row>

        <div class="pt-8"></div>
        <div style="font-size: 11px">
          Copyright © {{ new Date().getFullYear() }} <br />
        </div>
      </v-container>
    </v-footer>
  </div>

  <!-- web view -->

  <div class="web_footer">
    <v-footer class="footer_text footer">
      <v-container class="footer_container">
        <v-row>
          <v-col cols="12" md="4" class="web_header">
            <v-img
              src="../assets/images/totorjob.png"
              max-height="80"
              max-width="70"
            >
            </v-img>
          </v-col>

          <v-col md="6" cols="12">
            <v-row no-gutters>
              <v-col md="4" cols="12">
                <v-row class="pt-5">
                  <v-btn color="white" variant="text" class="mx-2" rounded="xl">
                    Home</v-btn
                  >
                </v-row>
                <v-row class="pt-5">
                  <v-btn color="white" variant="text" class="mx-2" rounded="xl">
                    About us</v-btn
                  >
                </v-row>
              </v-col>
              <v-col md="4" cols="12">
                <v-row class="pt-5">
                  <v-btn color="white" variant="text" class="mx-2" rounded="xl">
                    Services</v-btn
                  >
                </v-row>
                <v-row class="pt-5">
                  <v-btn color="white" variant="text" class="mx-2" rounded="xl">
                    How it works?</v-btn
                  >
                </v-row>
              </v-col>

              <v-col md="4" cols="12">
                <v-row class="pt-5">
                  <v-btn color="white" variant="text" class="mx-2" rounded="xl">
                    Contact Us</v-btn
                  >
                </v-row>

                <v-row class="pt-5">
                  <v-btn color="white" variant="text" class="mx-2" rounded="xl">
                    Terms</v-btn
                  >
                </v-row>
              </v-col>
            </v-row>
          </v-col>
        </v-row>

        <br />
        <hr />
        <div class="pt-8"></div>

        <v-row justify="center">
          <div style="font-size: 16px; color: white">
            Copyright © {{ new Date().getFullYear() }} - Sl Tutor All rights
            reserved <br />
          </div>
        </v-row>
      </v-container>
    </v-footer>
  </div>
</template>

<script>
export default {
  components: {},

  data() {},
  methods: {},
};
</script>
