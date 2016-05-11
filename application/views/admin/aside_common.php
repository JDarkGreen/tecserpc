
<aside class="mainWrapper__sidebar">
	<ul>
		<li>
			<a class="<?= $active == 'dashboard' ? 'active' : '' ?>" href="<?= site_url('admin'); ?>"><span class="glyphicon glyphicon-cog"></span> 
			Dashboard</a></li>

		<li><a class="<?= $active == 'banners' ? 'active' : '' ?>" href="<?= base_url('admin/dashboard/banners'); ?>"><span class="glyphicon glyphicon-folder-open"></span>
		Sección Banners</a></li>

		<li><a class="<?= $active == 'buscabas' ? 'active' : '' ?>" href="#"> <span class="glyphicon glyphicon-search"></span>
		Sección Buscabas</a></li>

		<li><a class="<?= $active == 'promocion' ? 'active' : '' ?>" href="#"> <span class="glyphicon glyphicon-shopping-cart"></span>
		Sección Promociones</a></li>

		<li><a class="<?= $active == 'links' ? 'active' : '' ?>" href="#"> <span class="glyphicon glyphicon-tags"></span>
		Links Utilitarios</a></li>
	</ul> <!-- /li -->
</aside> <!-- /.mainWrapper__sidebar- -->