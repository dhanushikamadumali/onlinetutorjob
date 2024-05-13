export default [
  {
    path: "/",
    component: () => import("@/layouts/Default.vue"),
    children: [
      {
        path: "/request_form",
        name: "requestform",
        component: () => import("@/pages/Student/TutorRequestForm.vue"),
      },
    ],
  },
  {
    path: "/",
    component: () => import("@/layouts/Default.vue"),
    children: [
      {
        path: "/tutor_jobs",
        name: "tutorjobs",
        component: () => import("@/pages/Student/AllTutorJobs.vue"),
      },
    ],
  },
];
