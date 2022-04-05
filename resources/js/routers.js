import Vue from 'vue';
import VueRouter from "vue-router";

// Inizializziamo il router
Vue.use(VueRouter)

// importiamo i component
import HomePage from "./components/pages/HomePage";
import ContactPage from "./components/pages/ContactPage";
import NotFoundPage from "./components/pages/NotFoundPage";
import DetailPage from "./components/pages/DetailPage";

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        { path: "/", component: HomePage, name: 'home' },
        { path: "/contacts", component: ContactPage, name: 'contacts' },
        { path: "/posts/:slug", component: DetailPage, name: 'post-detail' },
        { path: '/*', component: NotFoundPage, name: '404' }
    ]
});

export default router;