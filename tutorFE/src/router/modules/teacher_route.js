export default [
  {
    path: "/",
    component: () => import("@/layouts/Default.vue"),
    children: [
      {
        path: "/all_teachers",
        name: "allteachers",
        component: () => import("@/pages/Teacher/AllTeachers.vue"),
      },
    ],
  },
  {
    path: "/",
    component: () => import("@/layouts/Default.vue"),
    children: [
      {
        path: "/single_teachers/:id",
        name: "singleteachers",
        component: () => import("@/pages/Teacher/SingleTeacher.vue"),
      },
    ],
  },
 
  {
    path: "/",
    component: () => import("@/layouts/Default.vue"),
    children: [
      {
        path: "/studentjobs/:tutorjobid/proposal",
        name: "proposal",
        component: () => import("@/pages/Teacher/proposal.vue"),
      },
    ],
  },
];
