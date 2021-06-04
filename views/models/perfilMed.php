<?php 
require_once 'views/admin/breadcrumb.php'; 

?>


<div class="content">
    <div class="container-fluid">

        <div class="row">
            <?php require_once 'views/admin/sidebar.php';  ?>
            <div class="col-md-7 col-lg-8 col-xl-9">

                <form class="theme-form update-Form" action="controller/dashboard/upPerfil.controlador.php" method="post" role="form"
                    data-form="updatePerfil" enctype="multipart/form-data">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Información Basica </h4>
                            <div class="row form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="change-avatar">
                                            <div class="profile-img">
                                                <img src="#" id="preview" alt="User Image">
                                            </div>
                                            <div class="upload-img">
                                                <div class="change-photo-btn">
                                                    <span><i class="fa fa-upload"></i> Sube tu Foto</span>
                                                    <input type="file" name="foto" id="foto" class="upload">
                                                </div>
                                                <small class="form-text text-muted">Solo Imagenes JPG, PNG. Tamaño
                                                    Maximo 2MB</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre Completo <span class="text-danger">*</span></label>
                                        <input type="text" name="nombre" id="nombre" class="form-control " style="text-transform: capitalize;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Correo <span class="text-danger">*</span></label>
                                        <input type="email" name="correo" id="correo" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Documento <span class="text-danger">*</span></label>
                                        <input type="text" name="documento" id="documento" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Numero de Colegiatura <span class="text-danger">*</span></label>
                                        <input type="text" name="num_colegiatura" id="num_colegiatura" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telefono <span class="text-danger">*</span></label>
                                        <input type="text" name="telefono" id="telefono" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Especialidad <span class="text-danger">*</span></label>
                                        <select class=" form-control floating" name="especialidad" id="especialidad">
                                            <option value="default">Elige</option>
                                            <option value="Alergista">Alergista</option>
                                            <option value="Anestesiólogo">Anestesiólogo </option>
                                            <option value="Cardiologo">Cardiólogo </option>
                                            <option value="Cirujano"> Cirujano</option>
                                            <option value="Cardiovascular y Torácico"> Cardiovascular y Torácico
                                            </option>
                                            <option value="Cirujano general"> Cirujano general</option>
                                            <option value="Cirujano maxilofacial"> Cirujano maxilofacial </option>
                                            <option value="Cirujano pediátrico"> Cirujano pediátrico </option>
                                            <option value="Cirujano plástico"> Cirujano plástico</option>
                                            <option value="Cirujano vascular"> Cirujano vascular</option>
                                            <option value="Dentista"> Dentista</option>
                                            <option value="Dermatólogo"> Dermatólogo</option>
                                            <option value="Endocrinólogo"> Endocrinólogo</option>
                                            <option value="Enfermero"> Enfermero</option>
                                            <option value="Epidemiólogo"> Epidemiólogo</option>
                                            <option value="Especialista en Administración de Salud"> Especialista en
                                                Administración de Salud</option>
                                            <option value="Especialista en Emergencias"> Especialista en Emergencias
                                            </option>
                                            <option value="Especialista en Medicina Estética"> Especialista en Medicina
                                                Estética</option>
                                            <option value="Especialista en Medicina Física y Rehabilitación">
                                                Especialista
                                                en Medicina Física y Rehabilitación</option>
                                            <option value="Especialista en Medicina Intensiva"> Especialista en Medicina
                                                Intensiva</option>
                                            <option value="Especialista en Medicina Natural"> Especialista en Medicina
                                                Natural</option>
                                            <option value="Especialista en Medicina Nuclear"> Especialista en Medicina
                                                Nuclear</option>
                                            <option value="Especialista en Radioterapia"> Especialista en Radioterapia
                                            </option>
                                            <option value="Especialista en Salud Pública"> Especialista en Salud Pública
                                            </option>
                                            <option value="Farmacólogo"> Farmacólogo</option>
                                            <option value="Fisioterapeuta"> Fisioterapeuta</option>
                                            <option value="Fonoaudiólogo"> Fonoaudiólogo</option>
                                            <option value="Gastroenterólogo"> Gastroenterólogo</option>
                                            <option value="Genetista"> Genetista</option>
                                            <option value="Geriatra"> Geriatra</option>
                                            <option value=" Ginecólogo"> Ginecólogo</option>
                                            <option value="Hematólogo"> Hematólogo</option>
                                            <option value="Homeópata"> Homeópata</option>
                                            <option value="Infectólogo"> Infectólogo</option>
                                            <option value="Internista"> Internista</option>
                                            <option value="Médico del Deporte"> Médico del Deporte</option>
                                            <option value="Médico del Trabajo"> Médico del Trabajo</option>
                                            <option value="Médico familiar"> Médico familiar</option>
                                            <option value="Médico general"> Médico general</option>
                                            <option value="Médico legal"> Médico legal</option>
                                            <option value="Médico ocupacional"> Médico ocupacional</option>
                                            <option value="Nefrólogo"> Nefrólogo</option>
                                            <option value="Neonatólogo"> Neonatólogo</option>
                                            <option value="Neumólogo"> Neumólogo</option>
                                            <option value="Neumólogo"> Neumólogo</option>
                                            <option value="Pediátrico"> Pediátrico</option>
                                            <option value="Neurocirujano"> Neurocirujano</option>
                                            <option value="Neurofisiólogo clínico"> Neurofisiólogo clínico</option>
                                            <option value="Neurólogo<"> Neurólogo</option>
                                            <option value="Nutricionista"> Nutricionista</option>
                                            <option value="Oftalmólogo"> Oftalmólogo</option>
                                            <option value="Oncólogo"> Oncólogo</option>
                                            <option value="Óptico"> Óptico</option>
                                            <option value="Otorrino"> Otorrino</option>
                                            <option value="Patólogo"> Patólogo</option>
                                            <option value="Patólogo clínico"> Patólogo clínico</option>
                                            <option value="Pediatra"> Pediatra</option>
                                            <option value="Podólogo"> Podólogo</option>
                                            <option value="Psicólogo"> Psicólogo</option>
                                            <option value="Psiquiatra"> Psiquiatra</option>
                                            <option value="Quiropráctico"> Quiropráctico</option>
                                            <option value="Radiólogo"> Radiólogo</option>
                                            <option value="Reumatólogo"> Reumatólogo</option>
                                            <option value="Técnico en Laboratorio Clínico"> Técnico en Laboratorio
                                                Clínico
                                            </option>
                                            <option value="Terapeuta complementario"> Terapeuta complementario</option>
                                            <option value="Traumatólogo y Ortopedista"> Traumatólogo y Ortopedista
                                            </option>
                                            <option value="Urólogo"> Urólogo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ubicación <span class="text-danger">*</span></label>
                                        <input type="text" name="ubicacion" id="ubicacion" class="form-control">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sobre Mi </h4>
                            <div class="mb-0 form-group">
                                <label>Biografia <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="sobre_mi" id="sobre_mi" rows="5"></textarea>
                            </div>

                        </div>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Información del Consultorio</h4>
                            <div class="row form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre de la Clinica <span class="text-danger">*</span></label>
                                        <input type="text" name="nombre_clinica" id="nombre_clinica" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Dirección de la Clinica <span class="text-danger">*</span></label>
                                        <input type="text" name="direccion_clinica" id="direccion_clinica" class="form-control">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Precio de Consultas</h4>
                            <div class="row form-row">
                                <div class="col-md-6">
                                     

                                    <div class="row custom_price_cont" id="custom_price_cont">
                                        <div class="col-md-10">
                                        <label>Consulta Online <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="precio_consulta_online" name="precio_consulta_online" placeholder="20.00">
                                            <small class="form-text text-muted">Precio Expresado en Soles ( 000.00 )</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     

                                    <div class="row custom_price_cont" id="custom_price_cont">
                                        <div class="col-md-10">
                                        <label>Consulta Presencial <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="precio_consulta_presencial" name="precio_consulta_presencial" placeholder="20.00">
                                            <small class="form-text text-muted">Precio Expresado en Soles ( 000.00 )</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card services-card">
                        <div class="card-body">
                            <h4 class="card-title">Servicios <span class="text-danger">*</span></h4>
                            <div class="form-group">

                                <input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Tipea tus Servicios"
                                    name="services" id="services">
                                <small class="form-text text-muted">Nota: Recomendamos un maximo de 3 servicios.</small>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Educación <span class="text-danger">*</span></h4>
                            <div class="education-info">
                                <div class="row form-row education-cont">
                                    <div class="col-12 col-md-10 col-lg-11">
                                        <div class="row form-row">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label>Titulo</label>
                                                    <input type="text" name="titulo" id="titulo" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label>Universidad / Colegio</label>
                                                    <input type="text" name="universidad" id="universidad" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label>Años de Estudios</label>
                                                    <input type="text" name="anio_exp" id="anio_exp" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tipo de Membresía <span class="text-danger">*</span></h4>
                            <div class="membership-info">
                                <div class="row form-row membership-cont">
                                    <div class="col-12 col-md-10 col-lg-5">
                                        <div class="form-group">
                                       
                                            <input type="text"   value="<?=$membresia_?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="res-update animated fadeInDown"> </div>
                    <div class="submit-section submit-btn-bottom">
                        <button type="submit" class="btn btn-primary submit-btn">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>