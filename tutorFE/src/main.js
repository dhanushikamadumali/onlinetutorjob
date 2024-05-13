/**
 * main.js
 *
 * Bootstraps Vuetify and other plugins then mounts the App`
 */

// Plugins
import { registerPlugins } from "@/plugins";

import "@/assets/scss/app_bar.scss";

// Components
import App from "./App.vue";

// css

import "@/assets/scss/home.scss";
import "@/assets/scss/footer.scss";
import "@/assets/scss/request_form.scss";
import "@/assets/scss/tutor_jobs.scss";
import "@/assets/scss/teachers.scss";
// Composables
import { createApp } from "vue";

const app = createApp(App);

registerPlugins(app);

app.mount("#app");
