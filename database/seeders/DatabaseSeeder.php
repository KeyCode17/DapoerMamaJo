<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Picture;
use App\Models\Category;
use App\Models\User;
use App\Models\Promo;
use App\Models\About;
use App\Models\Contacts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'password' => 'root'
        ]);
        Category::create([
            'name' => 'Nasi Kotak',
            'slug' => 'nasi-kotak'
        ]);
        Category::create([
            'name' => 'Paket Lebaran',
            'slug' => 'paket-lebaran'
        ]);
        Category::create([
            'name' => 'Nasi Tumpeng',
            'slug' => 'nasi-tumpeng'
        ]);
        Category::create([
            'name' => 'Lainnya',
            'slug' => 'lainnya'
        ]);

        About::create([
            'title' => "Dapoer Mama Jo",
            'slug' => "about",
            'icon' => "public/index/icon.png",
            'index' => "public/index/index.png",
            'body' => "<div>Kami menyediakan layanan catering Sego Mangkok di Malang sejak tahun 2010. Kami spesialis dalam menyajikan makanan nasi kotak dan tumpeng yang lezat. Khusus untuk catering Lebaran, kami juga memiliki menu paket Lebaran yang istimewa.<br><br></div><div>Kami mengutamakan kualitas makanan dan kepuasan pelanggan kami. Semua hidangan yang kami sediakan tidak mengandung MSG (Monosodium Glutamate) dan terjamin kehalalannya. Kami menggunakan bahan-bahan berkualitas tinggi dan proses masak yang higienis untuk memberikan makanan yang lezat dan aman dikonsumsi.<br><br></div><div>Lokasi kami berada di Malang, dan kami siap melayani pesanan catering untuk berbagai acara, seperti perayaan Lebaran, acara keluarga, pernikahan, rapat, dan lainnya. Kami memiliki paket catering yang fleksibel dan dapat disesuaikan dengan kebutuhan Anda. Kami berkomitmen untuk memberikan pengalaman kuliner yang nikmat dan memuaskan bagi setiap pelanggan kami.<br><br></div><div>Untuk informasi lebih lanjut atau untuk memesan catering, silakan hubungi kami di nomor kontak yang tertera di bawah ini:<br><br></div><div><br><strong>Dapoer Mama Jo</strong><br>Lokasi: Malang<br>Telepon: +62 812-3484-2454<br>Instagram: <a href='https://www.instagram.com/dapoermamajo/'>Dapoer Mama Jo</a><br><br></div><div>Terima kasih atas minat dan kepercayaan Anda kepada kami. Kami siap memberikan pengalaman kuliner yang istimewa dan memuaskan untuk acara Anda.</div>"
        ]);

        Post::create([
            'category_id' => 3,
            'title' => "Tumpeng Nasi Kuning",
            'slug' => "tumpeng-nasi-kuning",
            'image' => "public/posts/image1.png",
            'body' => "<div>Tumpeng buatan<strong> Dapoer Mama Jo</strong> adalah sebuah pengalaman kuliner yang tak terlupakan. <strong>Dapoer Mama Jo</strong> dikenal dengan keahlian mereka dalam menyajikan tumpeng yang sangat lezat dan autentik. Setiap hidangan tumpeng mereka dibuat dengan penuh keahlian dan kasih sayang, menjadikannya nikmat dalam setiap suapan.</div><div><br><strong>Dapoer Mama Jo</strong> mengutamakan kualitas bahan-bahan yang digunakan dalam pembuatan tumpeng. Nasi kuning yang mereka sajikan memiliki aroma yang khas dan tekstur yang lembut. Lauk-pauk yang melengkapi tumpeng, seperti ayam goreng, ikan bakar, dan sayuran tumis, dipilih dengan teliti dan dimasak dengan sempurna. Setiap hidangan memiliki rasa yang autentik dan menggoda selera, membuat setiap gigitan menjadi kenikmatan yang tak terlupakan. <strong>Dapoer Mama Jo</strong> juga menghadirkan sentuhan kreativitas dalam penyajian tumpeng mereka, dengan hiasan-hiasan yang indah dan menggugah selera. Semua ini menjadikan tumpeng buatan Dapoer Mama Jo sebagai hidangan yang tidak hanya nikmat di mulut, tetapi juga menarik secara visual.</div>",
        ]);
        
        Post::create([
        'category_id'=> 4,
        'title'=> "Soto Banjar",
        'slug'=> "soto-banjar",
        'image'=> "public/posts/image2.png",
        'body'=> "<div>Soto Banjar dengan racikan <strong>Dapoer Mama Jo </strong>merupakan hidangan yang menggugah selera dan memanjakan lidah. Soto Banjar adalah hidangan khas dari Banjarmasin yang terkenal dengan kuahnya yang kaya dan racikan rempah yang lezat. <strong>Dapoer Mama Jo</strong> menghadirkan Soto Banjar dengan racikan yang autentik dan membuatnya begitu nikmat.<br><br>Salah satu keistimewaan Soto Banjar dengan racikan <strong>Dapoer Mama Jo</strong> adalah kuahnya yang kaya dan gurih. Racikan rempah-rempah seperti serai, jahe, lengkuas, dan kunyit memberikan aroma dan rasa yang khas pada kuah kaldu. Setiap suapan Soto Banjar ini akan membawa Anda merasakan kelezatan racikan rempah yang memenuhi seluruh kuahnya.<br><br>Selain itu, <strong>Dapoer Mama Jo</strong> mengolah daging sapi dengan racikan yang sempurna. Daging sapi yang dimasak dengan baik memiliki tekstur yang empuk dan rasa yang meresap hingga ke dalam setiap seratnya. Ditambah dengan mie kuning, tauge, daun seledri, dan bawang goreng sebagai bahan pelengkap, Soto Banjar dengan racikan <strong>Dapoer Mama Jo</strong> menciptakan harmoni rasa yang sempurna dalam setiap suapannya.<br><br>Dapoer Mama Jo menyajikan Soto Banjar menghadirkan cita rasa yang autentik dan menggugah selera. Nikmatnya Soto Banjar dengan racikan <strong>Dapoer Mama Jo</strong> terletak pada perpaduan sempurna antara kuah yang kaya rempah, racikan rempah yang lezat, dan daging sapi yang empuk. Setiap hidangan Soto Banjar ini akan memanjakan lidah Anda dan memberikan pengalaman kuliner yang tak terlupakan.</div>",
        ]);

        Post::create([
        'category_id' => 2,
        'title' => "Paket Lebaran",
        'slug' => "paket-lebaran",
        'image' => "public/posts/image3.png",
        'body' => "<div>Dapoer Mama Jo dengan bangga menyediakan paket Lebaran yang istimewa bagi pelanggan kami. Paket Lebaran kami dirancang khusus untuk memenuhi kebutuhan makanan selama momen Lebaran dengan cita rasa yang lezat dan pilihan menu yang beragam.<br><br></div><div><br>Paket Lebaran dari Dapoer Mama Jo mencakup berbagai hidangan lezat yang siap disajikan untuk keluarga dan kerabat Anda. Kami menawarkan pilihan menu yang beragam, termasuk hidangan khas seperti nasi kotak, tumpeng, lauk-pauk spesial, makanan ringan, dan hidangan penutup yang menggugah selera.<br><br></div><div><br>Setiap hidangan dalam paket Lebaran kami disiapkan dengan racikan bumbu rempah yang khas dan menggunakan bahan-bahan berkualitas tinggi. Kami memastikan bahwa semua hidangan yang kami sediakan bebas dari MSG (Monosodium Glutamate) dan sesuai dengan standar kehalalan.<br><br></div><div><br>Dengan memesan paket Lebaran dari Dapoer Mama Jo, Anda dapat memanjakan keluarga dan kerabat Anda dengan hidangan yang lezat dan berkualitas tinggi tanpa harus repot memasak sendiri. Kami menyediakan paket yang dapat disesuaikan dengan kebutuhan dan jumlah tamu, sehingga Anda dapat merayakan momen Lebaran dengan nyaman dan berkesan.<br><br></div>",
        ]);

        Post::create([
            'category_id' => 2,
            'title' => "Paket Lebaran",
            'slug' => "paket-lebaran-2",
            'image' => "public/posts/image4.png",
            'body' => "<div>Dapoer Mama Jo dengan bangga menyediakan paket Lebaran yang istimewa bagi pelanggan kami. Paket Lebaran kami dirancang khusus untuk memenuhi kebutuhan makanan selama momen Lebaran dengan cita rasa yang lezat dan pilihan menu yang beragam.<br><br></div><div><br>Paket Lebaran dari Dapoer Mama Jo mencakup berbagai hidangan lezat yang siap disajikan untuk keluarga dan kerabat Anda. Kami menawarkan pilihan menu yang beragam, termasuk hidangan khas seperti nasi kotak, tumpeng, lauk-pauk spesial, makanan ringan, dan hidangan penutup yang menggugah selera.<br><br></div><div><br>Setiap hidangan dalam paket Lebaran kami disiapkan dengan racikan bumbu rempah yang khas dan menggunakan bahan-bahan berkualitas tinggi. Kami memastikan bahwa semua hidangan yang kami sediakan bebas dari MSG (Monosodium Glutamate) dan sesuai dengan standar kehalalan.<br><br></div><div><br>Dengan memesan paket Lebaran dari Dapoer Mama Jo, Anda dapat memanjakan keluarga dan kerabat Anda dengan hidangan yang lezat dan berkualitas tinggi tanpa harus repot memasak sendiri. Kami menyediakan paket yang dapat disesuaikan dengan kebutuhan dan jumlah tamu, sehingga Anda dapat merayakan momen Lebaran dengan nyaman dan berkesan.<br><br></div>",
        ]);

        Picture::create([
            'image' => "public/posts/image1.png",
        ]);

        Picture::create([
            'image' => "public/posts/image2.png",
        ]);

        Picture::create([
            'image' => "public/posts/image3.png",
        ]);

        Picture::create([
            'image' => "public/posts/image4.png",
        ]);

        Promo::create([
            'title' => "Mohon Maaf",
            'slug' => "mohon-maaf",
            'image' => "public/promo/nopromo.png",
            'body' => "<div>Belum ada promo untuk saat ini</div>",
        ]);

        Contacts::create([
            'nama' => 'John',
            'kontak' => '08123456789'
        ]);

        Contacts::create([
            'nama' => 'Doe',
            'kontak' => '08123456789'
        ]);
        
    }
}
