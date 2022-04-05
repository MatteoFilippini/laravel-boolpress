import Vue from 'vue';
import VueRouter from "vue-router";

// Inizializziamo il router
Vue.use(VueRouter)

// importiamo i component
import HomePage from "./components/pages/HomePage";
import ContactPage from "./components/pages/ContactPage";
import NotFoundPage from "./components/pages/NotFoundPage";

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: "/", component: HomePage, name: 'home' },
        { path: "/contacts", component: ContactPage, name: 'contact' },
        { path: '/*', component: NotFoundPage, name: '404' }
    ]
});

export default router;