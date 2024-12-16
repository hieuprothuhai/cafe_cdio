<template>
<<<<<<< HEAD
   <div class="row">
    <div class="col-lg-4 col-md-12">
=======
    <div class="row">
        <div class="col-lg-4 col-md-12">
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
            <div class="card mt-2">
                <div class="card-header mt-2">
                    <h5>Thêm Mới Sản Phẩm</h5>
                </div>
                <div class="card-body">
<<<<<<< HEAD
                    <label class="mb-2 mt-2">Chọn Loại Sản Phẩm</label>                
                    <select v-model="create.id_san_pham" class="form-control">
                        <option value="1">Bánh</option>
                        <option value="0">Nước uống</option>
=======
                    <label class="mb-2 mt-2">Chọn Loại Sản Phẩm</label>
                    <select v-model="create.id_san_pham" class="form-control">
                        <template v-for="(v, k) in list_loaisp" :key="k">
                            <option v-bind:value="v.id">{{ v.ten_loai }}</option>
                        </template>
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
                    </select>

                    <label class="mb-2 mt-2">Tên Sản Phẩm</label>
                    <input v-model="create.ten_san_pham" type="text" class="form-control" />
                    <label class="mb-2 mt-2">Mô Tả Ngắn</label>
                    <input v-model="create.mo_ta_ngan" type="text" class="form-control" />
                    <label class="mb-2 mt-2">Mô Tả Chi Tiết</label>
                    <input v-model="create.mo_ta_chi_tiet" type="text" class="form-control" />
                    <label class="mb-2 mt-2">Giá Bán</label>
                    <input v-model="create.gia_ban" type="text" class="form-control" />
                    <label class="mb-2 mt-2">Hình Ảnh</label>
                    <input v-model="create.hinh_anh" type="text" class="form-control" />
                    <label class="mb-2 mt-2">Tình Trạng</label>
                    <select v-model="create.tinh_trang" class="form-control">
                        <option value="1">Tạm Dừng</option>
                        <option value="0">Hiển Thị</option>
                    </select>
                </div>
                <div class="card-footer text-end">
                    <button v-on:click="themMoi()" class="btn btn-primary">
                        Thêm Mới
                    </button>
                </div>
            </div>
<<<<<<< HEAD
    </div>
    <div class="col-lg-8 col-md-12">
=======
        </div>
        <div class="col-lg-8 col-md-12">
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
            <div class="card mt-2">
                <div class="card-header mt-2">
                    <h5>Danh Sách Sản Phẩm</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center align-middle">
                                <tr>
                                    <th colspan="100%">
                                        <div class="input-group w-100">
<<<<<<< HEAD
                                            <input v-on:keyup.enter="timKiem()" v-model="search.ten_san_pham" type="text"
=======
                                            <input v-on:keyup.enter="timKiem()" v-model="search.ten_san_pham"
                                                type="text"
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
                                                class="form-control search-control border border-1 border-secondary"
                                                placeholder="Search..." />
                                            <span class="position-absolute top-50 search-show translate-middle-y"
                                                style="left: 15px"><i class="bx bx-search"></i></span>
                                            <button v-on:click="timKiem()" class="btn btn-outline-secondary"
                                                type="button">
                                                Tìm Kiếm
                                            </button>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-center align-middle">#</th>
                                    <th class="text-center align-middle">ID Sản Phẩm</th>
                                    <th class="text-center align-middle">Tên Sản Phẩm</th>
                                    <th class="text-center align-middle">Mô Tả Ngắn</th>
                                    <th class="text-center align-middle">Mô Tả Chi Tiết</th>
                                    <th class="text-center align-middle">Giá Bán</th>
                                    <th class="text-center align-middle">Hình Ảnh</th>
                                    <th class="text-center align-middle">Tình Trạng</th>
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
<<<<<<< HEAD
                            <template v-for="(v, k) in list" :key="k">
                                    <tr class="align-middle">
                                        <th class="text-center">{{ k+1 }}</th>
                                        <td class="text-center">
                                            <p v-if="v.id_san_pham ==1">Bánh</p>
                                            <p v-else>Nước Uống</p>
=======
                                <template v-for="(v, k) in list" :key="k">
                                    <tr class="align-middle">
                                        <th class="text-center">{{ k + 1 }}</th>
                                        <td class="text-center">
                                            {{ v.ten_loai }}
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
                                        </td>
                                        <td class="text-center align-middle">
                                            {{ v.ten_san_pham }}
                                        </td>
                                        <td>{{ v.mo_ta_ngan }}</td>
                                        <td>{{ v.mo_ta_chi_tiet }}</td>
                                        <td>{{ v.gia_ban }}</td>
                                        <td class="text-center"><img :src="v.hinh_anh" class="img-fluid" alt=""></td>
                                        <td class="text-center">
<<<<<<< HEAD
                                            <button v-on:click="doiTrangThai(v)" v-if="v.tinh_trang==1"
=======
                                            <button v-on:click="doiTrangThai(v)" v-if="v.tinh_trang == 1"
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
                                                class="btn btn-danger" style="width: 100px">
                                                Tạm Dừng
                                            </button>
                                            <button v-on:click="doiTrangThai(v)" v-else class="btn btn-success"
                                                style="width: 100px">
                                                Hiển Thị
                                            </button>
                                        </td>
                                        <td class="text-center">
<<<<<<< HEAD
                                            <button class="btn btn-primary me-1"
                                                style="width: 100px" data-bs-toggle="modal"
                                                data-bs-target="#updateModal" v-on:click="Object.assign(edit, v)">
                                                Cập Nhật
                                            </button>
                                            <button class="btn btn-danger"
                                                style="width: 100px" data-bs-toggle="modal"
=======
                                            <button class="btn btn-primary me-1" style="width: 100px"
                                                data-bs-toggle="modal" data-bs-target="#updateModal"
                                                v-on:click="Object.assign(edit, v)">
                                                Cập Nhật
                                            </button>
                                            <button class="btn btn-danger" style="width: 100px" data-bs-toggle="modal"
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
                                                data-bs-target="#deleteModal" v-on:click="Object.assign(del, v)">
                                                Xóa
                                            </button>
                                        </td>
                                    </tr>
<<<<<<< HEAD
                            </template>
=======
                                </template>
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
   </div>
   <!-- Modal xoá-->
   <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
    </div>
    <!-- Modal xoá-->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xóa Bài Học</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white">
                                <i class="bx bxs-message-square-x"></i>
                            </div>
                            <div class="ms-1">
                                <h6 class="mb-1 text-white">
                                    Bạn chắc chắc xóa <b>{{ del.ten_san_pham }}</b> này chứ !!!
                                </h6>
                                <div class="text-white text-nowrap">
                                    <b>LƯU Ý !!!</b> Điều này không thể khôi phục khi ấn xác nhận
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Đóng
                    </button>
                    <button v-on:click="xoa()" type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        Xóa
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal cập nhật-->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Cập Nhật Bài Học
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
<<<<<<< HEAD
                    <label class="mb-2 mt-2">Chọn Loại Sản Phẩm</label>                
                    <select v-model="create.id_san_pham" class="form-control">
                        <option value="1">Bánh</option>
                        <option value="0">Nước uống</option>
                    </select>

                    <label class="mb-2 mt-2">Tên Sản Phẩm</label>
                    <input v-model="edit.ten_san_pham" type="text" class="form-control" />
                    <label class="mb-2 mt-2">Mô Tả Ngắn</label>
                    <input v-model="edit.mo_ta_ngan" type="text" class="form-control" />
                    <label class="mb-2 mt-2">Mô Tả Chi Tiết</label>
                    <input v-model="edit.mo_ta_chi_tiet" type="text" class="form-control" />
                    <label class="mb-2 mt-2">Giá Bán</label>
                    <input v-model="edit.gia_ban" type="text" class="form-control" />
                    <label class="mb-2 mt-2">Hình Ảnh</label>
                    <input v-model="edit.hinh_anh" type="text" class="form-control" />
                    <label class="mb-2 mt-2">Tình Trạng</label>
                    <select v-model="edit.tinh_trang" class="form-control">
                        <option value="1">Tạm Dừng</option>
                        <option value="0">Hiển Thị</option>
                    </select>
                </div>
=======
                        <label class="mb-2 mt-2">Chọn Loại Sản Phẩm</label>
                        <select v-model="create.id_san_pham" class="form-control">
                            <option value="1">Bánh</option>
                            <option value="0">Nước uống</option>
                        </select>

                        <label class="mb-2 mt-2">Tên Sản Phẩm</label>
                        <input v-model="edit.ten_san_pham" type="text" class="form-control" />
                        <label class="mb-2 mt-2">Mô Tả Ngắn</label>
                        <input v-model="edit.mo_ta_ngan" type="text" class="form-control" />
                        <label class="mb-2 mt-2">Mô Tả Chi Tiết</label>
                        <input v-model="edit.mo_ta_chi_tiet" type="text" class="form-control" />
                        <label class="mb-2 mt-2">Giá Bán</label>
                        <input v-model="edit.gia_ban" type="text" class="form-control" />
                        <label class="mb-2 mt-2">Hình Ảnh</label>
                        <input v-model="edit.hinh_anh" type="text" class="form-control" />
                        <label class="mb-2 mt-2">Tình Trạng</label>
                        <select v-model="edit.tinh_trang" class="form-control">
                            <option value="1">Tạm Dừng</option>
                            <option value="0">Hiển Thị</option>
                        </select>
                    </div>
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Đóng
                    </button>
                    <button v-on:click="capNhat()" type="button" class="btn btn-primary" data-bs-dismiss="modal">
                        Cập Nhật
                    </button>
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
<<<<<<< HEAD
            list:[],
            search : {
=======
            list: [],
            list_loaisp: [],
            search: {
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
                ten_san_pham: "",
            },
            create: {
                id_san_pham: "",
                ten_san_pham: "",
                mo_ta_ngan: "",
                mo_ta_chi_tiet: "",
                gia_ban: "",
                hinh_anh: "",
                tinh_trang: "",
            },
            edit: {
            },
            del: {
            },
        }
    },
    mounted() {
        this.loadData();
<<<<<<< HEAD
=======
        this.loadDataloaisp();
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
    },
    methods: {
        loadData() {
            axios
                .get('http://127.0.0.1:8000/api/admin/san-pham/data')
                .then((res) => {
                    this.list = res.data.data;
                })
        },
<<<<<<< HEAD
=======
        loadDataloaisp() {
            axios
                .get('http://127.0.0.1:8000/api/admin/loai-sp/data')
                .then((res) => {
                    this.list_loaisp = res.data.data;
                })
        },
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
        timKiem() {
            axios
                .post("http://127.0.0.1:8000/api/admin/san-pham/tim-kiem", this.search)
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
        themMoi() {
            axios
                .post('http://127.0.0.1:8000/api/admin/san-pham/create', this.create)
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
                .post("http://127.0.0.1:8000/api/admin/san-pham/update", this.edit)
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
                });
        },
        xoa() {
            axios
                .post("http://127.0.0.1:8000/api/admin/san-pham/delete", this.del)
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
                });
        },
        doiTrangThai(v) {
            axios
                .post("http://127.0.0.1:8000/api/admin/san-pham/doi-trang-thai", v)
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
    },
}
</script>
<<<<<<< HEAD
<style>
    
</style>
=======
<style></style>
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
