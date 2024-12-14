<template>
    <header class="navbar">
        <div class="container">
            <nav>
                <ul class="nav-links">
                    <li><router-link to="/trang-chu">Trang Chủ</router-link></li>
                    <li class="dropdown">
                        <router-link to="/trang-chu">Menu</router-link>
                        <ul class="dropdown-menu">

                            <li><router-link to="/menu/coffee">Coffee</router-link></li>
                            <li><router-link to="/menu/tea">Tea</router-link></li>
                            <li><router-link to="/menu/snacks">Snacks</router-link></li>
                        </ul>
                    </li>
                    <li><router-link to="/hoa-don">Hóa Đơn</router-link></li>
                    <li><router-link to="/gio-hang">Giỏ Hàng</router-link></li>
                </ul>
            </nav>
        </div>
    </header>
</template>


<script>


export default {

}
</script>
<style scoped>
/* Dropdown styles */
.navbar .nav-links .dropdown {
    position: st;
}

.navbar .nav-links .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    display: none;
    background-color: #fff;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    list-style: none;
    padding: 10px 0;
    margin: 0;
    border-radius: 5px;
}

.navbar .nav-links .dropdown-menu li {
    margin: 0;
}

.navbar .nav-links .dropdown-menu a {
    color: #333;
    padding: 10px 20px;
    text-decoration: none;
    display: block;
    transition: all 0.3s;
}

.navbar .nav-links .dropdown-menu a:hover {
    background-color: #f1f1f1;
    color: #a45858;
}

.navbar .nav-links .dropdown:hover .dropdown-menu {
    display: block;
}

/* Navbar styles */
.navbar {
    background-color: #222b41;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 10;
}

.navbar .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.navbar .logo {
    display: flex;
    align-items: center;
    gap: 10px;
}

.navbar .logo img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.navbar .logo-text {
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
}

.navbar nav {
    flex-grow: 1;
}

.navbar .nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
    margin: 0;
    padding: 0;
}

.navbar .nav-links li {
    position: relative;
}

.navbar .nav-links a {
    text-decoration: none;
    color: white;
    font-size: 1rem;
    padding: 5px 10px;
    transition: all 0.3s;
}

.navbar .nav-links a:hover {
    background-color: #de3333;
    border-radius: 5px;
}
</style>
