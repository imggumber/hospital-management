import { createRouter, createWebHistory } from "vue-router";
import DashboardLayout from "./Layouts/DashboardLayout.vue";

const routes = [
    {
        path: "/",
        component: () => import("./Pages/HomeRoute.vue"),
    },
    {
        path: "/dashboard",
        component: () => import("./Pages/DashboardRoute.vue"),
        meta: {Layout: DashboardLayout}
    },
    {
        path: "/test",
        component: () => import("./Pages/TestRoute.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
