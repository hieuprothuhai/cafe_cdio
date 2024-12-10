<template>
    <div class="row">
        <div class="col-4">
            <div class="card mt-2">
                <div class="card-header">
                    <h3>Kho</h3>
                </div>
                <div class="card-body">
                    <label>Nhà Cung Cấp</label>
                    <input v-model="create.nha_cung_cap" class="form-control mb-2" type="text">
                    <label>Nhân Viên</label>
                    <input v-model="create.nhan_vien" class="form-control mb-2" type="text">
                    <label>Mã Nhập Kho</label>
                    <input v-model="create.ma_nhap_kho" class="form-control mb-2" type="text">
                    <label>Tổng Tiền</label>
                    <input v-model="create.tong_tien" class="form-control mb-2" type="text">
                    <label>Ghi Chú</label>
                    <input v-model="create.ghi_chu" class="form-control mb-2" type="text">
                    <label>Tình Trạng</label>
                    <select v-model="create.tinh_trang" class="form-control mb-2">
                        <option value="1">Hoạt Động</option>
                        <option value="0">Tạm Dừng</option>
                    </select>
                </div>
                <div class="card-footer text-end">
                    <button v-on:click="themMoi()" class="btn btn-primary">Thêm Mới</button>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card mt-2">
                <div class="card-header">
                    <h5>Danh Sách Nhà Cung Cấp</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center align-middle">
                                <tr>
                                    <th colspan="100%">
                                        <div class="input-group mt-3 w-100">
                                            <input v-on:keyup.enter="timKiem()" v-model="search.noi_dung" type="text"
                                                class="form-control search-control border border-1 border-secondary"
                                                placeholder="Search...">
                                            <span class="position-absolute top-50 search-show translate-middle-y"
                                                style="left: 15px;"><i class="bx bx-search"></i></span>
                                            <button v-on:click="timKiem()" class="btn btn-outline-secondary"
                                                type="button">Tìm
                                                Kiếm</button>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-center align-middle">#</th>
                                    <th class="text-center align-middle">Nhà Cung Cấp</th>
                                    <th class="text-center align-middle">Nhân Viên</th>
                                    <th class="text-center align-middle">Mã Nhập Kho</th>
                                    <th class="text-center align-middle">Tổng Tiền</th>
                                    <th class="text-center align-middle">Ghi Chú</th>
                                    <th class="text-center align-middle">Tình Trạng</th>
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(value, k) in list" :key="k">
                                    <td class="text-center align-middle">{{ k + 1 }}</td>
                                    <td class="text-center align-middle">{{ value.nha_cung_cap }}</td>
                                    <td class="text-center align-middle">{{ value.nhan_vien }}</td>
                                    <td class="text-center align-middle">{{ value.ma_nhap_kho }}</td>
                                    <td class="text-center align-middle">{{ value.tong_tien }}</td>
                                    <td class="text-center align-middle">{{ value.ghi_chu }}</td>
                                    <td class="text-center align-middle">
                                        <button v-if="value.tinh_trang == 1" class="btn btn-success me-2">Hoạt
                                            Động</button>
                                        <button v-else class="btn btn-warning">Tạm Dừng</button>
                                    </td>
                                    <td class="text-center align-middle">
                                        <button v-on:click="Object.assign(edit, value)" type="button"
                                            class="btn btn-primary me-2" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop1">
                                            Cập Nhật
                                        </button>
                                        <button v-on:click="Object.assign(del, value)" type="button"
                                            class="btn btn-danger me-2" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Xóa
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal cập nhật -->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Nhà Cung Cấp</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label class="form-lable">Nhà Cung Cấp</label>
                        <input v-model="edit.nha_cung_cap" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Nhân Viên</label>
                        <input v-model="edit.nhan_vien" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Mã Nhập Kho</label>
                        <input v-model="edit.ma_nhap_kho" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Tổng Tiền</label>
                        <input v-model="edit.tong_tien" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Ghi Chú</label>
                        <input v-model="edit.ghi_chu" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Tình Trạng</label>
                        <select v-model="edit.tinh_trang" class="form-control">
                            <option value="0">Tạm Dừng</option>
                            <option value="1">Hoạt Động</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button v-on:click="capNhat()" type="button" class="btn btn-primary" data-bs-dismiss="modal">Xác
                        Nhận</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal Xóa -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Xóa Nhà Cung Cấp</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        Bạn có chắc muốn xóa Kho <b class="text-danger">{{ del.nha_cung_cap
                            }}</b>
                        này
                        không?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Xóa</button>
                    <button v-on:click="xoa()" type="button" class="btn btn-danger" data-bs-dismiss="modal">Xác
                        Nhận</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            list: [],
            create: {
                'nha_cung_cap': '',
                'nhan_vien': '',
                'ma_nhap_kho': '',
                'tong_tien': '',
                'ghi_chu': '',
                'tinh_trang': '',
            },
            edit: {},
            del: {
                'nha_cung_cap': '',
            },
            search: {},
        }
    },
    mounted() {
        this.loadData();
    },
    methods: {
        loadData() {
            axios
                .get('http://127.0.0.1:8000/api/admin/kho/data')
                .then((res) => {
                    this.list = res.data.data;
                })
        },
        themMoi() {
            axios
                .post('http://127.0.0.1:8000/api/admin/kho/create', this.create)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.loadData();
                    }
                })
                .catch((res) => {
                    const list = Object.values(res.response.data.errors);
                    list.forEach((v, i) => {
                        this.$toast.error(v[0]);
                    });
                })
        },
        capNhat() {
            axios
                .post('http://127.0.0.1:8000/api/admin/kho/update', this.edit)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.loadData();
                    };
                })
                .catch((res) => {
                    const list = Object.values(res.response.data.errors);
                    list.forEach((v, i) => {
                        this.$toast.error(v[0]);
                    });
                })

        },
        xoa() {
            axios
                .post('http://127.0.0.1:8000/api/admin/kho/delete', this.del)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.loadData();
                    };
                })
                .catch((res) => {
                    const list = Object.values(res.response.data.errors);
                    list.forEach((v, i) => {
                        this.$toast.error(v[0]);
                    });
                })
        },
        timKiem() {
            axios
                .post("http://127.0.0.1:8000/api/admin/kho/tim-kiem", this.search)
                .then((res) => {
                    this.list = res.data.data
                })
                .catch((res) => {
                    const list = Object.values(res.response.data.errors);
                    list.forEach((v, i) => {
                        this.$toast.error(v[0]);
                    });
                })
        },
    },
}
</script>
<style></style>