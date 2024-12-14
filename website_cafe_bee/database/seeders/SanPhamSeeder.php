<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('san_phams')->delete();

        DB::table('san_phams')->truncate();

        DB::table('san_phams')->insert([
            //bánh
            [
                'id_san_pham'  =>  '1',
                'ten_san_pham'  =>  'Mochi Kem Trà Sữa Trân Châu',
                'mo_ta_ngan'      =>  'Bánh mochi dẻo thơm với kem trà sữa mát lạnh và trân châu giòn dai.',
                'mo_ta_chi_tiet'  =>  'Ngoài dẻo thơm, trong mát lạnh với kem vị trà sữa. Một cắn là say đắm, hai cắn là ngất ngây với trân châu giòn dai. *Bánh cần được bảo quản mát và dùng ngon nhất trong vòng 2 giờ sau khi nhận hàng.',
                'gia_ban'  =>  '19000',
                'hinh_anh'  =>  'https://product.hstatic.net/1000075078/product/1732089473_mochi-trasua_14d0e521c07141b2912f56fa6de9306a_large.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '1',
                'ten_san_pham'  =>  'Mousse Tiramisu',
                'mo_ta_ngan'      =>  'Bánh mousse mềm mịn với hương vị tiramisu cổ điển.',
                'mo_ta_chi_tiet'  =>  'Bánh mousse kết hợp giữa lớp kem phô mai mịn màng và hương vị cà phê đậm đà, hoàn hảo cho những ai yêu thích tiramisu. *Bảo quản trong tủ lạnh và dùng ngon nhất trong vòng 3 giờ.',
                'gia_ban'  =>  '45000',
                'hinh_anh'  =>  'https://product.hstatic.net/1000075078/product/1638170137_tiramisu_25db4b4c4c434f2fb9c61821d5f1ba77_large.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '1',
                'ten_san_pham'  =>  'Mochi Kem Chocolate',
                'mo_ta_ngan'      =>  'Bánh mochi mềm dẻo kết hợp với kem chocolate đậm vị.',
                'mo_ta_chi_tiet'  =>  'Lớp vỏ mochi mềm mại bao bọc kem chocolate tan chảy, mang đến trải nghiệm ngọt ngào và hấp dẫn. *Bảo quản mát và dùng ngay sau khi nhận.',
                'gia_ban'  =>  '20000',
                'hinh_anh'  =>  'https://product.hstatic.net/1000075078/product/1655348107_mochi-choco_d5e2e25c061c462e8f9fefcbe7e006e1_large.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '1',
                'ten_san_pham'  =>  'Butter Croissant',
                'mo_ta_ngan'      =>  'Bánh croissant thơm lừng bơ, giòn ngoài mềm trong.',
                'mo_ta_chi_tiet'  =>  'Bánh croissant được làm từ lớp bột ngàn lớp kết hợp bơ tươi, tạo ra kết cấu giòn tan bên ngoài và mềm mịn bên trong. *Ngon hơn khi dùng kèm cà phê hoặc trà.',
                'gia_ban'  =>  '35000',
                'hinh_anh'  =>  'https://product.hstatic.net/1000075078/product/1698736606_butter-croissant_a7a3aeeb3f924250837a33f3bf5db674_large.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '1',
                'ten_san_pham'  =>  'Choco Croffle',
                'mo_ta_ngan'  =>  'Chocolate ',
                'mo_ta_chi_tiet'  =>  'Chocolate từ những thanh socola nguyên chất',
                'gia_ban'  =>  '39000',
                'hinh_anh'  =>  'https://product.hstatic.net/1000075078/product/1712139673_choco_ec8ed31a5b934af78c362be5a6252626.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '1',
                'ten_san_pham'  =>  'Mousse Gấu Chocolate',
                'mo_ta_ngan'  =>  'Mousse Gấu Chocolate ',
                'mo_ta_chi_tiet'  =>  'Mousse Gấu Chocolate lmà từ socola',
                'gia_ban'  =>  '39000',
                'hinh_anh'  =>  'https://product.hstatic.net/1000075078/product/1638170066_gau_b7b0360f6b9a4e6484b0db6329c813d0.jpg',
                'tinh_trang'  =>  '0',
            ],
            //nước
            [
                'id_san_pham'  =>  '2',
                'ten_san_pham'  =>  'C2 Trà Xanh',
                'mo_ta_ngan'  =>  'Trà xanh hương vị tự nhiên',
                'mo_ta_chi_tiet'  =>  'C2 Trà Xanh chiết xuất từ trà tự nhiên, mang lại cảm giác sảng khoái.',
                'gia_ban'  =>  '10000',
                'hinh_anh'  =>  'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTm13ilQieoMgnO9m42H_-8k1BA5DF3KFJEqA&s',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '2',
                'ten_san_pham'  =>  'Sting Dâu',
                'mo_ta_ngan'  =>  'Nước tăng lực hương dâu',
                'mo_ta_chi_tiet'  =>  'Sting Dâu cung cấp năng lượng nhanh chóng với vị ngọt đặc trưng.',
                'gia_ban'  =>  '12000',
                'hinh_anh'  =>  'https://navafood.eu/wp-content/uploads/2023/11/sting-dau.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '2',
                'ten_san_pham'  =>  '7Up',
                'mo_ta_ngan'  =>  'Nước ngọt vị chanh',
                'mo_ta_chi_tiet'  =>  '7Up, thức uống không chứa caffein, mang lại cảm giác tươi mới.',
                'gia_ban'  =>  '9000',
                'hinh_anh'  =>  'https://images.squarespace-cdn.com/content/v1/5fa5ec79661ee904d2973ca0/1705084995485-P7XI0UBOQZJ4RGKAURLU/7UP+can.jpeg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '2',
                'ten_san_pham'  =>  'Pepsi',
                'mo_ta_ngan'  =>  'Nước ngọt có ga',
                'mo_ta_chi_tiet'  =>  'Pepsi mang lại vị ngọt đậm đà, là lựa chọn tuyệt vời cho mọi bữa tiệc.',
                'gia_ban'  =>  '11000',
                'hinh_anh'  =>  'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx1MryLcEtmF5G8NxSvgdfqeRVPuiCrL_tyg&s',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '2',
                'ten_san_pham'  =>  'Coca-Cola',
                'mo_ta_ngan'  =>  'Nước ngọt biểu tượng',
                'mo_ta_chi_tiet'  =>  'Coca-Cola với hương vị đặc trưng, luôn là sự lựa chọn hàng đầu.',
                'gia_ban'  =>  '11000',
                'hinh_anh'  =>  'https://cdn.tgdd.vn/Files/2017/11/14/1041443/moi-ngay-uong-1-lon-coca-cola-co-sao-khong-nen-uong-bao-nhieu-la-tot-202112300854488863.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '2',
                'ten_san_pham'  =>  'Aquafina',
                'mo_ta_ngan'  =>  'Nước tinh khiết',
                'mo_ta_chi_tiet'  =>  'Aquafina, nước tinh khiết chất lượng cao, tốt cho sức khỏe.',
                'gia_ban'  =>  '5000',
                'hinh_anh'  =>  'https://tiensinuoc.com/wp-content/uploads/2021/10/aquafina-bia.png',
                'tinh_trang'  =>  '0',
            ],
            //trà sữa
            [
                'id_san_pham'  =>  '3',
                'ten_san_pham'  =>  'Trà Sữa Trân Châu Đường Đen',
                'mo_ta_ngan'  =>  'Trà sữa với trân châu đường đen thơm ngon',
                'mo_ta_chi_tiet'  =>  'Trà sữa kết hợp cùng trân châu đường đen được nấu thủ công, mang lại vị ngọt thanh.',
                'gia_ban'  =>  '45000',
                'hinh_anh'  =>  'https://feelingteaonline.com/wp-content/uploads/2020/08/CHOCOLATE.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '3',
                'ten_san_pham'  =>  'Trà Sữa Matcha',
                'mo_ta_ngan'  =>  'Trà sữa vị matcha thơm béo',
                'mo_ta_chi_tiet'  =>  'Matcha Nhật Bản kết hợp với sữa tươi, tạo ra hương vị ngọt ngào và thanh mát.',
                'gia_ban'  =>  '50000',
                'hinh_anh'  =>  'https://trasuadodo.vn/wp-content/uploads/2022/09/cach-pha-tra-sua-matcha-min-1.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '3',
                'ten_san_pham'  =>  'Trà Sữa Thái Xanh',
                'mo_ta_ngan'  =>  'Trà sữa Thái xanh mát lạnh',
                'mo_ta_chi_tiet'  =>  'Trà Thái xanh đặc trưng pha cùng sữa, tạo nên hương vị ngọt nhẹ và tươi mới.',
                'gia_ban'  =>  '40000',
                'hinh_anh'  =>  'https://assets.aemi.vn/images_resized/2024/8/11/1723384977627-405800',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '3',
                'ten_san_pham'  =>  'Trà Sữa Socola',
                'mo_ta_ngan'  =>  'Trà sữa vị socola ngọt ngào',
                'mo_ta_chi_tiet'  =>  'Hòa quyện giữa trà sữa truyền thống và vị socola đậm đà, phù hợp cho người yêu đồ ngọt.',
                'gia_ban'  =>  '47000',
                'hinh_anh'  =>  'https://vuaxedaybanhang.vn/wp-content/uploads/2022/01/tra-sua-socola.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '3',
                'ten_san_pham'  =>  'Trà Sữa Khoai Môn',
                'mo_ta_ngan'  =>  'Trà sữa với vị khoai môn thơm bùi',
                'mo_ta_chi_tiet'  =>  'Vị khoai môn béo bùi hòa quyện trong ly trà sữa, mang lại trải nghiệm khó quên.',
                'gia_ban'  =>  '45000',
                'hinh_anh'  =>  'https://viettuantea.vn/wp-content/uploads/2020/11/cong-thuc-pha-tra-sua-khoai-mon.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '3',
                'ten_san_pham'  =>  'Trà Sữa Hồng Trà',
                'mo_ta_ngan'  =>  'Trà sữa hồng trà truyền thống',
                'mo_ta_chi_tiet'  =>  'Hương vị truyền thống của hồng trà kết hợp với sữa, tạo nên ly trà sữa thơm ngon.',
                'gia_ban'  =>  '42000',
                'hinh_anh'  =>  'https://olongha.com/wp-content/uploads/2021/12/cach-pha-tra-sua-truyen-thong-123.png',
                'tinh_trang'  =>  '0',
            ],
            //cafe
            [
                'id_san_pham'  =>  '4',
                'ten_san_pham'  =>  'Cà Phê Đen Đá',
                'mo_ta_ngan'  =>  'Cà phê đen truyền thống, thơm ngon',
                'mo_ta_chi_tiet'  =>  'Cà phê đen được pha chế từ hạt cà phê nguyên chất, mang lại hương vị đậm đà và sảng khoái.',
                'gia_ban'  =>  '25000',
                'hinh_anh'  =>  'https://thenoodlehouses.com/wp-content/uploads/2022/09/cafedenda-1.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '4',
                'ten_san_pham'  =>  'Cà Phê Sữa Đá',
                'mo_ta_ngan'  =>  'Cà phê sữa đá ngọt ngào, đậm đà',
                'mo_ta_chi_tiet'  =>  'Hòa quyện giữa cà phê nguyên chất và sữa đặc, mang lại hương vị ngọt ngào, hấp dẫn.',
                'gia_ban'  =>  '30000',
                'hinh_anh'  =>  'https://caphe4.flatsome.vn/wp-content/uploads/2023/11/CA-PHE-SUA-DA-SAI-GON.png',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '4',
                'ten_san_pham'  =>  'Cà Phê Espresso',
                'mo_ta_ngan'  =>  'Espresso đậm đặc từ hạt cà phê cao cấp',
                'mo_ta_chi_tiet'  =>  'Cà phê Espresso được pha chế từ hạt cà phê Arabica và Robusta, mang lại hương vị đậm đà, thơm ngon.',
                'gia_ban'  =>  '35000',
                'hinh_anh'  =>  'https://cdn.tgdd.vn/Files/2020/04/08/1247674/ca-phe-espresso-cappuccino-hay-macchiato-khac-nhau-nhu-the-nao-202004081942556960.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '4',
                'ten_san_pham'  =>  'Cappuccino',
                'mo_ta_ngan'  =>  'Cappuccino thơm ngon với lớp bọt sữa mịn',
                'mo_ta_chi_tiet'  =>  'Cappuccino được pha chế từ Espresso kết hợp với sữa nóng và bọt sữa, tạo nên hương vị nhẹ nhàng, béo ngậy.',
                'gia_ban'  =>  '45000',
                'hinh_anh'  =>  'https://caphenguyenchat.vn/wp-content/uploads/2017/11/tim-hieu-ve-ca-phe-y-ca-phe-cappuccino-do-uong-thinh-hanh-3.png',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '4',
                'ten_san_pham'  =>  'Latte',
                'mo_ta_ngan'  =>  'Latte mềm mại, nhẹ nhàng',
                'mo_ta_chi_tiet'  =>  'Latte với tỷ lệ sữa và cà phê hoàn hảo, mang lại hương vị thanh mát, phù hợp với mọi lứa tuổi.',
                'gia_ban'  =>  '45000',
                'hinh_anh'  =>  'https://file.hstatic.net/200000079049/article/ban_sao_cafe-latte-4_af4c8c67f30f471e93e13acd6b5bb67c.png',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '4',
                'ten_san_pham'  =>  'Mocha',
                'mo_ta_ngan'  =>  'Mocha thơm ngon với vị socola đặc trưng',
                'mo_ta_chi_tiet'  =>  'Mocha kết hợp giữa cà phê Espresso, sữa nóng và socola, mang lại hương vị béo ngọt và thơm ngon.',
                'gia_ban'  =>  '50000',
                'hinh_anh'  =>  'https://athome.starbucks.com/sites/default/files/styles/recipe_banner_xlarge/public/2024-05/CaffeMocha_RecipeHeader_848x539_%402x.jpg.webp?itok=ov3gQo8W',
                'tinh_trang'  =>  '0',
            ],
        ]);
    }
}
