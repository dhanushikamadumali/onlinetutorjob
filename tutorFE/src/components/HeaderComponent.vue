<template>
  <div class="mobile_header">
    <v-navigation-drawer v-model="drawer" temporary>
      <v-list density="compact" nav>
        <v-list-item
          prepend-icon="mdi-view-dashboard"
          @click="$router.push('/tutor_jobs')"
        >
          <span class="nev_item_properties">Find Tutor Jobs</span>
        </v-list-item>
        <v-list-item
          prepend-icon="mdi-forum"
          @click="$router.push('/all_teachers')"
        >
          <span class="nev_item_properties">Find Tutors</span></v-list-item
        >
        <v-list-item
          prepend-icon="mdi-forum"
          v-if="!token"
          @click="showLoginModal"
          value="about"
        >
          <span class="nev_item_properties">Login</span></v-list-item
        >
        <v-list-item
          prepend-icon="mdi-forum"
          v-if="token"
          @click="Locallogout()"
          ><span class="nev_item_properties">LogOut</span></v-list-item
        >
        <v-list-item prepend-icon="mdi-forum" @click="showRegisterModal">
          <span class="nev_item_properties">Sign Up</span>
        </v-list-item>
        <v-list-item
          prepend-icon="mdi-forum"
          @click="$router.push('/request_form')"
        >
          <span class="nev_item_properties">Request Tutor</span></v-list-item
        >
      </v-list>
    </v-navigation-drawer>
  </div>

  <v-app-bar elevation="1" class="pa-3">
    <div class="mobile_header">
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
    </div>
    <v-col cols="1" class="web_header">
      <v-img
        src="../assets/images/390120059_290664403849120_6086397208053973545_n.jpg"
        max-height="80"
        max-width="70"
      >
      </v-img>
    </v-col>
    <v-spacer class="mobile_header"></v-spacer>

    <v-col class="mobile_header ml-16">
      <v-img
        src="../assets/images/390120059_290664403849120_6086397208053973545_n.jpg"
        max-height="80"
        max-width="70"
      ></v-img>
    </v-col>
    <v-spacer class="mobile_header"></v-spacer>

    <div class="web_header">
      <v-list-item class="text-black" @click="$router.push('/tutor_jobs')">
        Find Tutor Jobs</v-list-item
      >
    </div>
    <div class="web_header">
      <v-list-item class="text-black" @click="$router.push('/all_teachers')"
        >Find Tutors</v-list-item
      >
    </div>
    <v-spacer></v-spacer>

    <div class="web_header">
      <v-list-item v-if="!token" class="text-black" @click="showLoginModal"
        >Log in</v-list-item
      >
    </div>
    <div class="web_header">
      <v-list-item v-if="token" @click="Locallogout()"
        ><span class="nev_item_properties">LogOut</span></v-list-item
      >
    </div>
    <div class="web_header">
      <v-list-item class="text-black mr-6" @click="showRegisterModal">
        Sign up</v-list-item
      >
    </div>
    <div class="web_header">
      <v-list-item
        class="text-white bg-primary mr-6"
        rounded
        variant="text"
        @click="$router.push('/request_form')"
        >Request Tutor</v-list-item
      >
    </div>
  </v-app-bar>

  <v-dialog v-model="dialog">
    <v-row justify="space-around">
      <v-card
        width="1000"
        max-height="1000"
        style="font-family: 'Urbainst'"
        color="#EDEDED"
        class="pa-8"
      >
        <v-card-title class="d-flex justify-space-between align-center">
          <div class="text-h4" style="font-family: 'Urbainst'">Register</div>

          <v-btn
            icon="mdi-close"
            variant="text"
            class="close"
            @click="closemodal"
          >
          </v-btn>
        </v-card-title>
        <v-divider class="mb-2"></v-divider>
        <v-card-text>
          <Register />
        </v-card-text>
      </v-card>
    </v-row>
  </v-dialog>

  <v-dialog v-model="logindialog">
    <v-row justify="space-around">
      <v-card
        width="1000"
        max-height="1000"
        style="font-family: 'Urbainst'"
        color="#EDEDED"
        class="pa-8"
      >
        <v-card-title class="d-flex justify-space-between align-center">
          <div class="text-h4" style="font-family: 'Urbainst'">Login</div>

          <v-btn
            icon="mdi-close"
            variant="text"
            class="close"
            @click="closeloginmodal"
          >
          </v-btn>
        </v-card-title>
        <v-divider class="mb-2"></v-divider>
        <v-card-text>
          <Login />
        </v-card-text>
      </v-card>
    </v-row>
  </v-dialog>
</template>
<script>
import Register from "@/pages/Auth/Register.vue";
import Login from "@/pages/Auth/Login.vue";
import logout from "@/Api/Modules/auth.js";

export default {
  components: {
    Register,
    Login,
  },
  data() {
    return {
      token: localStorage.token,
      drawer: null,
      dialog: false,
      logindialog: false,
    };
  },
  methods: {
    async Locallogout() {
      await logout.logout();
    },
    showRegisterModal() {
      this.dialog = true;
    },
    closemodal() {
      this.dialog = false;
    },
    showLoginModal() {
      this.logindialog = true;
    },
    closeloginmodal() {
      this.logindialog = false;
    },
    // async Locallogout() {
    //   await this.logout();
    //   localStorage.clear();
    // },
  },
};
</script>
