import { createMemoryHistory, createRouter } from 'vue-router'

const routes = [
  {
    path: '/',
    component: () => import('../components/Home.vue'),
    name: 'home',
    meta: {
      title: 'Home'
    }
  },
  {
    path: '/about',
    component: () => import('../components/About.vue'),
    name: 'about',
    meta: {
      title: 'About'
    }
  },
  {
    path: '/services',
    component: () => import('../components/Services.vue'),
    name: 'services',
    meta: {
      title: 'Services'
    }
  }
];

const router = createRouter({
  linkActiveClass: 'active',
  linkExactActiveClass: 'active',

  history: createMemoryHistory(),
  routes
});

router.beforeEach((to, from, next) => {
  document.title = to.meta.title || 'Zuma Ganteng';
  next();
});

export default router