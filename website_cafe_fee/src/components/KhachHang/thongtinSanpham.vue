<template>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img v-bind:src="san_pham.hinh_anh" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ san_pham.ten_san_pham }}</h5>
                    <p class="card-text">{{ san_pham.gia_ban }}</p>
                    <p class="card-text"><small class="text-body-secondary">{{ san_pham.mo_ta_chi_tiet }}</small></p>
                    <div class="mt-5">
                        <router-link to="/gio-hang"> <a href="#" class="btn btn-primary me-2">Buy Now</a></router-link>
                        <a href="#" class="btn btn-info"><i class="bx bxs-cart-alt"></i>Thêm vào giỏ hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
            san_pham: {},
        };
    },
    mounted() {
        this.setProduct();
        this.loadData();
    },
    methods: {
        setProduct() {
            this.san_pham.id = this.$route.params.id_cafe
        },
        loadData() {
            const id = this.san_pham.id; // Lấy ID sản phẩm từ dữ liệu
            if (!id) {
                console.error("ID sản phẩm không hợp lệ.");
                alert("ID sản phẩm không tồn tại. Vui lòng kiểm tra lại!");
                return;
            }

            axios
                .get(`http://127.0.0.1:8000/api/admin/san-pham/dataopen/${id}`)
                .then((res) => {
                    if (res.data && res.data.data) {
                        console.log("Dữ liệu sản phẩm:", res.data.data);
                        this.san_pham = res.data.data; // Gán dữ liệu sản phẩm
                    } else {
                        console.error("Không có dữ liệu trong phản hồi.");
                        alert("Không tìm thấy sản phẩm này.");
                    }
                })
                .catch((error) => {
                    if (error.response) {
                        const status = error.response.status;
                        if (status === 404) {
                            console.error("Lỗi 404: Không tìm thấy tài nguyên.");
                            alert("Sản phẩm không tồn tại hoặc đã bị xóa.");
                        } else {
                            console.error(`Lỗi ${status}:`, error.response.data);
                            alert(`Lỗi khi tải dữ liệu (Mã lỗi: ${status}).`);
                        }
                    } else if (error.request) {
                        console.error("Không thể kết nối đến server:", error.request);
                        alert("Không thể kết nối đến server. Vui lòng kiểm tra lại.");
                    } else {
                        console.error("Lỗi khác:", error.message);
                        alert("Đã xảy ra lỗi không xác định. Vui lòng thử lại.");
                    }
                });
        },
    },
};
</script>
<style></style>
