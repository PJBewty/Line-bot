<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>กรส.ต.1</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/cus.css">
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="liff_search.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Sarabun|Roboto" rel="stylesheet">
		
	</head>
	<body>
		<header style="margin-bottom: 70px;">
			<nav class="shadow-sm navbar fixed-top navbar-light bg-white">
				<!-- Brand/logo -->
				<a class="navbar-brand font-weight-bold" href="#!">
					<img src="assets/images/pea-logo.png" alt="logo" style="width:100px;">
					ค้นหาข้อมูลอุปกรณ์
				</a>
			</nav>
		</header>
		<main>
			<div class="container mt-2">
				<div clas="row row-center">
					<div class="col-lg-12">
						<div class="form-group">
							<select class="form-control" id="office_select">
								<option selected disabled>--เลือกหน่วยงาน--</option>
								<option value="j091">กฟอ.พธร.</option>
								<option value="j092">กฟส.บางแพ</option>
								<option value="j093">กฟส.ดำเนินสะดวก</option>
								<option value="j094">กฟส.ดอนไผ่</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="คำค้นหา" id="keyword">
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-primary btn-block" onclick="search()">ค้นหา</button>
						</div>
					</div>
				</div>
			</div>
			<div class="container mt-2">
				<div class="row">
					<div class="col-lg-12">
					<p id="search_result">ผลการค้นหา 3 รายการ</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card mt-2">
							<div class="card-body">อุปกรณ์ 1</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card mt-2">
							<div class="card-body">อุปกรณ์ 1</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</body>
</html>