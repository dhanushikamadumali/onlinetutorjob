export default [
  {
    path: "/",
    component: () => import("@/layouts/Default.vue"),
    children: [
      {
        path: "/",
        name: "home",
        component: () =>
          import("@/pages/Home/index.vue"),
      },
    ],
  },
];
