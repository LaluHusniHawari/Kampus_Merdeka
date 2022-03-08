class Gempa {
    // member 1 & 2 : variable dan konstruktor
    constructor(lokasi, skala) {
        this.lokasi = lokasi;
        this.skala = skala;

    }

    // member fungsi
    dampak() {
        if (this.skala < 3) this.gempa = "dampak tidak terasa";
        else if (this.skala < 5) this.gempa = "bangunan retak-retak";
        else if (this.skala < 7) this.gempa = "bangunan Roboh";
        else if (this.skala > 6) this.gempa = "bangunan Roboh dan berpotensi Tsunami";
        else this.gempa = 'Tidak Berbahaya';

        document.write(
            `Lokasi Gempa : ${this.lokasi}
                <br>Skala Gempa : ${this.skala}
                <br>Dampak Gempa : ${this.gempa}<hr>`
        )

    }

}

// ============ Menciptakan object ===============
let data1 = new Gempa('Bali', 8);
let data2 = new Gempa('NTB', 7);
let data3 = new Gempa('NTT', 6);
let data4 = new Gempa('Jakarta', 8);
let data5 = new Gempa('Kalimantan', 6);
let data6 = new Gempa('Sulawesi', 8);
let data7 = new Gempa('Palu', 7);
let data8 = new Gempa('Jawa Tengah', 3);
let data9 = new Gempa('Sulawesi Selatan', 3);
let data10 = new Gempa('Jawa Timur', 4);

// menggunakan member class
data1.dampak();
data2.dampak();
data3.dampak();
data4.dampak();
data5.dampak();
data6.dampak();
data7.dampak();
data8.dampak();
data9.dampak();
data10.dampak();