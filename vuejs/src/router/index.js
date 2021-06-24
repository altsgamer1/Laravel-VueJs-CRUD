import AllEntry from '../components/AllEntry.vue';
import CreateEntry from '../components/CreateEntry.vue';
import EditEntry from '../components/EditEntry.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllEntry
    },
    {
        name: 'create',
        path: '/create',
        component: CreateEntry
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditEntry
    }
];