<template>
  <div class="web_header">
    <v-form @submit.prevent>
      <v-row>
        <v-col cols="6">
          <v-text-field
            v-model="form.email"
            label="Enter Email"
            :rules="[required, email]"
            variant="solo"
          ></v-text-field>
        </v-col>
        <v-col cols="6">
          <v-text-field
            v-model="form.password"
            label="Enter Password"
            :rules="[required]"
            type="password"
            variant="solo"
            persistent-hint
          ></v-text-field>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="4"> </v-col>
        <v-col cols="3">
          <v-btn
            type="submit"
            block
            height="40px"
            style="text-transform: capitalize"
            color="#20349E"
            @click="login()"
            ><span class="button_styles">Login</span></v-btn
          ></v-col
        >
        <v-col cols="4"> </v-col>
      </v-row>
    </v-form>
  </div>
  <div class="mobile_header">
    <v-form @submit.prevent>
      <v-row>
        <v-col cols="12">
          <v-text-field
            v-model="form.email"
            label="Enter Email"
            :rules="[required, email]"
            variant="solo"
          ></v-text-field>
        </v-col>
        <v-col cols="12">
          <v-text-field
            v-model="form.password"
            label="Enter Password"
            :rules="[required]"
            type="password"
            variant="solo"
            persistent-hint
          ></v-text-field>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="3"> </v-col>
        <v-col cols="6">
          <v-btn
            type="submit"
            block
            height="40px"
            style="text-transform: capitalize"
            color="#20349E"
            @click="login()"
            ><span class="button_styles">Login</span></v-btn
          ></v-col
        >
        <v-col cols="3"> </v-col>
      </v-row>
    </v-form>
  </div>
</template>
<script>
import userLogin from "@/Api/Modules/auth.js";
export default {
  data() {
    return {
      usertype: null,
      form: {},
    };
  },
  methods: {
    async login() {
      await userLogin.login(this.form);
    },

    required(v) {
      return !!v || "Field is required";
    },
    email(v) {
      const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if (!pattern.test(v)) {
        return "Invalid e-mail.";
      }
    },

    password(v) {
      if (!/\d/.test(v)) {
        return "A password must contain at least one number";
      }

      if (!/[a-z]/.test(v)) {
        return "A password must contain at least lower case letter";
      }

      if (!/[A-Z]/.test(v)) {
        return "A password must contain at least Upper case letter";
      }
    },
  },
};
</script>
