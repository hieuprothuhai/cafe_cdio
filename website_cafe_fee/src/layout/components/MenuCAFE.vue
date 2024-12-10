<template>
	<div class="nav-container primary-menu ">
		<div class="mobile-topbar-header">
			<div>
				<img src="" class="logo-icon" alt="logo icon">
			</div>
			<div>
				<h4 class="logo-text">Rukada</h4>
			</div>
			<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
			</div>
		</div>
		<nav class="navbar navbar-expand-xl w-100">
			<ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
				<li class="nav-item">
					<router-link to="/trang-chu">
						<a class="nav-link" href="/admin/nhan-vien">
							<div class="parent-icon"><i class='bx bx-home-circle'></i>
							</div>
							<div class="menu-title">Trang Chủ</div>
						</a>
					</router-link>
				</li>
				<li class="nav-item">
					<router-link to="/admin/nhan-vien">
						<a class="nav-link" href="/admin/nhan-vien">
							<div class="parent-icon"><i class="fa-solid fa-user"></i>
							</div>
							<div class="menu-title">Nhân Viên</div>
						</a>
					</router-link>
				</li>
				<li class="nav-item">
					<router-link to="/admin/khach-hang">
						<a class="nav-link" href="/admin/khach-hang">
							<div class="parent-icon"><i class="fa-solid fa-user"></i>
							</div>
							<div class="menu-title">Khách Hàng</div>
						</a>
					</router-link>
				</li>
				<li class="nav-item">
					<router-link to="/admin/loai-sp">
						<a class="nav-link" href="/admin/loai-sp">
							<div class="parent-icon"><i class="fa-solid fa-mug-hot"></i>
							</div>
							<div class="menu-title">Loại Sản Phẩm</div>
						</a>
					</router-link>
				</li>
				<li class="nav-item">
					<router-link to="/admin/san-pham">
						<a class="nav-link" href="/admin/san-pham">
							<div class="parent-icon"><i class="fa-solid fa-mug-hot"></i>
							</div>
							<div class="menu-title">Sản Phẩm</div>
						</a>
					</router-link>
				</li>
				<li class="nav-item">
					<router-link to="/admin/nha-cung-cap">
						<a class="nav-link" href="/admin/nha-cung-cap">
							<div class="parent-icon"><i class="fa-solid fa-house"></i>
							</div>
							<div class="menu-title">Nhà Cung Cấp</div>
						</a>
					</router-link>
				</li>
				<li class="nav-item">
					<router-link to="/admin/chitiet-nhapkho">
						<a class="nav-link" href="/admin/chitiet-nhapkho">
							<div class="parent-icon"><i class="fa-solid fa-house-chimney-window"></i>
							</div>
							<div class="menu-title">Chi Tiết Nhập Kho</div>
						</a>
					</router-link>
				</li>
				<li class="nav-item">
					<router-link to="/admin/kho">
						<a class="nav-link" href="/admin/kho">
							<div class="parent-icon"><i class="fa-solid fa-igloo"></i>
							</div>
							<div class="menu-title">Kho</div>
						</a>
					</router-link>
				</li>
				<li class="nav-item">
					<router-link to="/admin/quyen">
						<a class="nav-link" href="/admin/quyen">
							<div class="parent-icon"><i class="fa-solid fa-igloo"></i>
							</div>
							<div class="menu-title">Phân Quyền</div>
						</a>
					</router-link>
				</li>
			</ul>
		</nav>
	</div>
</template>
<script>
export default {

}
</script>
<style></style>
