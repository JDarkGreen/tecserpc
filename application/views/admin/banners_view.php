 <!-- Contenedor -->

<main class="mainWrapper">
	<div class="container-fluid">
		<div class="row">

			<!-- Aside Panel de Control -->
			<div class="col-xs-3">
				<?= $aside ?>
			</div> <!-- /.col-xs-4 -->

			<!-- Mostrar la lista de Banners -->
			<div class="col-xs-9">
				
				<!-- Sección Contenedora -->
				<section class="mainWrapper__content">
					<h2 class="mainWrapper__title">Gestor de Banners </h2> <br/>

					<div class="row">
						<!-- SECTION BANNER DE LA IZQUIEDA -->
						<div class="col-xs-6">
							<section class="sectionBanner">
								<h2 class="mainWrapper__subtitle">Banner Lateral Izquierdo</h2>
								<!-- tabla -->
								<table class="table table-bordered">
									<thead>
										<th>ID</th>
										<th>Thumbnail</th>
										<th>Nombre</th>
										<th>Orden</th>
										<th>Acción</th>
									</thead>
									<tbody>
										<?php foreach( $banners as $banner ) : ?>
											<tr>
												<td><?= $banner->id ?></td>
												<td><?= $banner->id ?></td>
												<td><?= $banner->nombre ?></td>
												<td><?= $banner->menu_order ?></td>
												<td>
													<a href="#">Edit</a> | 
													<a href="#">Remove</a>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>

								<!-- Agregar Nuevo Item -->
								<a href="#" data-toggle="modal" data-target="#modal-form-banner" >Agregar Nuevo Item </a>

							</section> <!-- /.sectionBanner -->
						</div> <!-- /.col-xs-6 -->

					</div> <!-- /.row -->

				</section> <!-- /.mainWrapper__content -->


				<!-- MODALS DE FORMULARIOS -->
				<div class="modal fade" id="modal-form-banner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Ingresar Nuevo Banner</h4>
							</div>
							<div class="modal-body">
								<!-- Formulario -->
								<?= form_open_multipart('admin/dashboard/insert_banner'); ?>
									<!-- Nombre -->
									<div class="form-group">
										<?= form_label('Título del banner: ', 'banner_title'); ?>
										<?php 
											$array_name = array('name'=>'banner_title','class'=>'input-group','required'=>'required');
											echo form_input( $array_name ); 
										?>
									</div>
									<!-- Archivo -->
									<div class="form-group">
										<?= form_label('Cargar archivo: 450px * 463px', 'banner_file'); ?>
										<?= form_upload('banner_file'); ?>
									</div>									
									<!-- Subir archivo -->
									<div class="form-group">
										<?php 
											$array_submit = array('name'=>'submit_banner','value'=>'Cargar Nuevo Banner','class'=>'btn btn-info');
											echo form_submit( $array_submit ); ?>
									</div>
								<?= form_close(); ?>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->				

			</div><!-- /.col-xs-8 -->

		</div> <!-- /.row -->
	</div> <!-- /.container-fluid -->
</main> <!-- /mainWrapper -->