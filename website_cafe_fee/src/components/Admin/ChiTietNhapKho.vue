<template>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Chi Tiết Nhập Kho</h3>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Thêm Mới
                    </button>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover ">
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
                                <th class="text-center">#</th>
                                <th class="text-center">Nhập Kho</th>
                                <th class="text-center">Sản Phẩm</th>
                                <th class="text-center">Số Lượng</th>
                                <th class="text-center">Loại</th>
                                <th class="text-center">Đơn Giá</th>
                                <th class="text-center">Thanh Toán</th>
                                <th class="text-center">Ghi Chú</th>
                                <th class="text-center">Tình Trạng</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(v, k) in list" :key="k">
                                <th class="align-middle text-center">{{ k + 1 }}</th>
                                <td class="align-middle text-center">{{ v.nhap_kho }}</td>
                                <td class="align-middle text-center">{{ v.san_pham }}</td>
                                <td class="align-middle text-center">{{ v.so_luong }}</td>
                                <td class="align-middle text-center">{{ v.loai }}</td>
                                <td class="align-middle text-center">{{ v.don_gia }}</td>
                                <td class="align-middle text-center">{{ v.thanh_toan }}</td>
                                <td class="align-middle text-center">{{ v.ghi_chu }}</td>
                                <td class="align-middle text-center">
<<<<<<< HEAD
                                    <button v-if="v.tinh_trang == 1" class="btn btn-success me-2">Hoạt Động</button>
                                    <button v-else class="btn btn-warning">Tạm Dừng</button>
=======
                                    <button v-on:click="doiTrangThai(v)" v-if="v.tinh_trang ==1"
                                                class="btn btn-success" style="width: 100px">
                                                Hoạt Động
                                            </button>
                                            <button v-on:click="doiTrangThai(v)" v-else class="btn btn-warning"
                                                style="width: 100px">
                                                Tạm Dừng
                                            </button>
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
                                </td>
                                <td class="align-middle text-center">
                                    <button v-on:click="Object.assign(edit, v)" class="btn btn-primary me-2"
                                        data-bs-toggle="modal" data-bs-target="#capnhatDM">Cập
                                        nhật</button>
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delModal"
                                        v-on:click="Object.assign(del, v)">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- modal thêm -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm Mới Kho</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label class="form-lable">Nhập Kho</label>
                        <input v-model="create.nhap_kho" type="text" class="form-control">
                        <label class="form-lable">Sản Phẩm</label>
                        <input v-model="create.san_pham" type="text" class="form-control">
                        <label class="form-lable">Số Lượng</label>
                        <input v-model="create.so_luong" type="text" class="form-control">
                        <label class="form-lable">Loại</label>
                        <input v-model="create.loai" type="text" class="form-control">
                        <label class="form-lable">Đơn Gía</label>
                        <input v-model="create.don_gia" type="text" class="form-control">
                        <label class="form-lable">Thanh Toán</label>
                        <input v-model="create.thanh_toan" type="text" class="form-control">
                        <label class="form-lable">Ghi Chú</label>
                        <input v-model="create.ghi_chu" type="text" class="form-control">
                        <label class="form-lable">Tình Trạng</label>
                        <select v-model="create.tinh_trang" class="form-control">
                            <option value="0">Tạm Dừng</option>
                            <option value="1">Hoạt Động hiêu ngu</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button v-on:click="themMoi()" class="btn btn-primary" data-bs-dismiss="modal">Thêm
                        Mới</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal cập nhật -->
    <div class="modal fade" id="capnhatDM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cập nhật Nhân Viên</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label class="form-lable">Nhập Kho</label>
                        <input v-model="edit.nhap_kho" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Sản Phẩm</label>
                        <input v-model="edit.san_pham" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Số Lượng</label>
                        <input v-model="edit.so_luong" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Loại</label>
                        <input v-model="edit.loai" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Đơn Gía</label>
                        <input v-model="edit.don_gia" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-lable">Thanh Toán</label>
                        <input v-model="edit.thanh_toan" type="text" class="form-control">
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
                    <button v-on:click="capNhat()" type="button" class="btn btn-primary" data-bs-dismiss="modal">Cập
                        nhật</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal xóa -->
    <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa Kho</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        Bạn có chắc muốn xóa Kho <b class="text-danger">{{ del.nhap_kho
                            }}</b>
                        này
                        không?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" v-on:click="xoa()">Xác
                        nhận</button>
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
                'nhap_kho': '',
                'san_pham': '',
                'so_luong': '',
                'loai': '',
                'don_gia': '',
                'thanh_toan': '',
                'ghi_chu': '',
                'tinh_trang': '',
            },
            edit: {},
            del: {
                'nhap_kho': '',
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
                .get('http://127.0.0.1:8000/api/admin/chitiet-nhapkho/data')
                .then((res) => {
                    this.list = res.data.data;
                })
        },
        timKiem() {
            axios
                .post("http://127.0.0.1:8000/api/admin/chitiet-nhapkho/tim-kiem", this.search)
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

        capNhat() {
            axios
                .post('http://127.0.0.1:8000/api/admin/chitiet-nhapkho/update', this.edit)
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
                .post('http://127.0.0.1:8000/api/admin/chitiet-nhapkho/delete', this.del)
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
        themMoi() {
            axios
                .post('http://127.0.0.1:8000/api/admin/chitiet-nhapkho/create', this.create)
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
<<<<<<< HEAD
=======
        doiTrangThai(v) {
            axios
                .post("http://127.0.0.1:8000/api/admin/chitiet-nhapkho/doi-trang-thai", v)
                .then((res) => {
                    if (res.data.status) {
                        this.loadData();
                        this.$toast.success(res.data.message);
                    }
                })
                .catch((res) => {
                    const list = Object.values(res.response.data.errors);
                    list.forEach((v, i) => {
                        this.$toast.error(v[0]);
                    });
                })
        },
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
    },
}
</script>
<style></style>
