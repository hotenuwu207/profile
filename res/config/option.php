<?php
/**
 * @package thanhdieuv5 (tester)
 * @author  Vương Thanh Diệu <www.facebok.com/wusthanhdieu>
 */
interface ThanhDieuConfigInterface {
    public function CommonMethod();
}
class ThanhDieuHeader implements ThanhDieuConfigInterface {
    public $title = "Ho Ten UwU | Welcome";
    public $description = "Hi my name is NamHai / A freelance / web developer / vexer";
    public $keywords = "namhai,web nam hai,ho ten uwu,namhai home,profile namhai";
    public $favicon = "./res/v5/img/logo.jpg";
    public $namesite = "HoTenUwU | HOME";
    public $avatar = "./res/v5/img/avatar.gif";
    public $userName = ["Hello Everybody", "My name is NamHai.", "Welcome to my profile 🌭"];
    public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
    public $bio1 = "🤖️ Người đam mê công nghệ số";
    public $bio2 = "🔍 Chia sẻ và giúp đỡ nhiệt tình";
    public $bio3 = "💻 Top 1 thách đấu se vờ Việt Nam";
    public $bio4 = "Thích làm thần tượng tiktok 🥳";
    public $bio5 = "Ăn, ngủ và chơi game 🎮";
    public $bio6 = "Kẻ khờ dại tin vào tình yêu ✨";
    public $SocialNetworks = [
        "facebook" => "https://www.facebook.com/hotenuwu07", // Thay link facebook
        "instagram" => "https://www.instagram.com/hotenuwu/", // Thay link instagram
        "tiktok" => "https://www.tiktok.com/@miaouwu0", // Thay link tiktok
        "telegram" => "https://t.me/hotenuwu2007" // Thay link telegram
    ];
    public function CommonMethod(){date_default_timezone_set('Asia/Ho_Chi_Minh');}
}


class ThanhDieuLoveDays implements ThanhDieuConfigInterface {
    public $ConfigLove = [
        "avatar_male" => "./res/v5/img/male.jpeg", // Thay đường dẫn tới thư mục chứa ảnh của bạn hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_male" => "Nam Hai", // Thay tên của bạn
        //========================================================//
        "avatar_female" => "./res/v5/img/female.jpeg", // Thay đường dẫn tới thư mục chứa ảnh bạn gái hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_female" => "Huong Giang", // Thay tên đối phương
        //========================================================//
        "time_relashiption" => "15/08/2021" // Định dạng ngày tháng năm: DD-MM-YYYY or / or :
        //========================================================//
    ];
    public function CommonMethod() {}
}
class ThanhDieuMusicList implements ThanhDieuConfigInterface {
    public $songs = [
        [
            "url" => "https://files.catbox.moe/zudf1w.mp3",
            "avatar" => "https://imgur.com/XDRFl1j.jpg",
            "title" => "Nếu Ánh Trăng Không Đến ",
            "author" => "Vương Vũ Trụ x Kiều Tuấn Thừa "
        ],
        [
            "url" => "https://files.catbox.moe/m8b4hr.mp3",
            "avatar" => "https://i.imgur.com/e28b0dD.png",
            "title" => "Thiên Lý Ơi",
            "author" => "Jack ( 5 Triệu )"
        ],
        [
            "url" => "https://files.catbox.moe/yrpft2.mp3",
            "avatar" => "https://i.imgur.com/DAaTklq.png",
            "title" => "Thuỷ Triều",
            "author" => "Quang Hùng MasterD"
        ],
        [
            "url" => "https://files.catbox.moe/jlat9a.mp3",
            "avatar" => "https://i.imgur.com/vp5Vsx5.png",
            "title" => "風立ちぬ ( Gió Nổi )",
            "author" => "周深"
        ],
        [
            "url" => "https://files.catbox.moe/hkqk6x.mp3",
            "avatar" => "https://i.imgur.com/GEOKT8b.png",
            "title" => "Chúng Ta Của Tương Lai",
            "author" => "Sơn Tùng M-TP"
        ],
        [
            "url" => "https://files.catbox.moe/acg0vl.mp3",
            "avatar" => "https://i.ibb.co/MDVY07s/619964de31327dbf8491d14d2c25533f.jpg",
            "title" => "Hoa Cỏ Lau",
            "author" => "Phong Max"
        ],
        [
            "url" => "https://files.catbox.moe/s8opab.mp3",
            "avatar" => "https://i.ibb.co/6R8V7S7/ed0741228ad36870e13624120474e50a.jpg",
            "title" => "Sau Lời Từ Khước",
            "author" => "Phan Mạnh Quỳnh"
        ],
        [
            "url" => "https://files.catbox.moe/gvqgma.mp3",
            "avatar" => "https://i.ibb.co/gvXHBqv/ab67616d0000b273ae85dfd27beee97a3a009f68.jpg",
            "title" => "Em Đã Xa Anh Remix",
            "author" => "Như Việt"
        ],
        [
            "url" => "https://files.catbox.moe/dvjckq.mp3",
            "avatar" => "https://i.ibb.co/VpFyXhS/ab44498b5b432879428719390baf1180-1490064587.jpg",
            "title" => "Anh Đã Quen Với Cô Đơn",
            "author" => "Soobin Hoàng Sơn"
        ],
        [
            "url"=> "https://files.catbox.moe/jws54y.mp3",
            "avatar" => "https://imgur.com/AwBkOWX.jpg",
            "title" => "Nói Có Sẽ Khó Nhưng Vui",
            "author" => "Yan Nguyễn"
        ],
        [
            "url"=> "https://files.catbox.moe/thslna.mp3",
            "avatar" => "https://imgur.com/bqN7ZDJ.jpg",
            "title" => "Chỉ Bằng Cái Gật Đầu Remix",
            "author" => "Yan Nguyễn x Đại Mèo"
        ]
    ];
    public function CommonMethod() {}
}
