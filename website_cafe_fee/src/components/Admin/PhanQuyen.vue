<template >
  <div class="row">
    <div class="col-lg-4 mt-4">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h4>Danh sách Quyền</h4>
          <button
            class="btn btn-info"
            data-bs-toggle="modal"
            data-bs-target="#themMoiModal"
          >
            Thêm Quyền
          </button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th class="text-center align-middle">#</th>
                  <th class="text-center align-middle">Tên Quyền</th>
                  <th class="text-center align-middle">Cấp Quyền</th>
                  <th class="text-center align-middle">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(value, k) in list" :key="k">
                  <th class="text-center align-middle">{{ k+1 }}</th>
                  <td class="text-center align-middle">{{ value.ten_quyen }}</td>
                  <td class="text-center align-middle">
                    <button 
                      type="button"
                      class="btn btn-primary px-5 radius-30"
                    >
                      Phân Quyền
                    </button>
                  </td>
                  <td class="text-center align-middle">
                    <button v-on:click="Object.assign(edit, value)"  class="btn btn-outline">
                      <i class="fa-solid fa-pen" style="color: #0fe3e6" data-bs-toggle="modal"
                      data-bs-target="#capNhatModal"></i>
                    </button>
                    <button v-on:click="Object.assign(del, value)"  class="btn btn-outline">
                      <i class="fa-solid fa-trash" style="color: #f10920" data-bs-toggle="modal" data-bs-target="#xoaModal"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mt-4">
      <div class="card">
        <div class="card-header">
          <h4>Danh sách chức năng</h4>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th class="text-center align-middle">#</th>
                  <th class="text-center align-middle">Tên Chức Năng</th>

                  <th class="text-center align-middle">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="text-center align-middle">1</th>
                  <td class="text-center align-middle">
                    Xem danh sách Nhân viên
                  </td>
                  <td class="text-center align-middle">
                    <button
                      type="button"
                      class="btn btn-primary px-5 radius-30"
                    >
                      Cấp quyền
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
  <!-- modal thêm -->
  <div
    class="modal fade"
    id="themMoiModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm Mới Quyền</h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="col-12 mb-2">
            <label class="form-label">Tên Quyền</label>
            <input v-model="create.ten_quyen"
              
              type="text"
              class="form-control"
            />
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Close
          </button>
          <button v-on:click="themMoi()" type="button" class="btn btn-primary" data-bs-dismiss="modal">Xác Nhận</button>
        </div>
      </div>
    </div>
  </div>
   <!-- modal cập nhật -->
   <div
    class="modal fade"
    id="capNhatModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cập nhật Quyền</h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="col-12 mb-2">
            <label class="form-label">Tên Quyền</label>
            <input v-model="edit.ten_quyen"
              
              type="text"
              class="form-control"
            />
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Close
          </button>
          <button v-on:click="capNhat()" type="button" class="btn btn-primary" data-bs-dismiss="modal">Xác Nhận</button>
        </div>
      </div>
    </div>
  </div>
  <!-- modal xoá -->
  <div class="modal fade" id="xoaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Xoá Quyền</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modal-body text-center p-4">
  <!-- Biểu tượng nổi bật -->
  <div 
    class="d-flex justify-content-center align-items-center mb-4" 
    style="
      width: 100px; 
      height: 100px; 
      background: linear-gradient(135deg, #ff6f6f, #ff3d3d); 
      border-radius: 50%; 
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
    <i class="bi bi-trash-fill text-white" style="font-size: 3rem;"></i>
  </div>

  <!-- Tiêu đề -->
  <h3 class="fw-bold text-dark mb-3">Xác nhận xóa</h3>

  <!-- Nội dung mô tả -->
  <p class="text-muted mb-4" style="font-size: 1.1rem; line-height: 1.6;">
    Bạn sắp xóa quyền 
    <span class="fw-bold text-danger">{{ del.ten_quyen }}</span>. 
    <br>Hành động này <strong>sẽ không thể hoàn tác</strong>. Hãy chắc chắn trước khi tiếp tục.
  </p>

  <!-- Dấu hiệu nhắc nhở -->
  <div 
    class="px-3 py-2 rounded bg-warning text-dark mb-3" 
    style="font-size: 0.9rem; display: inline-block;">
    <i class="bi bi-exclamation-circle-fill"></i> Thao tác này là vĩnh viễn
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button v-on:click="xoa()"  type="button" class="btn btn-primary" data-bs-dismiss="modal">Xác Nhận</button>
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
                
            },
            edit: {},
            del:{},
        }
    },
    mounted() {
        this.loadData();
    },
    methods:{
        loadData() {
            axios
                .get('http://127.0.0.1:8000/api/admin/phan-quyen/data')
                .then((res) => {
                    this.list = res.data.data;
                })
        },
        xoa() {
            axios
                .post('http://127.0.0.1:8000/api/admin/phan-quyen/delete', this.del)
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
        capNhat() {
            axios
                .post('http://127.0.0.1:8000/api/admin/phan-quyen/update', this.edit)
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
                .post('http://127.0.0.1:8000/api/admin/phan-quyen/create', this.create)
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
    }
};
</script>
<style >
/* Toàn bộ modal */
.modal-content {
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
  background: #fff;
  transition: transform 0.3s ease, opacity 0.3s ease;
  opacity: 0;
  transform: translateY(-30px);
}

.modal.fade.show .modal-content {
  opacity: 1;
  transform: translateY(0);
}

/* Header */
.modal-header {
  background: linear-gradient(135deg, #6db8db, #ff3d3d);
  border-bottom: none;
  color: #0deb40;
}

.modal-header h1 {
  font-size: 1.6rem;
  font-weight: bold;
  margin: 0;
}

.modal-header .btn-close {
  background: #ff6f6f;
  color: #fff;
  opacity: 0.8;
  transition: opacity 0.3s ease, transform 0.3s ease;
}

.modal-header .btn-close:hover {
  opacity: 1;
  transform: rotate(90deg);
}

/* Body modal */
.modal-body {
  font-family: 'Roboto', sans-serif;
  padding: 2rem;
  color: #555;
  animation: fadeIn 0.5s ease;
}

.modal-body h3 {
  font-size: 1.8rem;
  font-weight: 700;
  color: #333;
}

.modal-body .d-flex {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
}

.modal-body .d-flex:hover {
  transform: scale(1.1);
  box-shadow: 0 8px 20px rgba(255, 61, 61, 0.5);
}

/* Thông điệp nhắc nhở */
.modal-body .alert {
  animation: bounceIn 0.8s ease;
  background: rgba(255, 193, 7, 0.2);
  color: #856404;
  border: none;
  border-radius: 6px;
  font-weight: 500;
}

/* Nút trong modal */
.modal-footer {
  border-top: none;
  background: #f8f9fa;
}

.modal-footer .btn-secondary {
  background: #6c757d;
  border: none;
  color: #fff;
  border-radius: 6px;
  transition: all 0.3s ease;
}

.modal-footer .btn-secondary:hover {
  background: #5a6268;
}

.modal-footer .btn-primary {
  background: linear-gradient(135deg, #ff6f6f, #ff3d3d);
  border: none;
  color: #fff;
  border-radius: 6px;
  box-shadow: 0 4px 10px rgba(255, 61, 61, 0.4);
  transition: all 0.3s ease, transform 0.2s ease;
}

.modal-footer .btn-primary:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 14px rgba(255, 61, 61, 0.6);
}

/* Hiệu ứng động */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes bounceIn {
  0% {
    transform: scale(0.9);
  }
  50% {
    transform: scale(1.05);
  }
  100% {
    transform: scale(1);
  }
}

</style>