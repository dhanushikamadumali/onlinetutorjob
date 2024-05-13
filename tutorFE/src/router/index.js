import mainRoute from "@/router/modules/homeroutes";
import studentRoute from "@/router/modules/student_route";
import teacherRoute from "@/router/modules/teacher_route";


import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes: [...mainRoute , ...studentRoute, ...teacherRoute,],
});

export default router;
