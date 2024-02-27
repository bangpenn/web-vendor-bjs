<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('auth/assets/tukuklik.png') }}" type="image/x-icon" />

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

	<title>AdminTukuKlik</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Hello, Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="{{ route('admin.dashboard') }}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			{{-- <li>
				<a href="{{ route('admin.vendor') }}">
					<i class='bx bxs-group' ></i>
					<span class="text">My Vendor</span>
				</a>
			</li> --}}
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<!-- <li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li> -->
			<!-- <li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li> -->
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('admin.dashboard') }}" class="logout">
                        <i class='bx bx-power-off '></i>
                        <span class="text">Logout</span>
                    </a>
                </form>

			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="{{ asset('admin/img/people.png') }}">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>My Vendor</h1>
					<ul class="breadcrumb">
						<li>
							<a href="{{ route('admin.dashboard') }}">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a href="#">My Vendor</a>
						</li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
							<a class="active" href="#">Vendor Profile</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<!-- <ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>50</h3>
						<p>New Vendor</p>
					</span>
				</li> -->
				<!-- <li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>1834</h3>
						<p>Visitors</p>
					</span>
				</li> -->
				<!-- <li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
				</li> -->
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
                        <img src="{{ asset('admin/img/people.png') }}">
						<h3>{{ $vendor->nama_distributor }} - {{ $vendor->nama_umkm  }}</h3><br>

					</div>
					<table>
						<thead>
							<tr>
                                <th class="judul-tabel">No.</th>
								<th class="judul-tabel">Nama Distributor</th>
                                <th class="judul-tabel">Nama UMKM</th>
                                <th class="judul-tabel">Alamat Kantor</th>
								<th class="judul-tabel">Jenis Vendor</th>
								<th class="judul-tabel">Kategori Vendor</th>

							</tr>
						</thead>
						{{-- <tbody>
							<tr>
								<td>
									<img src="{{ asset('admin/img/people.png') }}">
									<p>John Doe</p>
								</td>
                                <td>PT. Percetakkan</td>
								<td>Surabaya</td>
								<td>08192929292</td>
								<td>Johndoe@mail.com</td>
                                <td><span class="status completed">Completed</span></td>
							</tr>

						</tbody> --}}
                        <tbody>

                            <tr>
                                <td scope="row"> {{ $vendor->id }} </td>
                                <td>{{ $vendor->nama_distributor }}</td>
                                <td>{{ $vendor->nama_umkm  }}</td>
                                <td>{{ $vendor->alamat_distributor }}, {{ $vendor->kota }}, {{ $vendor->provinsi }}, {{ $vendor->kode_pos }}</td>

                                <td>{{ $vendor->jenis_vendor  }}</td>
                                <td>{{ $vendor->kategori_vendor }}</td>
                                <!-- Tambahkan kolom lain sesuai kebutuhan -->
                            </tr>

                        </tbody>
					</table>
                    <table>
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Video</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img class="image_detail" style="width: 70%; height: 70%; border-radius: 0%;" src="{{ Storage::url($vendor->file_path) }}" alt="Gambar">
                                </td>
                                <td>
                                    <video width="100%" height="100%" controls>
                                        <source src="{{ Storage::url($vendor->video_path) }}" type="video/mp4">
                                    </video>

                                </td>
                            </tr>
                        </tbody>


                    </table>

                    <!-- Menampilkan Gambar -->




				</div>
				<!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div> -->
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="{{ asset('admin/js/script.js') }}"></script>
</body>
</html>
