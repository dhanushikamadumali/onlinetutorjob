<template>
  <div class="web_header">
    <v-col>
      <v-autocomplete
        label="Select User Type"
        :items="['Student', 'Teacher']"
        variant="solo"
        v-model="form.usertype"
      ></v-autocomplete>
    </v-col>
    <div v-if="form.usertype === 'Student'">
      <v-form @submit.prevent>
        <v-row>
          <v-col cols="6">
            <v-text-field
              v-model="form.name"
              label="Enter Name"
              :rules="[required]"
              variant="solo"
            ></v-text-field>
          </v-col>
          <v-col cols="6">
            <v-text-field
              v-model="form.email"
              label="Enter Email"
              :rules="[required, email]"
              variant="solo"
            ></v-text-field>
          </v-col>
        </v-row>
        <v-row>
          <v-col cols="6">
            <v-text-field
              v-model="form.password"
              label="Enter Password"
              type="password"
              :rules="[required, password]"
              variant="solo"
              persistent-hint
            ></v-text-field>
          </v-col>
          <v-col cols="6">
            <v-text-field
              v-model="form.password_confirmation"
              label="Enter Password Confirmation"
              :rules="[required, password_confirmation]"
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
              @click="Register()"
              ><span class="button_styles">Register</span></v-btn
            ></v-col
          >
          <v-col cols="4"> </v-col>
        </v-row>
      </v-form>
    </div>

    <div v-else-if="form.usertype === 'Teacher'">
      <v-form @submit.prevent>
        <v-col>
          <v-row>
            <v-col cols="4">
              <v-text-field
                v-model="form.name"
                :rules="[required]"
                variant="solo"
                label="Enter Name"
              ></v-text-field>
            </v-col>
            <v-col cols="4">
              <v-text-field
                v-model="form.email"
                label="Enter Email"
                :rules="[required, email]"
                variant="solo"
              ></v-text-field>
            </v-col>

            <v-col cols="4">
              <v-text-field
                v-model="form.location"
                label="Enter Location"
                variant="solo"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="4">
              <v-text-field
                v-model="form.password"
                type="password"
                label="Enter Password"
                :rules="[required, password]"
                variant="solo"
              ></v-text-field>
            </v-col>
            <v-col cols="4">
              <v-text-field
                v-model="form.password_confirmation"
                type="password"
                label="Enter Password Confirmation"
                :rules="[required, password_confirmation]"
                variant="solo"
              ></v-text-field>
            </v-col>
            <v-col cols="4">
              <v-text-field
                v-model="form.phonenumber"
                variant="solo"
                label="Enter Phone Number"
              ></v-text-field>
            </v-col>
          </v-row>
          <!-- <v-row>
          <v-col cols="6">
            <v-textarea
              v-model="form.description"
              variant="solo"
              label="Description"
            ></v-textarea>
          </v-col>
          <v-col cols="6">
            <v-textarea
              v-model="form.education"
              variant="solo"
              label="Enter Education"
            ></v-textarea>
          </v-col>
        </v-row> -->
        </v-col>
        <v-row>
          <v-col cols="4"> </v-col>
          <v-col cols="3">
            <v-btn
              type="submit"
              block
              height="40px"
              style="text-transform: capitalize"
              color="#20349E"
              @click="Register()"
              ><span class="button_styles">Register</span></v-btn
            ></v-col
          >
          <v-col cols="4"> </v-col>
        </v-row>
      </v-form>
    </div>
  </div>

  <div class="mobile_header">
    <div style="overflow-x: scroll; height: 200px">
      <v-col>
        <v-autocomplete
          label="Select User Type"
          :items="['Student', 'Teacher']"
          variant="solo"
          v-model="form.usertype"
        ></v-autocomplete>
      </v-col>
      <div v-if="form.usertype === 'Student'">
        <v-form @submit.prevent>
          <v-row>
            <v-col cols="12">
              <v-text-field
                v-model="form.name"
                label="Enter Name"
                :rules="[required]"
                variant="solo"
              ></v-text-field>
            </v-col>
            <v-col cols="12">
              <v-text-field
                v-model="form.email"
                label="Enter Email"
                :rules="[required, email]"
                variant="solo"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12">
              <v-text-field
                v-model="form.password"
                label="Enter Password"
                type="password"
                :rules="[required, password]"
                variant="solo"
                persistent-hint
              ></v-text-field>
            </v-col>
            <v-col cols="12">
              <v-text-field
                v-model="form.password_confirmation"
                label="Enter Password Confirmation"
                :rules="[required, password_confirmation]"
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
                @click="Register()"
                ><span class="button_styles">Register</span></v-btn
              ></v-col
            >
            <v-col cols="3"> </v-col>
          </v-row>
        </v-form>
      </div>

      <div v-else-if="form.usertype === 'Teacher'">
        <v-form @submit.prevent>
          <v-col>
            <v-row>
              <v-col cols="12">
                <v-text-field
                  v-model="form.name"
                  :rules="[required]"
                  variant="solo"
                  label="Enter Name"
                ></v-text-field>
              </v-col>
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
                  v-model="form.location"
                  label="Enter Location"
                  variant="solo"
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="12">
                <v-text-field
                  v-model="form.password"
                  type="password"
                  label="Enter Password"
                  :rules="[required, password]"
                  variant="solo"
                ></v-text-field>
              </v-col>
              <v-col cols="12">
                <v-text-field
                  v-model="form.password_confirmation"
                  type="password"
                  label="Enter Password Confirmation"
                  :rules="[required, password_confirmation]"
                  variant="solo"
                ></v-text-field>
              </v-col>
              <v-col cols="12">
                <v-text-field
                  v-model="form.phonenumber"
                  variant="solo"
                  label="Enter Phone Number"
                ></v-text-field>
              </v-col>
            </v-row>
            <!-- <v-row>
          <v-col cols="6">
            <v-textarea
              v-model="form.description"
              variant="solo"
              label="Description"
            ></v-textarea>
          </v-col>
          <v-col cols="6">
            <v-textarea
              v-model="form.education"
              variant="solo"
              label="Enter Education"
            ></v-textarea>
          </v-col>
        </v-row> -->
          </v-col>
          <v-row>
            <v-col cols="3"> </v-col>
            <v-col cols="6">
              <v-btn
                type="submit"
                block
                height="40px"
                style="text-transform: capitalize"
                color="#20349E"
                @click="Register()"
                ><span class="button_styles">Register</span></v-btn
              ></v-col
            >
            <v-col cols="3"> </v-col>
          </v-row>
        </v-form>
      </div>
    </div>
  </div>
</template>
<script>
import authapi from "@/Api/Modules/auth.js";
export default {
  data() {
    return {
      usertype: null,
      form: {},
    };
  },
  methods: {
    async Register() {
      await authapi
        .register(this.form)
        .then(() => {})
        .catch({});
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
    password_confirmation(v) {
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
