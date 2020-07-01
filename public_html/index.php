<?php include 'head.php'; ?>
	<title>Профиль | Quaestor Bot</title>
</head>
<body>
	<?php include 'menu.php'; ?>
	<main>
		<div class="container">
			<div class="qb-header row no-gutters">
				<div class="col-sm-6 order-2 order-sm-1 text-center text-sm-left">
					<h1>Профиль</h1>
				</div>
				<?php include 'stat.php'; ?>
			</div>
			<div class="row no-gutters align-items-center">
				<div class="col-sm-7 qb-profile d-flex align-items-center">
					<div class="avatar avatar-big avatar-self mr-4">
						<svg><use xlink:href="/img/icons.svg#avatar"></use></svg>
				<!--		<img src="/img/user_avatar.jpg" alt="UserName"> Если есть аватар -->
					</div>
					<div class="">
						<h2>Александр Михалевский</h2>
						<p>arixold@yandex.ru</p>
					</div>
				</div>
				<div class="col-sm-5">
					<a href="#" class="btn btn-block btn-big">Купить робота</a>
				</div>
			</div>
		</div>
	</main>
	<?php include 'footer.php'; ?>
  	<script defer src="/js/main.js?1"></script>
</body>

</html>