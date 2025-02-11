<!-- Modal para Agregar Nueva Clase -->
<div class="modal fade" id="agregarClaseModal" tabindex="-1" aria-labelledby="agregarClaseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarClaseModalLabel">Agregar Nueva Clase</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para agregar nueva clase -->
                <form id="formAgregarClase">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="path_img" class="form-label d-none">Ruta de Imagen</label>
                        <input type="text" class="form-control" id="path_img" name="path_img">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link del Iframe</label>
                        <input type="text" class="form-control" id="link" name="link" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Editar Clase -->
<div class="modal fade" id="editarClaseModal" tabindex="-1" aria-labelledby="editarClaseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarClaseModalLabel">Editar Clase</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para editar clase -->
                <form id="formEditarClase">
                    <input type="hidden" id="editar_id_class" name="id_class">
                    <div class="mb-3">
                        <label for="editar_titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="editar_titulo" name="titulo">
                    </div>
                    <div class="mb-3">
                        <label for="editar_descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="editar_descripcion" name="descripcion"></textarea>
                    </div>
                    <div class="mb-3 d-none">
                        <label for="editar_path_img" class="form-label">Ruta de Imagen</label>
                        <input type="text" class="form-control" id="editar_path_img" name="path_img">
                    </div>
                    <div class="mb-3">
                        <label for="editar_link" class="form-label">Link del video</label>
                        <input type="text" class="form-control" id="editar_link" name="link">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Eliminar Clase -->
<div class="modal fade" id="eliminarClaseModal" tabindex="-1" aria-labelledby="eliminarClaseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eliminarClaseModalLabel">Eliminar Clase</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas eliminar esta clase?</p>
                <form id="formEliminarClase">
                    <input type="hidden" id="eliminar_id_class" name="id_class">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>