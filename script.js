// Ambil parameter dari URL
const urlParams = new URLSearchParams(window.location.search);
const username = urlParams.get('username');

// Tampilkan username di header (jika ada)
if (username) {
    document.querySelector('.header span').textContent = username;
}

// Fungsi untuk mencari barang berdasarkan input pencarian
function searchTable() {
    let input = document.getElementById('searchInput');
    let filter = input.value.toLowerCase();
    let table = document.getElementById('dataTable');
    let trs = table.getElementsByTagName('tr');

    // Loop melalui setiap baris tabel
    for (let i = 1; i < trs.length; i++) {
        let td = trs[i].getElementsByTagName('td');
        let found = false;

        // Loop melalui setiap kolom dalam baris
        for (let j = 0; j < td.length; j++) {
            if (td[j].textContent.toLowerCase().indexOf(filter) > -1) {
                found = true;
                break;
            }
        }

        // Sembunyikan atau tampilkan baris berdasarkan hasil pencarian
        if (found) {
            trs[i].style.display = '';
        } else {
            trs[i].style.display = 'none';
        }
    }
}
