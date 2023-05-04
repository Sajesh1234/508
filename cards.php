<html>
<head>
<title>TCG Cards</title>
<?php require_once('header.php'); ?>

<script src="js/cards.js"></script>
</head>

<?php require_once('connection.php'); ?>

<body>

<div class="container-fluid mt-3 mb-3">
	<h4>Cards</h4>
	<div>
		<table id="table-Card" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Rarity</th>
					<th>Text</th>
					<th>Expansion</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

</body>
</html>