    <div class="modal fade" id="agregarEmpleadoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 titulo_modal">Registrar Nueva Oferta</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formularioEmpleado" action="" method="POST" autocomplete="off">
                        <div class="mb-3">
                            <label class="form-label">Empresa</label>
                            <input type="text" name="nombre" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Modalidad</label>
                            <input type="text" name="cedula" class="form-control" required />
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Años requeridos</label>
                                <!-- <select class="form-select" name="edad" required>
                                    <option value=""> Seleccione </option>
                                    <?php
                                    for ($i = 18; $i <= 60; $i++) {
                                        echo "<option value='$i'>$i</option>";
                                    } ?>
                                </select> -->
                                <!-- <input type="text" name="edad" class="form-control" required /> -->
                                <input type="number" name="edad" class="form-control" required />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tipo</label>
                                <input type="text" name="sexo" class="form-control" required />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ubicacion</label>
                            <input type="text" name="telefono" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Seleccione el Cargo</label>
                            <input type="text" name="cargo" class="form-control" required />
                            
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn_add" onclick="window.addNuevoEmpleado(event)">
                                Registrar nuevo empleado
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>