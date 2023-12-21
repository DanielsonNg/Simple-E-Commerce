<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(([
            'name'=>'Kursi Kayu',
            'description'=>'Bahan Baku Kayu Jati Perhutani Solid. Finising Natural Kombinasi Duco Halus',
            'price'=>('80000'),
            'image'=>('./images/kursi1.jpg'),
            'category_id'=>('1'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Kursi Minimalis',
            'description'=>'Material kayu jati/teakwood, Finishing Natural/sesuai yang Anda inginkan Packing menggunakan kardus tebal. Barang dibuat menggunakan material yang berkualitas dan juga dikerjakan oleh tangan tangan ahli jepara yang sudah berpegalaman dalam pembuatan mebel dan pewarnaan finishing.',
            'price'=>('230000'),
            'image'=>('./images/kursi2.jpg'),
            'category_id'=>('1'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Kursi Kantor',
            'description'=>'Kursi Eksekutif - Kain Jaring (Kualitas Terbaik), Model: Kursi Jaring, Style: Office Chair Tipe 444 ( Tidak ada part F dari Pabrik), Bahan : Kursi Eksekutif - Kain Jaring (Kualitas Terbaik) Kelebihan Produk - Lebih fleksibel, kursi kantor dengan desain punggung tengah, dapat memberikan dukungan lumbar yang baik - Dibuat dari bahan berkualitas terbaik.',
            'price'=>('300000'),
            'image'=>('./images/kursi3.jpg'),
            'category_id'=>('6'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Lemari Kayu',
            'description'=>'Lemari Kayu 2 Pintu adalah rangkaian furnitur baru yang ideal untuk gaya ruangan kamar tidur anda yang lebih kasual saat ini. Memadukan kayu jati asli dengan lapisan cat melamin antik yang menarik dan kaki yang terbuat dari besi industrial kontras serta pegangan pegangan logam. lemari ini termasuk item kamar tidur populer bersama dengan pilihan potongan untuk ruang kamar tidur anda.',
            'price'=>('520000'),
            'image'=>('./images/lemari1.jpg'),
            'category_id'=>('2'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Meja Kayu',
            'description'=>'Produk : Meja Gaming,
            Terbuat dari Kayu Solid Jati Asli & Besi,
            Panjang 120 cm x Lebar 60 cm x Tinggi 75(Bisa custom, silahkan hungi kami),
            Warna Melamix(Warna Bisa Custom sesuai Pilihan, Silahkan Hubungi Kami)',
            'price'=>('330000'),
            'image'=>('./images/meja1.jpeg'),
            'category_id'=>('2'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Set Meja',
            'description'=>'Set 1 unit Meja dan kursi Full Kayu Solid serbaguna Meja Lipat terbuat dari Kayu MERANTI full Soild yang Kokoh. Untuk Finishing meja menggunakan Vernish / plitur sehingga Meja juga tahan kuat dari lepuh / basah terkena air Meja kuat mampu menahan beban hingga 40 Kg ukuran dimensi Meja : Panjang : 100 cm Lebar : 200 cm Tinggi : 75 cm Kursi Kayu Solid dengan senderan Terbuat dari Kayu MERANTI dengan modelnya yang unik memberikan nuansa alami baik untuk di dalam & di luar ruangan Untuk Finishing menggunakan Furnish Tahan Air dan anti rayap mampu menahan beban hingga 120 Kg Dimensi ukuran Panjang Luar: 40 Cm Lebar : 40 Cm Tinggi tempat duduk : 49 Cm Tinggi Senderan : 83 Cm Untuk Warna sesuai dengan yang di etalase kondisi sudah full rakit.',
            'price'=>('720000'),
            'image'=>('./images/mejaKamar.jpg'),
            'category_id'=>('2'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Set Pisau',
            'description'=>'Terbuat dari stainless steel berkualitas dan diolah dengan lapisan anti lengket yang menjaga agar makanan tidak lengket pada pisau,'."\n".'Gagang gaya baru lebih nyaman untuk digenggam memastikan penggunaan pisau yang aman saat memotong,'."\n".'Material kokoh dan berkualitas sehingga tahan lama,'."\n".'Terdapat 5 jenis pisau lengkap dalam satu paket sesuai kebutuhan Anda.',
            'price'=>('200000'),
            'image'=>('./images/pisau1.jpg'),
            'category_id'=>('4'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Sofa Coklat',
            'description'=>'Sofa ini memiliki kapasitas dudukan untuk 3 orang dengan rangka kuat, finishing fabric berkualitas, dan bantalan empuk yang mampu memberikan kenyamanan. Selain itu, sofa ini dilengkapi sandaran punggung dan tangan untuk kenyamanan optimal. Tidak hanya nyaman, sofa warna cokelat ini juga mampu menciptakan kesan elegan sehingga cocok untuk melengkapi tampilan di dalam hunian Anda.',
            'price'=>('1300000'),
            'image'=>('./images/sofa1.jpg'),
            'category_id'=>('1'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Teflon',
            'description'=>'Maxim VAL-28FRY – Valentino Stir Fry Teflon 28 cm W/O Cover Memiliki kapasitas yang besar sehingga memudahkan anda dalam memasak makanan dalam jumlah yang banyak. Membuat berbagai macam cita rasa masakanan menjadi semakin mudah serta memiliki desain yang kokoh dan anti lengket membuat anda lebih mudah membersihkan teflon ini setelah penggunaan. Diameter: 28 cm',
            'price'=>('100000'),
            'image'=>('./images/teflon1.jpg'),
            'category_id'=>('4'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Set Alat Sup',
            'description'=>'Set alat makan yang terdiri dari berbagai peralatan dengan varian ukuran yang beragam untuk mengonsumsi makanan berupa sup/cairan.',
            'price'=>('130000'),
            'image'=>('./images/alatMakan1.jpg'),
            'category_id'=>('5'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Bak Mandi',
            'description'=>'Bahan Marble Bathtub ini di desain sesuai dengan lekuk tubuh sehingga produk ini nyaman digunakan . Bentuknya yang elegant menjadikan bathtub ini sangat banyak diminati, Cocok untuk kamar mandi yang tidak terlalu besar . Bahan terbuat dari Marble, Dan Warna Bathtub ini Putih Bathtub Minimalis Uk. 138 x 70 x 41 cm Harga diatas terdiri dari : 1 unit Bathtub Bahan Marble, Warna Putih 1 Set Afur Bathtub kuningan 1 Pcs Bantal kepala Import / Polyurethan FREE AFUR BATHTUB KUNINGAN Fungsi avur bathtub adalah untuk jalan air keluar bathtub menuju pembuangan saat air telah selesai digunakan di bathtub. Selain itu, fungsi avur juga sebagai over flow. Artinya, saat kita mengisi bathtub dan lupa menutup, air juga akan mengalir melalui avur di bagian atas, sehingga tidak akan memenuhi bathtub sampai tumpah kelantai. FREE BANTALAN BATHTUB Kami berikan untuk anda bantal bathtub POLY URETHAN yang tidak menyerap air dan tanpa jahitan, sehingga tetap tidak ada masalah bila bantal bathtub itu tercebur atau pun terendam air.',
            'price'=>('4500000'),
            'image'=>('./images/bakmandi.jpg'),
            'category_id'=>('3'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Office Set',
            'description'=>'Bahan Meja - Bahan meja dari partikel board - Bahan rangka dari besi Bahan Kursi - Bahan dudukan dari polypropylene - Bahan plastik yang tebal dan didesain dengan struktur molding yang lebih padat membuat kursi ini tetap berdiri kokoh dan tidak bengkok ketika diduduki. - Berkat plastic yang berkualitas dan tebal, kursi ini dapat menahan beban 100kg Fitur - Desain minimalis - Bisa di lipat - Ringan di pindahkan Ukuran Meja - Panjang 90 cm - Lebar 51 cm - Tinggi Meja 75 cm .',
            'price'=>('5200000'),
            'image'=>('./images/officeSet.jpg'),
            'category_id'=>('6'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Gelas Wine',
            'description'=>'Gelas untuk wine atau minuman lainnya',
            'price'=>('12000'),
            'image'=>('./images/gelasWine.jpg'),
            'category_id'=>('5'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Cermin',
            'description'=>'Cermin High Quality, finishing sempurna Ketebalan cermin 5 mm Kuat dan awet Made in Indonesia.',
            'price'=>('75000'),
            'image'=>('./images/cermin.jpg'),
            'category_id'=>('3'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Talenan',
            'description'=>'Berbahan Kayu Jati Belanda dengan panjang 27cm, lebar 14cm, tebal kayu 1.5cm. Finishing menggunakan Vernis Natural Waterbase Ramah Lingkungan, Sangat Halus, dan Warna Natural.',
            'price'=>('30000'),
            'image'=>('./images/talenan.jpg'),
            'category_id'=>('4'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Dekorasi Tanaman',
            'description'=>'Hiasan berupa tanaman hijau untuk memperindah ruangan. Pot terbuat dari keramik sehingga awet dan terlihat rapi',
            'price'=>('100000'),
            'image'=>('./images/tanaman.jpg'),
            'category_id'=>('1'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Lukisan Dinding',
            'description'=>'Lukisan dinding tulisan font helvetica untuk dekorasi ruangan. Frame terbuat dari besi. Ukuran 60x80cm',
            'price'=>('60000'),
            'image'=>('./images/lukisan.jpg'),
            'category_id'=>('2'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Meja Meeting',
            'description'=>'Berbahan kayu mahoni tua kualitas terbaik dan kering kadar air 10% spesifik produk kaki. Besi hollow 4×6 varian warna hitam dan putih size meja meeting :440×100×75(custom,dilengkapi lubang untuk gerommet) panjang 240 cm lebar 100 cm tinggi 75 cm finishing tobtable: natural doff natural glossy walnuf doff walnuf glossy',
            'price'=>('6300000'),
            'image'=>('./images/mejaPanjang.jpg'),
            'category_id'=>('6'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Peralatan Makan',
            'description'=>'Set Alat Makan Mewah isi 6 Pcs / Piring Mangkok Gelas Harga tertara adalah harga untuk 1 set alat makan isi 6pcs: Gelas x 1 Mangkok x 1 Piring x 1 Sendok x 1 Garpu x 1 Pisau x 1 Bahan: Plastik Food Grade - Gelas: 200ml/7.7x8.3cm - Mangkok: 380ml/1.8x4.5cm - Piring: 480ml/18.5x2.2cm - Sendok 16cm/Garpu 16cm/Pisau 17.5cm',
            'price'=>('340000'),
            'image'=>('./images/fancy.jpg'),
            'category_id'=>('5'),
        ]));

        DB::table('products')->insert(([
            'name'=>'Jam Dinding',
            'description'=>'Jam dinding untuk mengetahui waktu. Bingkai terbuat dari kayu.',
            'price'=>('120000'),
            'image'=>('./images/jam.jpg'),
            'category_id'=>('6'),
        ]));

    }
}
