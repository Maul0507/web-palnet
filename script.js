// Ambil elemen modal
const modal = document.getElementById("modalPemesanan");
const btnTambah = document.querySelector(".tambah");
const btnClose = document.querySelector(".close");
const btnBatal = document.querySelector(".batal");
const btnSimpan = document.querySelector(".simpan");

// Tampilkan modal saat tombol "Tambah Pemesanan" diklik
btnTambah.addEventListener("click", () => {
  modal.style.display = "block";
});

// Tutup modal saat tombol close atau batal diklik
btnClose.addEventListener("click", () => {
  modal.style.display = "none";
});

btnBatal.addEventListener("click", () => {
  modal.style.display = "none";
});

// Ketika user mengklik di luar modal, tutup modal
window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});

// Fungsi untuk menambah atau mengedit pemesanan
btnSimpan.addEventListener("click", (event) => {
  event.preventDefault(); // Mencegah perilaku default form

  const tanggal = document.getElementById("tanggal").value;
  const waktu = document.getElementById("waktu").value;

  // Lakukan operasi tambah atau edit pemesanan di sini
  // ...

  // Tutup modal setelah operasi selesai
  modal.style.display = "none";
});
