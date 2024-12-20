<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Pengguna - Desa Sungai Keran</title>
  <link rel="stylesheet" href="style.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Inter:wght@400;700&family=Lora:wght@400;700&family=Poppins:wght@400;700&family=Lato:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    *,
    ::after,
    ::before {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      font-size: 0.875rem;
      opacity: 1;
      overflow-y: scroll;
      margin: 0;
    }

    a {
      cursor: pointer;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
    }

    li {
      list-style: none;
    }

    h4 {
      font-family: 'Poppins', sans-serif;
      font-size: 1.3rem;
      color: rgb(196, 0, 39);
    }

    h5 {
      font-size: 1.2rem;
      text-align: center;
      margin-bottom: 30px;
      font-weight: bold;
    }

    .form-label {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <aside id="sidebar" class="sticky-top" style="height: 100vh; overflow-y: auto;">
      <!-- Content fo Sidebar -->
      <div class="h100">
        <div class="sidebar-logo collapsed-icon">
          <a href="#">Desa Sungai Keran</a>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="admin-dashboard.html" class="sidebar-link" id="admin-dashboard">
              <i class="fa-solid fa-list pe-2"></i>
              <span class="link-text">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-profile-desa.html" class="sidebar-link" id="admin-profile-desa">
              <i class="fa-solid fa-id-card pe-2"></i>
              <span class="link-text">Profile Desa</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-perangkat-desa.html" class="sidebar-link" id="admin-perangkat-desa">
              <i class="fa-solid fa-user-tie pe-2"></i>
              <span class="link-text">Perangkat Desa</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-lembaga-desa.html" class="sidebar-link" id="admin-lembaga-desa">
              <i class="fa-solid fa-landmark pe-2"></i>
              <span class="link-text">Lembaga Desa</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-layanan-publik.html" class="sidebar-link" id="admin-layanan-publik">
              <i class="fa-solid fa-hands-helping pe-2"></i>
              <span class="link-text">Layanan Publik</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-layanan-administrasi.html" class="sidebar-link" id="admin-layanan-administrasi">
              <i class="fa-solid fa-file-signature pe-2"></i>
              <span class="link-text">Layanan Administrasi</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-pengumuman.html" class="sidebar-link" id="admin-pengumuman">
              <i class="fa-solid fa-bullhorn pe-2"></i>
              <span class="link-text">Pengumuman</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-kegiatan.html" class="sidebar-link" id="admin-kegiatan">
              <i class="fa-solid fa-calendar-day pe-2"></i>
              <span class="link-text">Kegiatan</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-kontak.html" class="sidebar-link" id="admin-kontak">
              <i class="fa-solid fa-address-book pe-2"></i>
              <span class="link-text">Kontak</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="kelola-pengguna.html" class="sidebar-link" id="kelola-pengguna">
              <i class="fa-solid fa-user pe-2"></i>
              <span class="link-text">Pengguna</span>
            </a>
          </li>
        </ul>

      </div>
    </aside>
    <div class="main">
      <nav class="navbar navbar-expand px-3 border-bottom">
        <button class="btn" id="sidebar-toggle" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                <img src="img/6.jpg" class="avatar img-fluid" alt="User Avatar">
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item">
                  <i class="fa-solid fa-user-gear pe-2"></i>
                  Profile
                </a>
                <a href="#" class="dropdown-item">
                  <i class="fa-solid fa-right-from-bracket pe-2"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <main class="content px-3 py-2">
        <div class="container-fluid" id="kelola-pengguna">
          <div class="mt-3 mb-3">
            <h4>Kelola Pengguna</h4>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5>Tambah Pengguna Baru
                    <hr>
                  </h5>
                  <form id="tambahPenggunaForm">
                    <div class="form-group row mb-3">
                      <label for="nipUsername" class="col-lg-2 col-md-3 col-sm-4 form-label">NIP/Username:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <input type="text" class="form-control" id="nipUsername" required>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="namaPengguna" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <input type="text" class="form-control" id="namaPengguna" required>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="alamat" class="col-lg-2 col-md-3 col-sm-4 form-label">Alamat:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <textarea class="form-control" id="alamat" required></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="noHp" class="col-lg-2 col-md-3 col-sm-4 form-label">No HP:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <input type="tel" class="form-control" id="noHp" required>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="fotoProfil" class="col-lg-2 col-md-3 col-sm-4 form-label">Unggah Foto Profil:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <input type="file" class="form-control" id="fotoProfil" accept="image/*">
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="password" class="col-lg-2 col-md-3 col-sm-4 form-label">Password:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <input type="password" class="form-control" id="password">
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="confirmPassword" class="col-lg-2 col-md-3 col-sm-4 form-label">*Konfirmasi
                        Password:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <input type="password" class="form-control" id="confirmPassword" required>
                      </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                      <button type="submit" class="btn btn-simpan">Simpan</button>
                      <a href="kelola-pengguna.html" class="btn btn-batal ms-2">Batal</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="container mt-4">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>NIP/Username</th>
                    <th>Nama Pengguna</th>
                    <th>Foto Profil</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="penggunaTableBody">
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Modal Edit Pengguna -->
        <div class="modal fade" id="editPenggunaModal" tabindex="-1" aria-labelledby="editPenggunaModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editPenggunaModalLabel">Edit Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="editPenggunaForm">
                  <div class="form-group mb-3">
                    <label for="editNipUsername" class="form-label">NIP/Username:</label>
                    <input type="text" class="form-control" id="editNipUsername" required>
                  </div>
                  <div class="form-group mb-3">
                    <label for="editNamaPengguna" class="form-label">Nama:</label>
                    <input type="text" class="form-control" id="editNamaPengguna" required>
                  </div>
                  <div class="form-group mb-3">
                    <label for="editAlamat" class="form-label">Alamat:</label>
                    <textarea class="form-control" id="editAlamat" required></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label for="editNoHp" class="form-label">No HP:</label>
                    <input type="tel" class="form-control" id="editNoHp" required>
                  </div>
                  <div class="form-group mb-3">
                    <label for="editFotoProfil" class="form-label">Unggah Foto Profil:</label>
                    <input type="file" class="form-control" id="editFotoProfil" accept="image/*">
                  </div>
                  <div class="form-group mb-3">
                    <label for="editPassword" class="form-label">Edit Password:</label>
                    <input type="password" class="form-control" id="editPassword">
                  </div>
                  <div class="form-group row mb-3">
                    <label for="confirmPassword" class="col-lg-2 col-md-3 col-sm-4 form-label">*Konfirmasi
                      Password:</label>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                      <input type="password" class="form-control" id="confirmPassword" required>
                    </div>
                  </div>
                  <input type="hidden" id="editIndex">
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-batal" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-simpan" id="simpanEditPengguna">Simpan Perubahan</button>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script>
      const sidebarToggle = document.querySelector("#sidebar-toggle");
      sidebarToggle.addEventListener("click", function () {
        document.querySelector("#sidebar").classList.toggle("collapsed");
      });

      // Active sidebar
      const currentUrl = window.location.href;

      const sidebarItems = [
        { id: 'admin-dashboard', url: 'admin-dashboard.html' },
        { id: 'admin-profile-desa', url: 'admin-profile-desa.html' },
        { id: 'admin-perangkat-desa', url: 'admin-perangkat-desa.html' },
        { id: 'admin-lembaga-desa', url: 'admin-lembaga-desa.html' },
        { id: 'admin-layanan-publik', url: 'admin-layanan-publik.html' },
        { id: 'admin-layanan-administrasi', url: 'admin-layanan-administrasi.html' },
        { id: 'admin-pengumuman', url: 'admin-pengumuman.html' },
        { id: 'admin-kegiatan', url: 'admin-kegiatan.html' },
        { id: 'admin-kontak', url: 'admin-kontak.html' },
        { id: 'kelola-pengguna', url: 'kelola-pengguna.html' }
      ];

      sidebarItems.forEach(item => {
        if (currentUrl.includes(item.url)) {
          const sidebarLink = document.getElementById(item.id);
          if (sidebarLink) {
            sidebarLink.classList.add('active');
          }
        }
      });


      // kelola pengguna
      let pengguna = JSON.parse(localStorage.getItem('pengguna')) || [];

      // Fungsi untuk menampilkan pengguna
      function displayPengguna() {
        const penggunaTableBody = document.getElementById('penggunaTableBody');
        penggunaTableBody.innerHTML = '';

        pengguna.forEach((penggunaItem, index) => {
          const row = `
      <tr>
        <td>${index + 1}</td>
        <td>${penggunaItem.nipUsername}</td>
        <td>${penggunaItem.nama}</td>
        <td>${penggunaItem.alamat}</td>
        <td>${penggunaItem.noHp}</td>
        <td><img src="${penggunaItem.foto}" alt="Foto Profil" style="width: 50px; height: 50px;" class="img-thumbnail"></td>
        <td>
          <button class="btn btn-edit btn-sm" onclick="isiFormEditPengguna(${index})">Edit</button>
          <button class="btn btn-hapus btn-sm" onclick="hapusPengguna(${index})">Hapus</button>
        </td>
      </tr>
    `;
          penggunaTableBody.innerHTML += row;
        });
      }

      // Fungsi untuk menambahkan pengguna baru
      document.getElementById('tambahPenggunaForm').onsubmit = function (event) {
        event.preventDefault();

        const nipUsername = document.getElementById('nipUsername').value;
        const nama = document.getElementById('namaPengguna').value;
        const alamat = document.getElementById('alamat').value;
        const noHp = document.getElementById('noHp').value;
        const foto = document.getElementById('fotoProfil').files[0];
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        // Validasi konfirmasi password
        if (password !== confirmPassword) {
          alert('Password dan konfirmasi password tidak cocok!');
          return;
        }

        const newPengguna = {
          nipUsername,
          nama,
          alamat,
          noHp,
          foto: foto ? URL.createObjectURL(foto) : '',
        };

        pengguna.push(newPengguna);
        localStorage.setItem('pengguna', JSON.stringify(pengguna));
        alert('Pengguna baru berhasil ditambahkan!');
        displayPengguna();
        this.reset(); // Reset form
      };

      // Fungsi untuk mengisi form edit pengguna
      function isiFormEditPengguna(index) {
        const penggunaItem = pengguna[index];
        document.getElementById('editIndex').value = index;
        document.getElementById('editNipUsername').value = penggunaItem.nipUsername;
        document.getElementById('editNamaPengguna').value = penggunaItem.nama;
        document.getElementById('editAlamat').value = penggunaItem.alamat;
        document.getElementById('editNoHp').value = penggunaItem.noHp;
      }

      // Fungsi untuk menyimpan perubahan pengguna yang diedit
      document.getElementById('simpanEditPengguna').onclick = function () {
        const index = document.getElementById('editIndex').value;
        const nipUsername = document.getElementById('editNipUsername').value;
        const nama = document.getElementById('editNamaPengguna').value;
        const alamat = document.getElementById('editAlamat').value;
        const noHp = document.getElementById('editNoHp').value;
        const foto = document.getElementById('editFotoProfil').files[0];
        const password = document.getElementById('editPassword').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        // Validasi konfirmasi password
        if (password !== confirmPassword) {
          alert('Password dan konfirmasi password tidak cocok!');
          return;
        }

        pengguna[index] = {
          nipUsername,
          nama,
          alamat,
          noHp,
          foto: foto ? URL.createObjectURL(foto) : pengguna[index].foto,
        };

        localStorage.setItem('pengguna', JSON.stringify(pengguna));
        alert('Pengguna berhasil diperbarui!');
        $('#editPenggunaModal').modal('hide');
        displayPengguna();
      };

      // Fungsi untuk menghapus pengguna
      function hapusPengguna(index) {
        if (confirm("Apakah Anda yakin ingin menghapus pengguna ini?")) {
          pengguna.splice(index, 1);
          localStorage.setItem('pengguna', JSON.stringify(pengguna));
          alert('Pengguna berhasil dihapus!');
          displayPengguna();
        }
      }

      displayPengguna();
    </script>
</body>

</html>