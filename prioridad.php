<?php include "head.php";?>
<!-- Inicio - Contenido de la Página -->
<div class="right_col" role="main">
	<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Módulo Prioridad</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-4 col-sm-12 col-xs-4">Nombre Prioridad<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-5">
                  <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Guardar</button>
				  <button class="btn btn-primary" type="reset"><i class="fa fa-close"></i> Limpiar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

	<div class="x_content">
		<div class="table-responsive">
			<table class="table table-striped jambo_table bulk_action">
		        <thead>
		          <tr class="headings">
		            <th class="column-title">ID</th>
		            <th class="column-title">Prioridad </th>
		            <th class="column-title no-link last" colspan="2" ><span class="nobr">Acciones</span>
		            </th>
		            <th class="bulk-actions" colspan="2">
		              <a class="antoo" style="color:#fff; font-weight:200;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
		            </th>
		          </tr>
		        </thead>

		        <tbody>
		          <tr class="odd pointer">
		            <td class="a-right a-right">1</td>
		            <td class="a-right a-right">Alta</td>
		            <td class="a-right a-right">
		            	<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Modificar</button>
		            	<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Eliminar</button>
		            </td>
		          </tr>
		        </tbody>
			</table>
	    </div>
	</div>
</div>
<!-- Fin - Contenido de la Página -->
<?php include "footer.php";?>