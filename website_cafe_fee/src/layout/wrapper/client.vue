<template>
    <div class="header-wrapper">
        <TopClientcf></TopClientcf>

    </div>
    <div class="menu-wrapper">
        <MenuClientcf></MenuClientcf>
    </div>
    <div class="page-wrapper mt-5">
        <div>
            <router-view></router-view>
        </div>
    </div>
    <div class="overlay toggle-icon"></div>
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <FooterClientcf></FooterClientcf>
</template>
<script>
import TopClientcf from "../components/TopClientcf.vue";
import FooterClientcf from "../components/FooterClientcf.vue";
import MenuClientcf from "../components/MenuClientcf.vue";
import "../../assets/assets_rocker/js/bootstrap.bundle.min.js";
import "../../assets/assets_rocker/js/jquery.min.js";
import "../../assets/assets_rocker/plugins/simplebar/js/simplebar.min.js";
import "../../assets/assets_rocker/plugins/metismenu/js/metisMenu.min.js";
import "../../assets/assets_rocker/plugins/perfect-scrollbar/js/perfect-scrollbar.js";
import "../../assets/assets_rocker/js/index.js";
import "../../assets/assets_rocker/js/app.js";
import "../../assets/assets_rocker/js/pace.min.js";
export default {
    name: "app",
    components: {
        TopClientcf, MenuClientcf, FooterClientcf
    }
}
</script>
<style>
.menu-wrapper {
    position: sticky;
    top: 0;
    z-index: 10;

}

@import "../../assets/assets_rocker/plugins/simplebar/css/simplebar.css";
@import "../../assets/assets_rocker/plugins/perfect-scrollbar/css/perfect-scrollbar.css";
@import "../../assets/assets_rocker/plugins/metismenu/css/metisMenu.min.css";
@import "../../assets/assets_rocker/css/pace.min.css";
@import "../../assets/assets_rocker/css/bootstrap.min.css";
@import "../../assets/assets_rocker/css/bootstrap-extended.css";
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap");
@import "../../assets/assets_rocker/css/app.css";
@import "../../assets/assets_rocker/css/icons.css";
@import "../../assets/assets_rocker/css/dark-theme.css";
@import "../../assets/assets_rocker/css/semi-dark.css";
@import "../../assets/assets_rocker/css/header-colors.css";
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css");
</style>
