import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

import App from './App.vue';
import Home from './Pages/Home.vue';
import Blog from './Pages/Blog.vue';
import Services from './Pages/Services.vue';
import Login from './Pages/Login.vue';
import Contact from './Pages/Contact.vue';
import PostDetail from './Pages/Posts/PostDetail.vue';
import PostCreate from './Pages/Posts/PostCreate.vue';
import PostList from './Pages/Posts/PostList.vue';

const routes = [
    { path: '/', component: Home, meta: { title: 'Home'} },
    { path: '/blog', component: Blog, meta: { title: 'Blog'} },
    { path: '/contato', component: Contact, meta: { title: 'Contato'} },
    { path: '/servicos', component: Services, meta: { title: 'Serviços'} },
    { path: '/entrar', component: Login, meta: { title: 'Entrar'} },
    { path: '/blog/postagem/:id', component: PostDetail, meta: { title: 'Postagem'} },
    { path: '/postagens', component: PostList, meta: { title: 'Listar Postagens'} },
    { path: '/postagens/criar', component: PostCreate, meta: { title: 'Criar Postagem'} },
    { path: '/postagens/editar/:id', component: PostCreate, meta: { title: 'Editar Postagem'} },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition;
        } else {
            return { top: 0 };
        }
    }
});

router.beforeEach((to, from, next) => {
    document.title = to.meta.title;
    next();
});

createApp(App).use(router).mount("#app");

// Scroll back to top with JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const progressWrap = document.querySelector('.progress-wrap');
    const progressPath = document.querySelector('.progress-wrap path');
    const pathLength = progressPath.getTotalLength();

    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = `${pathLength} ${pathLength}`;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

    const updateProgress = () => {
        const scroll = window.scrollY;
        const height = document.documentElement.scrollHeight - window.innerHeight;
        const progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
    };

    updateProgress();
    window.addEventListener('scroll', updateProgress);

    const offset = 50;
    const duration = 550;

    window.addEventListener('scroll', () => {
        if (window.scrollY > offset) {
            progressWrap.classList.add('active-progress');
        } else {
            progressWrap.classList.remove('active-progress');
        }
    });

    progressWrap.addEventListener('click', (event) => {
        event.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
