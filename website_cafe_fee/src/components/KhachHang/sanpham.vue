<template>
    <div class="homepage">
        <section>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <!-- Slide content -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/src/assets/assets_rocker/abc.jpg" class="d-block w-100" alt="..."
                            style="object-fit: cover; height: 500px;">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://studiovietnam.com/wp-content/uploads/2020/12/chup-anh-san-pham-voi-ngan-sach-nho-01.jpg"
                            class="d-block w-100" alt="..." style="object-fit: cover; height: 500px;">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://hatinhtoplist.vn/wp-content/uploads/2023/11/Quan-ca-phe-chup-anh-Noel-dep-tai-Ha-Tinh-6.jpg"
                            class="d-block w-100" alt="..." style="object-fit: cover; height: 500px;">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                </div>

                <!-- Navigation buttons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- Navigation Menu -->

        <!-- Banner -->
        <section id="home" class="banner">
            <!-- Hình ảnh ngang -->
            <div class="class mt-5">
                <div id="carouselExampleIndicators" class="carousel slide custom-carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://file.hstatic.net/1000075078/file/sig-03_c74a0629d8b44ac580a3e9cf51fadb0a_master.png"
                                class="d-block" alt="Slide 1" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-content">
                <div class="alert alert-secondary marquee-container" role="alert">
                    <div class="marquee-content">
                        <span class="icon">☕</span>
                        <!-- Icon tự chọn -->
                        <h2 class="mt-2 text-nowrap">Chào mừng đến với Coffee House</h2>
                    </div>
                </div>
                <router-link to="/menu/coffee">
                    <button class="btn-primary">Khám Phá Menu</button>
                </router-link>
            </div>
        </section>

        <!-- Menu Section -->
        <section id="menu" class="menu">
            <h2>Menu Nổi Bật</h2>
            <div class="menu-items">
                <template v-for="(v, k) in list" :key="k">
                    <div class="menu-item">
                        <div class="card">
                            <img :src="v.hinh_anh" style="width: 100%;height: 350px;" alt="menu item" />
                            <h3>{{ v.ten_san_pham }}</h3>
                            <p>{{ v.gia_ban }} VND</p>
                        </div>
                    </div>
                </template>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about">
            <h2>Về Chúng Tôi</h2>
            <p>
                Coffee House là nơi thư giãn hoàn hảo, nơi bạn tận hưởng những tách cafe
                đậm đà và bánh ngọt hảo hạng.
            </p>
        </section>
    </div>
</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
            list: [],
        };
    },
    mounted() {
        this.loadData();
    },
    methods: {
        loadData() {
            axios
                .get("http://127.0.0.1:8000/api/admin/san-pham/dataopen")
                .then((res) => {
                    this.list = res.data.data;
                });
        },
    },
};
</script>

<style>
/* Marquee container */
.marquee-container {
    background-color: #f1f1f1;
    /* Màu nền nhẹ */
    padding: 20px;
    border-radius: 25px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px 0;
    font-family: "Arial", sans-serif;
}

/* Nội dung marquee */
.marquee-content {
    display: flex;
    align-items: center;
    animation: marquee 12s linear infinite;
    /* Tốc độ di chuyển chậm hơn */
    font-size: 1.8rem;
    color: #2a105e;
    /* Màu chữ */
    font-weight: bold;
}

/* Hiệu ứng di chuyển marquee */
@keyframes marquee {
    0% {
        transform: translateX(100%);
    }

    100% {
        transform: translateX(-100%);
    }
}

/* Icon */
.icon {
    font-size: 2.5rem;
    /* Kích thước icon */
    margin-right: 15px;
    color: #ff9800;
    /* Màu vàng cho icon */
    animation: bounce 1s infinite alternate;
    /* Thêm hiệu ứng nhún cho icon */
}

/* Hiệu ứng nhún cho icon */
@keyframes bounce {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-10px);
        /* Hiệu ứng nhún lên */
    }
}

/* Header Styles */
.header {
    background-color: #784a4a;
    padding: 20px 0;
    box-shadow: 0 2px 10px rgba(255, 255, 255, 0.1);
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.custom-carousel {
    width: 600px;
    /* Set fixed width */
    height: 600px;
    /* Set fixed height */
    margin: 0 auto;
    /* Center the carousel */
    border-radius: 20px;
    /* Rounded corners */
    overflow: hidden;
    /* Hide overflow to match rounded corners */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    /* Add shadow */
}

.carousel-inner img {
    object-fit: cover;
    /* Cover the entire area */
    width: 100%;
    height: 100%;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    filter: invert(1);
    /* Make controls visible on dark images */
}

.custom-carousel {
    width: 100%;
    /* Chiều rộng đầy đủ */
    height: 400px;
    /* Chiều cao cố định của carousel */
    margin: 0 auto;
    /* Canh giữa */
    border-radius: 20px;
    /* Bo góc */
    overflow: hidden;
    /* Ẩn phần thừa ngoài khung */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    /* Thêm bóng đổ */
}

.carousel-inner {
    width: 100%;
    height: 100%;
}

.carousel-item {
    width: 100%;
    height: 100%;
}

.carousel-item img {
    width: 100%;
    /* Đảm bảo ảnh chiếm hết chiều rộng */
    height: 100%;
    /* Đảm bảo ảnh chiếm hết chiều cao */
    object-fit: cover;
    /* Đảm bảo ảnh lấp đầy khung mà không bị méo */
}

/* Logo */
.logo-container {
    display: flex;
    align-items: center;
    gap: 10px;
}

.logo {
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.logo-text {
    font-size: 1.5rem;
    font-weight: bold;
    color: #2a105e;
}

/* Navbar */
.navbar {
    flex-grow: 1;
}

.navbar-nav {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 15px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.nav-item {
    position: relative;
}

.nav-link {
    text-decoration: none;
    font-size: 1rem;
    color: #ffffff;
    padding: 8px 12px;
    transition: all 0.3s ease;
    font-weight: 500;
    border-radius: 5px;
}

.nav-link:hover {
    background-color: #de3333;
    color: #fff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.logo {
    height: 120px;
    /* Tăng chiều cao */
    width: 120px;
    /* Đảm bảo logo có hình vuông */
    border-radius: 50%;
    /* Giữ hình tròn */
    object-fit: cover;
}

.logo-container {
    gap: 15px;
    /* Tăng khoảng cách giữa logo và text */
}

.logo-text {
    font-size: 2rem;
    /* Tăng kích thước text logo */
    font-weight: bold;
    color: #ffffff;
}

/* Banner */
.banner {
    height: 400px;
    background: url("https://i.pinimg.com/originals/57/56/f7/5756f70875561c94aa8a5f65594b1dfd.jpg") no-repeat center center/cover;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #fff;
}

.banner-content h2 {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.banner-content p {
    font-size: 1.2rem;
    margin-bottom: 20px;
}

.btn-primary {
    padding: 10px 20px;
    background-color: #4b2e83;
    color: #fff;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #6b43b3;
}

/* Màu sắc chữ và các hiệu ứng chữ */
.marquee-content h2 {
    font-family: "Cursive", sans-serif;
    font-size: 2rem;
    color: #481212;
    /* Màu đỏ cho chữ */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    /* Thêm hiệu ứng bóng cho chữ */
}

/* Menu Section */
.menu-items {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

/* Card sản phẩm */
.menu-item {
    text-align: center;
    width: 30%;
    margin-bottom: 2rem;
    padding: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    /* Thêm hiệu ứng cho card */
}

/* Card sản phẩm */
.card {
    border-radius: 15px;
    /* Bo tròn các góc của card */
    overflow: hidden;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    /* Thêm bóng đổ nhẹ */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    /* Thêm hiệu ứng cho card */
}

/* Ảnh của sản phẩm */
.card img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    transition: transform 0.3s ease;
    /* Thêm hiệu ứng cho ảnh */
}

/* Tiêu đề và giá sản phẩm */
.card h3 {
    margin: 1rem 0;
    font-size: 1.25rem;
    color: #333;
    font-weight: bold;
}

.card p {
    font-size: 1rem;
    color: #777;
}

/* Hiệu ứng khi hover lên card */
.menu-item:hover .card {
    transform: scale(1.05);
    /* Phóng to khi hover */
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    /* Tăng bóng đổ khi hover */
}

.menu-item:hover .card img {
    transform: scale(1.05);
    /* Phóng to ảnh khi hover */
}

/* General Styles */
body {
    font-family: "Arial", sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Header */
.header {
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
    padding: 1rem 0;
}

.logo-container {
    display: flex;
    align-items: center;
}

.logo {
    height: 50px;
    margin-right: 1rem;
}

.navbar {
    display: flex;
    justify-content: flex-end;
}

.navbar-nav {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

.nav-item {
    margin-left: 20px;
}

.nav-link {
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    color: #333;
    transition: color 0.3s;
}

.nav-link:hover {
    color: #ff9800;
}

/* Banner */
.banner {
    background: url("assets/images/banner.jpg") no-repeat center center / cover;
    height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
}

.banner-content h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.banner-content p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
}

.btn-primary {
    background-color: #ff9800;
    color: #fff;
    border: none;
    padding: 0.75rem 1.5rem;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: #e68a00;
}

/* Menu Section */
.menu {
    padding: 2rem 1rem;
    text-align: center;
}


.menu h2 {
    font-size: 2rem;
    margin-bottom: 2rem;
}

.menu-items {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.menu-item {
    text-align: center;
    width: 30%;
    margin-bottom: 2rem;
}

.menu-item img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    margin-bottom: 1rem;
}

/* About Section */
.about {
    padding: 2rem 1rem;
    background-color: #fff;
    text-align: center;
}

.about h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.about p {
    font-size: 1rem;
    line-height: 1.6;
}

/* Contact Section */
.contact {
    padding: 2rem 1rem;
    text-align: center;
}

.contact h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.carousel-item img {
    width: 100%;
    height: 500px;
    object-fit: cover;
    /* Đảm bảo ảnh không bị méo */
    object-position: center;
    /* Canh giữa ảnh */
}

.carousel {
    max-width: 100%;
}
</style>
