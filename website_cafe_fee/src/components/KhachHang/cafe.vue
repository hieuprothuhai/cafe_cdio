<template>
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
    content: " đ";
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
</style>
