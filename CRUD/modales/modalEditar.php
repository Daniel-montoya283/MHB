    <div class="modal fade" id="editarEmpleadoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 titulo_modal">Modificar Oferta</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formularioEmpleadoEdit" action="" method="POST" autocomplete="off">
                        <input type="hidden" name="idEmpleado" id="idEmpleado" />
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
                            <button type="submit" class="btn btn-primary btn_add" onclick="window.actualizarEmpleado(event)">
                                Actualizar datos del empleado
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>