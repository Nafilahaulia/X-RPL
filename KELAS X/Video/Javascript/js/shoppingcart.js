let tblmenu = [
    {
        idmenu:1,
        idkategori:1,
        menu:"Apel manalagi",
        gambar:"apel.jpeg",
        harga:3000
    },
    {
        idmenu:2,
        idkategori:1,
        menu:"Pisang raja",
        gambar:"pisang.jpeg",
        harga:5000
    },
    {
        idmenu:3,
        idkategori:2,
        menu:"Nasi padang",
        gambar:"nasi padang.jpeg",
        harga:20000
    },
    {
        idmenu:4,
        idkategori:2,
        menu:"Nasi ayam",
        gambar:"nassi ayam.jpeg",
        harga:15000
    },
    {
        idmenu:5,
        idkategori:3,
        menu:"Es teh",
        gambar:"esteh.jpeg",
        harga:7000
    },
];

let tampil = tblmenu.map(function (kolom) {
    // return '<div class="produk-content">
    //         <div class="image">
    //             <img src="img/${kolom.gambar}" alt="" />
    //         </div>
    //         <div class="titel">
    //             <h2>${kolom.menu}</h2>
    //         </div>

    //         <div class="harga">
    //             <h2>${kolom.harga}</h2>
    //         </div>
    //     </div>';
});

let isi = document.querySelector(".produk");

isi.innerHTML = tampil;

// console.log(tampil);