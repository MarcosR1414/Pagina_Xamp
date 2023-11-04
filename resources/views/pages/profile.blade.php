@extends('layouts.app')
 
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perfil de usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
 
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../assets/img/avatar6.png"
                       alt="User profile picture">
                </div>
 
                <h3 class="profile-username text-center">{{ Auth::user()->name }} - {{ Auth::user()->username }}</h3>
 
                <p class="text-muted text-center">{{ Auth::user()->email }}</p>
 
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Seguidores</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Siguiendo</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Amigos</b> <a class="float-right">13,287</a>
                  </li>
                </ul>
 
                <a href="#" class="btn btn-primary btn-block"><b>Seguir</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
 
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Acerca de mí</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Educación</strong>
 
                <p class="text-muted">
                  Senati - Huánuco
                </p>
 
                <hr>
 
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>
 
                <p class="text-muted">Huánuco</p>
 
                <hr>
 
                <strong><i class="fas fa-pencil-alt mr-1"></i> Habilidades</strong>
 
                <p class="text-muted">
                  <span class="tag tag-danger">HTML</span>
                  <span class="tag tag-success">Css</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">...</span>
                </p>
 
                <hr>
 
                <strong><i class="far fa-file-alt mr-1"></i> Notas</strong>
 
                <p class="text-muted">Este es un proyecto</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Actividad</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Línea de tiempo</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Ajustes</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  No hay actividad por ahora xd
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    03-2023
                  </div>
                  <!-- /.tab-pane -->
 
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Usuario</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Usuario">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Nombre">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experiencia</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experiencia"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Habilidades</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Habilidades">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Estoy de acuerdo con los <a href="#">Términos y condiciones</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Enviar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection