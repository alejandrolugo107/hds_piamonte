<?php
    date_default_timezone_set('America/Monterrey');
    $currentDate = date('Y-m-d');
?>

<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="modalForm" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalForm">Crear ticket</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    
        <div class="modal-body">

            <!-- MOTIVO CONTACTO  -->
            <div class="col-md-12">
                <label for="motivoContacto" class="form-label">Motivo:</label>
                <select class="form-select" id="motivoContacto" required name="selectMotivo">
                    <option disabled value="0">Elige una opción...</option>
                    <option value="1">Notificar inasistencia</option>
                    <option value="2">Solicitar cita maestro/coordinador</option>
                    <option value="3">Cambiar precompra</option>
                    <option value="4">Notificar inasistencia academias</option>
                    <option value="5">Soporte a plataformas</option>
                </select>
            </div>

            <!-- Start Form -->
            <form class="row g-3" id="formTicket" method="post" action="/tickets.php">
                <div class="col-md-12">

                    <!-- Email tutor-->
                    <label for="emailTutor" class="form-label mt-2">Correo tutor:</label>
                    <input type="email" class="form-control" id="emailTutor" 
                    placeholder="Ingresa tu correo" 
                    name="tutor"
                    required>


                    <!-- Nombre Alumno-->
                        <label for="faltaAlumno" class="form-label mt-2">Nombre del Alumno:</label>
                        <input type="text" class="form-control mb-2" id="nombreAlumno"
                        placeholder="Ingresa el nombre del alumno"  
                        name="alumno" 
                        required
                        autocapitalize="words">


                    <!-- Nivel -->
                        <label for="nivelAlumno" class="form-label">Nivel:</label>
                        <select class="form-select" id="nivelAlumno" name="selectNivel" required>
                            <option selected disabled value="0">Elige una opción...</option>
                            <option value="Kinder">Kinder</option>
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria">Secundaria</option>
                        </select>

                    <!-- Grado -->
                    <div id="gradoContainer" style="display: none;">
                    <label for="gradoAlumno" class="form-label mt-1">Grado:</label>
                        <select class="form-select" id="selectGrado" name="selectGrado" required>
                        </select>
                    </div>


                    <!-- FIELDSET INASISTENCIAS -->

                    <fieldset id="fieldsetInasistencias">
                        <!-- Fecha Inasistencia -->
                        <label for="fechaInasistencia" class="form-label mt-1">Fecha inasistencia:</label>
                        <input type="date" class="form-control mb-2" id="fechaInasistencia" 
                        placeholder="Selecciona una fecha" 
                        name="feEvento"
                        required>

                        <!-- Motivo Inasistencia -->
                        <label for="motivoInasistencia" class="form-label mt-1">Motivo:</label>
                        <input type="text" class="form-control mb-2" name="motivoInasistencia" id="motivoInasistencia" 
                        placeholder="Ingresa el motivo"
                        required>

                        <!-- Adjunto Inasistencia -->
                        <label for="adjuntoInasistencia" class="form-label mt-1">Adjunto: <span class="text-danger" style="font-size: 12px;">(opcional)</span></label>
                        <input class="form-control" type="file" name="adjuntoInasistencia" id="adjuntoInasistencia" accept="image/jpeg,image/png,application/pdf,">
                    </fieldset>



                    <!-- FIELDSET CITAS -->

                    <fieldset id="fieldsetCitas">
                        <!-- Coordinacion Cita -->
                        <label for="selectDepartamento" class="form-label mt-1">Coordinación:</label>
                        <select class="form-select" id="selectDepartamento" name="selectDepartamento" required>
                            <option selected disabled value="">Elige una opción...</option>
                            <option value="Español">Español</option>
                            <option value="Inglés">Inglés</option>
                        </select>

                        <!-- Motivo Cita -->
                        <label for="motivoCita" class="form-label mt-1">Motivo:</label>
                        <input type="text" class="form-control" name="motivoCita" id="motivoCita" 
                        placeholder="Ingresa el motivo de la cita"
                        required>

                    </fieldset>


                    <!-- FIELDSET PRECOMPRAS -->
                    
                    <fieldset id="fieldsetPrecompras">
                        <!-- Input Previa Fecha Precompra -->
                        <label for="fechaPrecompra" class="form-label mt-1">Fecha de precompra:</label>
                            <input type="date" class="form-control mb-1" id="fechaPrecompra" 
                            placeholder="Selecciona la fecha de precompra" 
                            name="fechaPrecompra"
                            min="<?php echo ($currentDate)?>"
                            required>
                        
                        <label for="nuevaFechaPrecompra" class="form-label mt-1">Nueva fecha de precompra:</label>
                            
                        <!-- Input Nueva Fecha Precompra -->
                        <input type="date" class="form-control mb-1" id="nuevaFechaPrecompra" 
                            placeholder="Selecciona la nueva fecha de precompra" 
                            name="nuevaFechaPrecompra"
                            min="<?php echo ($currentDate)?>"
                            required>
                        
                        <!-- Motivo Inasistencia -->
                        <label for="motivoPrecompra" class="form-label mt-1">Motivo:</label>
                        <input type="text" class="form-control mb-2" name="motivoPrecompra" id="motivoPrecompra" 
                        placeholder="Ingresa el motivo"
                        required>
                    </fieldset>

                    <fieldset id="fieldsetAcademias">

                        <!-- Select Academia -->
                        <label for="academiaAlumno" class="form-label mt-1">Academia:</label>
                            <select class="form-select" id="academiaAlumno" name="academiaAlumno" required>
                            </select>

                            <!-- Motivo Inasistencia -->
                        <label for="motivoPrecompra" class="form-label mt-1">Motivo:</label>
                        <input type="text" class="form-control mb-2" name="motivoPrecompra" id="motivoPrecompra" 
                        placeholder="Ingresa el motivo"
                        required>
                        <!-- Adjunto Inasistencia -->
                        <label for="adjuntoInasistencia" class="form-label mt-1">Adjunto: <span class="text-danger" style="font-size: 12px;">(opcional)</span></label>
                        <input class="form-control" type="file" name="adjuntoInasistencia" id="adjuntoInasistencia" accept="image/jpeg,image/png,application/pdf,">
                    </fieldset>


                    <fieldset id="fieldsetSoporte" form="formTicket">

                    </fieldset>

                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
            </form>
        </div>
    </div>
  </div>
</div>
















