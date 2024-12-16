<template>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo-container">
                <img src="https://i.pinimg.com/736x/98/cc/b0/98ccb0f5aa3f5fc6888866c986f9f23f.jpg" alt="logo icon"
                    class="logo" />
                <h1 class="logo-text">
                    <span>C</span><span>o</span><span>f</span><span>f</span><span>e</span><span>e</span>
                    <span> </span>
                    <span>H</span><span>o</span><span>u</span><span>s</span><span>e</span>
                    <span> </span>

                </h1>
            </div>
            <nav class="navbar">
                <ul class="navbar-nav">
<<<<<<< HEAD
                    <!-- Đăng nhập và Đăng ký -->
                    <!-- <li class="nav-item text-end">
                <router-link to="/khach-hang/dang-nhap">
              <a class="btn login-btn me-3" href="#login">Đăng Nhập</a>
            </router-link>
            <router-link to="/khach-hang/dang-ky">
              <a class="btn register-btn" href="#register">Đăng Ký</a>
            </router-link>
            </li> -->
=======

>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
                    <div class="btn-group">
                        <!-- Button icon 1 -->
                        <div class="dropdown">
                            <router-link to="/khach-hang/dang-ky">
                                <button class="btn-icon">
                                    <i class="fas fa-envelope"></i>
                                </button>
                            </router-link>
                            <!-- Dropdown menu -->
                            <div class="dropdown-content">
                                <router-link to="/thong-bao">Thông báo</router-link>
                                <router-link to="/tin-nhan">Tin nhắn</router-link>
                                <router-link to="/ho-tro">Hỗ trợ</router-link>
                            </div>
                        </div>
<<<<<<< HEAD

=======
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
                        <!-- Button icon 2 -->
                        <div class="dropdown">
                            <router-link to="/khach-hang/dang-ky">
                                <button class="btn-icon">
                                    <i class="fas fa-user"></i>
                                </button>
                            </router-link>
                            <!-- Dropdown menu -->
                            <div class="dropdown-content">
                                <router-link to="/khach-hang/dang-ky">đăng kí tài khoản</router-link>
                                <router-link to="/cai-dat">Cài đặt</router-link>
                                <router-link to="/dang-xuat">Đăng xuất</router-link>
                            </div>
                        </div>
                    </div>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/trang-chu">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Về Chúng Tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Liên Hệ</a>
                    </li> -->

                </ul>
            </nav>
        </div>
    </header>
</template>
<script>
export default {
    data() {
        return {
            daDangNhap: false, // Trạng thái kiểm tra người dùng đã đăng nhập hay chưa
        };
    },
    methods: {
        dangXuat() {
            // Xử lý đăng xuất
            localStorage.removeItem("key_khach_hang"); // Xóa token
            this.daDangNhap = false; // Cập nhật trạng thái
            this.$router.push("/trang-chu"); // Điều hướng về trang chủ
            alert("Bạn đã đăng xuất!"); // Thông báo
        },
    },
    created() {
        // Kiểm tra trạng thái đăng nhập từ localStorage hoặc API
        const token = localStorage.getItem("key_khach_hang");
        this.daDangNhap = !!token; // Kiểm tra token tồn tại
    },
};
</script>

<style scoped>
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

/* Nút Đăng Nhập và Đăng Ký */
.btn {
    text-decoration: none;
    font-size: 1rem;
    font-weight: 500;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease, outline 0.3s ease;
    display: inline-block;
    position: relative;
}

/* Đăng Nhập */
.login-btn {
    background-color: #4b2e83;
    color: #fff;
    border: 2px solid #4b2e83;
    /* Đường viền cùng màu nền */
    outline: none;
    /* Xóa outline mặc định */
}

.login-btn:hover {
    background-color: #6b43b3;
    outline: 3px solid #d1c4e9;
    /* Hiệu ứng outline khi hover */
}

/* Đăng Ký */
.register-btn {
    background-color: #de3333;
    color: #fff;
    border: 2px solid #de3333;
    /* Đường viền cùng màu nền */
    outline: none;
    /* Xóa outline mặc định */
}

.register-btn:hover {
    background-color: #c33c3c;
    outline: 3px solid #ffcccb;
    /* Hiệu ứng outline khi hover */
}

/* Hiệu ứng hover thêm */
.btn:hover {
    transform: scale(1.05);
    /* Tăng kích thước nhẹ */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    /* Thêm bóng đổ */
}


/* Màu sắc chữ và các hiệu ứng chữ */
.marquee-content h2 {
    font-family: 'Cursive', sans-serif;
    font-size: 2rem;
    color: #ea5252;
    /* Màu đỏ cho chữ */
    text-shadow: 2px 2px 4px rgba(245, 226, 226, 0.1);
    /* Thêm hiệu ứng bóng cho chữ */
}

/* Nút Đăng Nhập và Đăng Ký */
.btn {
    text-decoration: none;
    font-size: 1rem;
    font-weight: 500;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    display: inline-block;
}

.login-btn {
    background-color: #7a3bf6;
    color: #fff;
}

.register-btn {
    background-color: #f36e6e;
    color: #fff;
}

/* Hiệu ứng hover cho các nút */
.btn:hover {
    transform: scale(1.05);
    /* Tăng kích thước nhẹ */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    /* Thêm bóng đổ */
}

/* Cải thiện màu nền khi hover */
.login-btn:hover {
    background-color: #bd9ef7;
}

.register-btn:hover {
    background-color: #c33c3c;
}


/* Header Styles */
.header {
    background-image: url('https://img.pikbest.com/wp/202344/wooden-background-texture-natural-wood-perfect-backdrop-with_9930075.jpg!sw800');
    background-size: cover;
    /* Phủ đầy khu vực */
    background-position: center;
    /* Canh giữa hình ảnh */
    background-repeat: no-repeat;
    /* Không lặp lại hình ảnh */
    width: 100%;
    /* Chiều rộng 100% */
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


button {
    all: unset;
    /* Loại bỏ các kiểu mặc định của button */
    cursor: pointer;
}

/* CSS cho các button icon */
.btn-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    /* Chiều rộng cố định */
    height: 50px;
    /* Chiều cao cố định */
    border-radius: 50%;
    /* Bo tròn */
    background-color: #fff;
    /* Màu nền (có thể thay đổi) */
    border: 2px solid #000;
    /* Viền (có thể thay đổi) */
    font-size: 20px;
    /* Kích thước icon */
    color: #000;
    /* Màu của icon */
    transition: background-color 0.3s ease, transform 0.3s ease;
}

/* Hiệu ứng hover */
.btn-icon:hover {
    background-color: #f0f0f0;
    /* Đổi màu nền khi hover */
    transform: scale(1.1);
    /* Phóng to nhẹ */
}

/* Căn chỉnh khoảng cách giữa các button */
.btn-group {
    display: flex;
    gap: 10px;
<<<<<<< HEAD
=======
    right: 10px;
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    /* Ẩn dropdown ban đầu */
    position: absolute;
    background-color: #f9f9f9;
    min-width: 150px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    padding: 10px 0;
    z-index: 1;
    border-radius: 5px;
}

.dropdown-content a {
    color: #333;
    text-decoration: none;
    display: block;
    padding: 10px 15px;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
    /* Hiển thị dropdown khi hover */
}

/* Button styles */
.btn-icon {
    border: none;
    background: transparent;
    cursor: pointer;
    padding: 10px;
    font-size: 18px;
}

.btn-icon i {
    color: #333;
}

.btn-icon:hover i {
    color: #007bff;
    /* Màu xanh khi hover */
}


.logo-text {
    font-family: 'Playfair Display', serif;
    /* Font chữ thanh lịch */
    font-size: 3.5rem;
    /* Kích thước chữ */
    color: #f6f6f4;
    /* Màu vàng gold */
    text-align: center;
    /* Căn giữa chữ */
    font-weight: bold;
    /* Làm đậm chữ */
    display: inline-block;
    letter-spacing: 5px;
    /* Khoảng cách giữa các ký tự */
}

.logo-text span {
    display: inline-block;
    /* Mỗi ký tự là khối riêng */
    animation: bounce 2s infinite;
    /* Hiệu ứng nhảy lặp vô tận */
    animation-delay: calc(var(--index) * 0.2s);
    /* Độ trễ dựa trên vị trí */
}

/* Hiệu ứng nhảy */
@keyframes bounce {

    0%,
    100% {
        transform: translateY(0);
        /* Ban đầu không di chuyển */
    }

    50% {
        transform: translateY(-20px);
        /* Nhảy lên */
    }
}
</style>
