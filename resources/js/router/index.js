import Vue from 'vue';

import VureRouter from 'vue-router';

Vue.use(VureRouter);

import Anasayfa from '../pages/Anasayfa';
import Users from '../pages/UserList';

import Sayfalar from '../pages/sayfalar';
import Mesajlar from '../pages/mesajlar';
import addPage from '../pages/sayfaEkle';
import sayfadetay from '../pages/sayfadetay';
const routes = [
    {
        path: '/',
        component : Anasayfa,
        name: 'anasayfa'
    },
    {
        path: '/liste',
        component: Users,
        name: 'userList',
    }
    ,

    {
        path:'sayfalar',
        component:Sayfalar,
        name: 'sayfalar',
    },
    {
        path: 'mesajlar',
        component: Mesajlar,
        name: 'mesajlar'
    },

    {   path: 'sayfaekle', component: addPage, name:'sayfaekle'   },
    {  path: 'sayfadetay/:id', component: sayfadetay, name: 'sayfadetay'}
];

export default new VureRouter({
    mode: 'hash',
   routes
});
