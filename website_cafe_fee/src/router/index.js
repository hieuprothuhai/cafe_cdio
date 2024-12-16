import { createRouter, createWebHistory } from "vue-router"; // cài vue-router: npm install vue-router@next --save
import checkadminlogin from "./checkloginadmin";

const routes = [
    {
        path: '/admin/nhan-vien',
        component: () => import('../components/Admin/NhanVien.vue'),
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/khach-hang',
        component: () => import('../components/Admin/KhachHang.vue'),
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/loai-sp',
        component: () => import('../components/Admin/loaisanpham.vue'),
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/quyen',
        component: () => import('../components/Admin/PhanQuyen.vue'),
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/dang-nhap',
        component: () => import('../components/Admin/dangnhap.vue'),
        meta: { layout: "blank" },
    },
    {
        path: '/admin/san-pham',
        component: () => import('../components/Admin/sanpham.vue'),
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/nha-cung-cap',
        component: () => import('../components/Admin/NhaCungCap.vue'),
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/chitiet-nhapkho',
        component: () => import('../components/Admin/ChiTietNhapKho.vue'),
        beforeEnter: checkadminlogin
    },
    {
        path: '/admin/kho',
        component: () => import('../components/Admin/Kho.vue'),
        beforeEnter: checkadminlogin
    },
    {
        path: '/khach-hang/dang-nhap',
        component: () => import('../components/KhachHang/dangnhap.vue'),
        meta: { layout: "blank" },
    },
    {
        path: '/khach-hang/dang-ky',
        component: () => import('../components/KhachHang/dangki.vue'),
        meta: { layout: "blank" },
    },
    
    {
        path: '/trang-chu',
        component: () => import('../components/KhachHang/sanpham.vue'),
        meta: { layout: "client" },
    },
    {
        path: '/gio-hang',
        component: () => import('../components/KhachHang/GioHang.vue'),
        meta: { layout: "client" },
    },
    {
        path: '/hoa-don',
        component: () => import('../components/KhachHang/HoaDon.vue'),
        meta: { layout: "client" },
    },
    {
        path: '/menu/coffee',
        component: () => import('../components/KhachHang/cafe.vue'),
        meta: { layout: "client" },
    },
    {
        path: '/menu/detail-san-pham/:id_cafe',
        component: () => import('../components/KhachHang/thongtinSanpham.vue'),
        meta: { layout: "client" },
        props: true

    },
    
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router
