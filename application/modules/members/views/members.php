<div class="card">
	<div class="card-header">
		<h3 class="card-title">Data Members</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>PIN</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Password</th>
					<th>Jaringan</th>
					<th>Belanja RO</th>
					<th>No. HP</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($members as $key => $val): ?>
					<tr>
						<td><?= $key+1; ?></td>
						<td><?= $val->pin ?></td>
						<td><?= $val->name ?></td>
						<td><?= $val->username ?></td>
						<td><?= $val->password_text ?></td>
						<td><a href="" class="btn btn-info btn-xs" title="">Jaringan</a></td>
						<td></td> 
						<td><?= $val->phone ?></td>
						<td><?= $val->status ?></td>
						<td>
							<a href="" title="" class="btn btn-warning btn-xs btn-block">Edit</a>
							<a href="" title="" class="btn btn-danger btn-xs btn-block">Hapus</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>