const berat = document.querySelector("#berat");

if (berat) {
    let total = document.querySelector("#total");
    const harga = document.querySelector("#harga");

    berat.addEventListener("keyup", (e) => {
        let beratSampah = e.target.value;
        beratSampah = parseInt(beratSampah);
        hargaSampah = parseInt(harga.value);

        beratSampah = beratSampah < 0 ? 0 : beratSampah;

        totalHarga = hargaSampah * beratSampah;
        totalHarga = totalHarga ? totalHarga : 0;

        total.value = totalHarga;
    });
}
