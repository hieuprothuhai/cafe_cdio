<template>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header mt-2">
                    <h4 class="text">Thêm Mới Loại</h4>
                </div>
                <div class="card-body">
                    <label class="form-label">Tên Loại</label>
                    <input v-model="create.ten_loai" type="text" class="form-control">
                    <label class="form-label">Hình Ảnh</label>
                    <input v-model="create.hinh_anh" type="text" class="form-control">
                    <label class="form-lable">Tình Trạng</label>
                    <select v-model="create.tinh_trang" class="form-control">
                        <option value="0">Tạm Dừng</option>
                        <option value="1">Hoạt Động</option>
                    </select>
                </div>
                <div class="card-footer text-end">
                    <button v-on:click="themMoi()" class="btn btn-info">Thêm Mới</button>
                </div>
            </div>

        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header mt-2">
                    <h4 class="text"> Danh Sách Loại</h4>
                </div>
                <div class="card-body">
                    <div class="card-body table-responsive">

                        <table class="table table-bordered table-hover ">
                            <thead>

                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Tên Loại</th>
                                    <th class="text-center">Hình Ảnh</th>
                                    <th class="text-center">Tình Trạng</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(v, k) in list" :key="k">
                                    <tr>
                                        <th class="align-middle text-center">{{ k + 1 }}</th>
                                        <td class="align-middle text-center">{{ v.ten_loai }}</td>
                                        <td class="align-middle text-center"><img :src="v.hinh_anh" style="height: 100px;" class="img-fluid" alt=""></td>
                                        <td class="align-middle text-center">
                                            <button v-on:click="doiTrangThai(v)" v-if="v.tinh_trang == 1" class="btn btn-success w-60">Hoạt
                                                Động</button>
                                            <button v-on:click="doiTrangThai(v)" v-else class="btn btn-warning w-60">Tạm Dừng</button>
                                        </td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-primary me-2" data-bs-toggle="modal"
                                                data-bs-target="#capnhatDM"  v-on:click="Object.assign(edit, v)">Cập nhật</button>
                                            <button class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delModal" v-on:click="Object.assign(del, v)">Xóa</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
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
                        <div class="card-body">
                    <label class="form-label">Tên Loại</label>
                    <input v-model="edit.ten_loai" type="text" class="form-control">
                    <label class="form-label">Hình Ảnh</label>
                    <input v-model="edit.hinh_anh" type="text" class="form-control">
                    <label class="form-lable">Tình Trạng</label>
                    <select v-model="edit.tinh_trang" class="form-control">
                        <option value="0">Tạm Dừng</option>
                        <option value="1">Hoạt Động</option>
                    </select>
                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            v-on:click="capNhat()">Cập
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
                        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Xóa Nhân Viên</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger " role="alert">
                            Bạn có chắc muốn xóa <b class="text-danger">{{ del.ten_loai
                                }}</b>
                            này
                            không?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            v-on:click="xoa()">Xác
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
                'ten_loai': '',
                'hinh_anh': '',
                'tinh_trang': '',
            },
            edit: {},
            del: {
                'ten_loai': '',
            },

        }
    },
    mounted() {
        this.loadData();
    },
    methods: {
        loadData() {
            axios
                .get('http://127.0.0.1:8000/api/admin/loai-sp/data')
                .then((res) => {
                    this.list = res.data.data;
                })
        },
        themMoi() {
            axios
                .post('http://127.0.0.1:8000/api/admin/loai-sp/create', this.create)
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
                .post('http://127.0.0.1:8000/api/admin/loai-sp/update', this.edit)
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
                .post('http://127.0.0.1:8000/api/admin/loai-sp/delete', this.del)
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
        doiTrangThai(v) {
            axios
                .post("http://127.0.0.1:8000/api/admin/loai/doi-trang-thai", v)
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
<style>


</style>

