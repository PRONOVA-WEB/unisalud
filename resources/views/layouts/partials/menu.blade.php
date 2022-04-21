<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ settings('site.logo') }}" class="img-fluid">
        </div>
        <div class="sidebar-brand-text mx-3">{{ settings('site.title') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 mt-3" id="sidebarToggle"></button>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menú
    </div>
    @canany(['Developer', 'Administrator', 'Mp: user creator'])
    <li class="nav-item {{ active(['patient.*']) }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePacientes"
            aria-expanded="true" aria-controls="collapsePacientes">
            <i class="fas fa fa-address-book"></i>
            <span>Pacientes</span>
        </a>
        <div id="collapsePacientes" class="collapse" aria-labelledby="headingPacientes" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('patient.index') }}">
                    <i class="fas fa-binoculars"></i> Buscar paciente
                </a>
            </div>
        </div>
    </li>
    @endcan
    @canany(['Developer', 'Administrator'])
    <li class="nav-item {{ active(['surgical_schedule.*']) }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSurgical"
            aria-expanded="true" aria-controls="collapseSurgical">
            <i class="fas fa-clipboard-list"></i>
            <span>Agenda Quirúrgica</span>
        </a>
        <div id="collapseSurgical" class="collapse" aria-labelledby="headingSurgical" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('surgical_schedule.pavilions') }}">
                    <i class="fas fa-clinic-medical"></i> Apertura de Pabellón
                </a>
                <a class="collapse-item" href="{{ route('surgical_schedule.schedule') }}">
                    <i class="fas fa-clock"></i> Agendamientos
                </a>
            </div>
        </div>
    </li>
    @endcan
    @can('Some: user')
    <li class="nav-item {{ active(['some.*']) }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSome"
            aria-expanded="true" aria-controls="collapseSome">
            <i class="fas fa-calendar"></i>
            <span>SOME</span>
        </a>
        <div id="collapseSome" class="collapse" aria-labelledby="headingSome" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('some.appointment') }}">
                    <i class="fas fa-check-circle"></i> Cita
                </a>
                <a class="collapse-item" href="{{ route('some.reallocate') }}">
                    <i class="fas fa-check-circle"></i> Reasignación/Reserva
                </a>
                <a class="collapse-item" href="{{ route('some.open_tprogrammer') }}">
                    <i class="fas fa-check-circle"></i> Aperturar agenda
                </a>
                <a class="collapse-item" href="{{ route('some.agenda') }}">
                    <i class="fas fa-check-circle"></i> Gestor de agenda
                </a>
                <a class="collapse-item" href="{{ route('some.reallocationPending') }}">
                    <i class="fas fa-check-circle"></i> Pendiente <br>de reasignación
                </a>
                <a class="collapse-item" href="{{ route('some.interconsultation') }}">
                    <i class="fas fa-check-circle"></i> Interconsultas
                </a>
                <a class="collapse-item" href="{{ route('some.appointedAvailable') }}">
                    <i class="fas fa-check-circle"></i> Citado/Disponible
                </a>
                <a class="collapse-item" href="{{ route('some.openPending') }}">
                    <i class="fas fa-check-circle"></i> Pendiente apertura
                </a>
                <a class="collapse-item" href="{{ route('some.observations.index') }}">
                    <i class="fas fa-check-circle"></i> Observaciones
                </a>
            </div>
        </div>
    </li>
    @endcan
    @canany(['Mp: user'])
    <li class="nav-item {{ active(['medical_programmer.*']) }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProgramador"
            aria-expanded="true" aria-controls="collapseProgramador">
            <i class="fas fa-cubes"></i>
            <span>Programador médico</span>
        </a>
        <div id="collapseProgramador" class="collapse" aria-labelledby="headingProgramador" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @canany(['Mp: programador'])
                <a class="collapse-item" href="{{ route('medical_programmer.programming_proposal.index') }}">
                    <i class="fas fa-cube"></i> Propuestas<br> de programación
                </a>
                @endcanany
                <a class="collapse-item" href="{{ route('medical_programmer.contracts.index') }}">
                    <i class="fas fa-cube"></i>  Contratos
                </a>
                @canany(['Mp: reportes'])
                <a class="collapse-item" href="{{ route('medical_programmer.programming_proposal.consolidated_programmings') }}">
                    <i class="fas fa-cube"></i> Consolidado <br>de programaciones
                </a>
                <a class="collapse-item" href="{{ route('medical_programmer.reports.avaliableySpecialtyLocations') }}">
                    <i class="fas fa-cube"></i> Reporte <br>box / especialidad
                </a>
                <a class="collapse-item" href="{{ route('medical_programmer.reports.pendingPractitionersReport') }}">
                    <i class="fas fa-cube"></i>  Reporte 1
                </a>
                @endcan
            </div>
        </div>
    </li>
    @endcan
    @canany(['SAMU'])
    <li class="nav-item {{ active('samu.*') }}">
        <a class="nav-link " href="{{ route('samu.welcome') }}">
            <i class="fas fa-ambulance"></i> <span>SAMU</span>
        </a>
    </li>
    @endcanany
    @canany(['Mp: mantenedores'])
    <li class="nav-item {{ active(['parameter.*','medical_programmer.*']) }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMantenedor"
            aria-expanded="true" aria-controls="collapseMantenedor">
            <i class="fas fa-cogs"></i>
            <span>Mantenedor</span>
        </a>
        <div id="collapseMantenedor" class="collapse" aria-labelledby="headingMantenedor" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('parameter.organization.index','Todas las Organizaciones' ) }}">
                    <i class="fas fa-cog"></i> Organizaciones
                </a>
                <a class="collapse-item" href="{{ route('medical_programmer.locations.index') }}">
                    <i class="fas fa-cog"></i> Box
                </a>
                <a class="collapse-item" href="{{ route('medical_programmer.specialties.locations') }}">
                    <i class="fas fa-cog"></i> Box <br> por especialidades
                </a>
                <a class="collapse-item" href="{{ route('medical_programmer.rrhh.index') }}">
                    <i class="fas fa-cog"></i>  RRHH
                </a>
                {{-- <a class="collapse-item" href="{{ route('medical_programmer.operating_rooms.index') }}">
                    <i class="fas fa-cog"></i>  Pabellones
                </a> --}}
                <a class="collapse-item" href="{{ route('medical_programmer.mother_activities.index') }}">
                    <i class="fas fa-cog"></i>  Actividades Madre
                </a>
                <a class="collapse-item" href="{{ route('medical_programmer.activities.index') }}">
                    <i class="fas fa-cog"></i>  Actividades
                </a>
                <a class="collapse-item" href="{{ route('medical_programmer.subactivities.index') }}">
                    <i class="fas fa-cog"></i>  Sub-actividades
                </a>
                <a class="collapse-item" href="{{ route('medical_programmer.services.index') }}">
                    <i class="fas fa-cog"></i>  Servicios
                </a>
                <a class="collapse-item" href="{{ route('medical_programmer.specialties.index') }}">
                    <i class="fas fa-cog"></i>  Especialidades <br> por funcionario
                </a>
                <a class="collapse-item" href="{{ route('medical_programmer.professions.index') }}">
                    <i class="fas fa-cog"></i>  Profesiones
                </a>
            </div>
        </div>
    </li>
    @endcan
    @can('Administrator')
    <li class="nav-item {{ active(['parameter.*','user.edit','user.index','settings.*']) }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdministrador"
            aria-expanded="true" aria-controls="collapseAdministrador">
            <i class="fas fa-cog"></i>
            <span>Administrador</span>
        </a>
        <div id="collapseAdministrador" class="collapse" aria-labelledby="headingAdministrador" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('parameter.permission.index') }}">
                    <i class="fas fa-user-circle"></i> Permisos
                </a>
                <a class="collapse-item" href="{{ route('user.edit',auth()->id()) }}">
                    <i class="fas fa-user-circle"></i> Mis permisos
                </a>
                <a class="collapse-item" href="{{ route('user.index')}}">
                    <i class="fas fa-user-circle"></i> Usuarios
                </a>
                <a class="collapse-item" href="{{ route('settings.index') }}">
                    <i class="fas fa-wrench"></i> Parámetros
                </a>
            </div>
        </div>
    </li>
    @endcan
</ul>
<!-- End of Sidebar -->
