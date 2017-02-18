<?php $__env->startSection('content'); ?> :<table border="1" width="75%" align="center">
			<tr>
				<th><a href="tambah.php"><button type="submit">+ TAMBAH</button></a></th>
			</tr>
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Nim</td>
				<td>Alamat</td>
				<td>Aksi</td>
				<td>Aksi</td>
			</tr>
			
				
		</table>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>