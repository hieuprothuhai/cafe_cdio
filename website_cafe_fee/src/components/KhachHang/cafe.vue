<template>
<<<<<<< HEAD
    <section id="menu" class="menu">
        <h2>Cà Phê Việt Nam</h2>
        <div class="row">

            <template v-for="(v, k) in list" :key="k">
                <div class="col-4">
                    <div class="card">
                        <router-link to="/menu/detail-san-pham">
                            <router-link :to="'/menu/detail-san-pham/' + v.id">
                                <div class="card-body">
                                    <img :src="v.hinh_anh" alt="menu item">
                                </div>
                                <div class="card-footer">
                                    <h3>{{ v.ten_san_pham }}</h3>
                                    <p>{{ v.gia_ban }} VND</p>
                                </div>
                            </router-link>
                        </router-link>
                    </div>
                </div>
            </template>


            <template>

            </template>
        </div>
    </section>
=======
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item" role="presentation" v-on:click="loadDatasanpham(v)">
                            <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-selected="true">
                                <div class="d-flex align-items-center">
                                    <div class="tab-title text-danger">Tất cả</div>
                                </div>
                            </a>
                        </li>
                        <template v-for="(v, k) in list_loai_sp" :key="k">
                            <li class="nav-item" role="presentation" v-on:click="getsanphamtheoloai(v)">
                                <a class="nav-link" data-bs-toggle="tab" v-bind:href="'#primaryhome' + k" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon me-1 text-danger fa-2x">

                                        </div>
                                        <div class="tab-title text-info">{{ v.ten_loai }}</div>
                                    </div>
                                </a>
                            </li>
                        </template>
                        <div class="tab-content py-3">
                            <div class="row mt-2">
                                <template v-for="(v, k) in list_san_pham" :key="k">
                                    <div class="col-4 d-flex mt-2">
                                        <div class="card-sp ">
                                            <router-link to="/menu/detail-san-pham">
                                                <router-link :to="'/menu/detail-san-pham/' + v.id">
                                                    <div class="card-body">
                                                        <img :src="v.hinh_anh" alt=""
                                                            style="width: 350px;height: 250px;">
                                                    </div>
                                                    <div class="card-footer">
                                                        <h4>{{ v.ten_san_pham }}</h4>
                                                        <p>{{ formatToVND(v.gia_ban) }}</p>
                                                    </div>
                                                </router-link>
                                            </router-link>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
<<<<<<< HEAD
            list: [],
        };
    },
    mounted() {
        this.loadData();
    },
    methods: {
=======
            list_san_pham: [],
            list_loai_sp: [],
            list: [],
        }
    },
    mounted() {
        this.loadDatasanpham();
        this.loadDataloaisp();
        this.loadDatasanpham();
        this.loadData();
    },
    methods: {
        formatToVND(number) {
            number = parseInt(number);
            return number.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
        },
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
        loadData() {
            axios
                .get("http://127.0.0.1:8000/api/admin/san-pham/dataopen")
                .then((res) => {
                    this.list = res.data.data;
                });
        },
<<<<<<< HEAD
=======
        loadDatasanpham() {
            axios
                .get('http://127.0.0.1:8000/api/admin/san-pham/data')
                .then((res) => {
                    this.list_san_pham = res.data.data;
                })
        },
        loadDataloaisp() {
            axios
                .get('http://127.0.0.1:8000/api/admin/loai-sp/data')
                .then((res) => {
                    this.list_loai_sp = res.data.data;
                })
        },
        getsanphamtheoloai(v) {
            axios
                .post('http://127.0.0.1:8000/api/admin/dich-vu/getdata', v)
                .then((res) => {
                    this.list_san_pham = res.data.data;
                })
        }
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
    },
};
</script>
<style scoped>
.menu {
    padding: 20px;
    background-color: #f9f9f9;
    font-family: Arial, sans-serif;
    text-align: center;
}

.menu h2 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
    text-transform: uppercase;
    font-weight: bold;
}

.menu-items {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    margin: 0 auto;
    max-width: 1200px;
}

.menu-item {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.menu-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.card {
    text-align: center;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    padding: 15px;
<<<<<<< HEAD
=======

>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
}

.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
    transition: transform 0.3s ease;
}

.menu-item:hover img {
    transform: scale(1.1);
}

.card h3 {
    font-size: 1.2rem;
    color: #333;
    margin: 10px 0;
}

.card p {
    font-size: 1rem;
    color: #007bff;
    font-weight: bold;
    margin: 0;
}

.card p::after {
<<<<<<< HEAD
    content: " đ";
=======
    content: " ";
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
    font-size: 0.9rem;
    font-weight: normal;
    color: #555;
}

.card p:hover {
    color: #0056b3;
}

@media (max-width: 768px) {
    .menu-items {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }

    .card img {
        height: 150px;
    }
}
<<<<<<< HEAD
=======

.card-sp {
    background-color: #fff;
    /* Nền trắng */
    border-radius: 10px;
    /* Góc bo tròn */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    /* Bóng */
    overflow: hidden;
    /* Ẩn các phần dư */
    transition: transform 0.3s, box-shadow 0.3s;
    /* Hiệu ứng chuyển động */
}

.card-sp:hover {
    transform: translateY(-5px);
    /* Dịch chuyển lên */
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    /* Tăng độ bóng */
}

.card-sp img {
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
    /* Cắt ảnh cho vừa khung */
    border-bottom: 1px solid #f0f0f0;
}

.card-body {
    padding: 15px;
    text-align: center;
    /* Căn giữa nội dung */
}

.card-footer {
    padding: 10px 15px;
    background-color: #f9f9f9;
    text-align: center;
    border-top: 1px solid #eee;
}

.card-footer h4 {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
    margin: 0 0 5px;
}

.card-footer p {
    font-size: 1rem;
    color: #777;
    margin: 0;
}

/* Responsive */
@media (max-width: 768px) {
    .card-sp {
        margin-bottom: 20px;
    }

    .card-sp img {
        height: 200px;
        /* Điều chỉnh chiều cao ảnh cho thiết bị nhỏ */
    }
}
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
</style>
