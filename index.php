<?php include "head.php";?>

<!-- Inicio - Contenido de la Página -->
<div class="right_col" role="main">
  <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Nueva Acción</h2>
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
                <label class="control-label col-md-4 col-sm-12 col-xs-4">Objetivo<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="heard" class="form-control" required>
                    <option value=" ">--Seleccione Objetivo--</option>
                    <option value="1">Realizar semana técnologica</option>
                    <option value="2">Ejecutar capacitación en IoT</option>
                    <option value="3">Admisión 2018.10(URGENTE)</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4 col-sm-12 col-xs-4">Responsable<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="heard" class="form-control" required>
                    <option value=" ">--Seleccione Responsable--</option>
                    <option value="1">Israel Espinoza</option>
                    <option value="2">Augusto Murillo</option>
                    <option value="3">Walter García</option>
                    <option value="4">Ernesto Merlín</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4 col-sm-12 col-xs-4">Prioridad<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="heard" class="form-control" required>
                    <option value=" ">--Seleccione Prioridad--</option>
                    <option value="1">Alta</option>
                    <option value="2">Media</option>
                    <option value="3">Baja</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4 col-sm-12 col-xs-4">Estado<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" value="No Iniciado" class="date-picker form-control col-md-7 col-xs-12" disabled="false" type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4 col-sm-12 col-xs-4">Fec. Inicio<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class='input-group date' id='myDatepicker2'>
                      <input type='text' class="form-control" />
                      <span class="input-group-addon">
                         <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4 col-sm-12 col-xs-4">Fec. Final<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class='input-group date' id='myDatepicker2'>
                      <input type='text' class="form-control" />
                      <span class="input-group-addon">
                         <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4 col-sm-12 col-xs-4">Notas<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea class="form-control" rows="3" cols="50" placeholder="Escribir nota..." style="resize: none"></textarea>
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

  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Acciones ETI</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
              <thead>
                <tr>
                  <th>
                   <th><input type="checkbox" id="check-all" class="flat"></th>
                  </th>
                  <th>Acción</th>
                  <th>Responsable</th>
                  <th>Prioridad</th>
                  <th>Estado</th>
                  <th>Fecha Inicio</th>
                  <th>Fec. Final</th>
                  <th>Notas</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <th><input type="checkbox" id="check-all" class="flat"></th>
                  </td>
                  <td>Separar auditorio para el 5,6 y 7 de diciembre de 1700 a 2000 hrs</td>
                  <td>Augusto Murillo</td>
                  <td>Alta</td>
                  <td>No Iniciado</td>
                  <td>23 de Octubre</td>
                  <td>24 de Octubre</td>
                  <td>Datos</td>
                </tr>
                <tr>
                  <td>
                    <th><input type="checkbox" id="check-all" class="flat"></th>
                  </td>
                  <td>Confirmar exposiciones stand</td>
                  <td>Walter Garcia</td>
                  <td>Alta</td>
                  <td>No Iniciado</td>
                  <td>23 de Octubre</td>
                  <td>3 de Noviembre</td>
                  <td>Datos</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin - Contenido de la Página -->

<?php include "footer.php";?>