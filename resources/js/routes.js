import AllEmployee from './components/AllEmployee.vue';
import CreateEmployee from './components/CreateEmployee.vue';
import EditEmployee from './components/EditEmployee.vue';
import AllBank from './components/AllBank.vue';
import CreateBank from './components/CreateBank.vue';
import EditBank from './components/EditBank.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllEmployee
    },
    {
        name: 'create',
        path: '/create',
        component: CreateEmployee
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditEmployee
    },
    {
        name: 'home',
        path: '/salary',
        component: AllBank
    },
    {
        name: 'create',
        path: '/bank',
        component: CreateBank
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditBank
    },
];