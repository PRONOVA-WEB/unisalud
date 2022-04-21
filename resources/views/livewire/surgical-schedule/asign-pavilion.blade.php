<div class="mt-4">
    <h6 class="mb-3">Datos del Paciente</h6>
    <hr/>
    <div class="form-row mt-3">
        <div class="form-group col-6 col-md-4">
            <label for="inputrut">RUT</label>
            <input type="text" class="form-control" required placeholder="Ingrese el rut" wire:model.lazy="run"
                   wire:change="setDv()">

        </div>
        <div class="form-group col-2 col-md-1">
            <label for="inputdv">DV</label>
            <input type="text" class="form-control" placeholder="-" wire:model="dv" readonly>
        </div>

        <div class="form-group col-2 col-md-2">
            <label for="inputEmail4">&nbsp;</label>
            <button type="button" class="btn btn-primary form-control" wire:click="searchUser()"> <i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
        </div>

        <div class="form-group col-2 col-md-1">
            <label for="inputEmail4">&nbsp;</label>
            <button type="button" class="btn btn-primary form-control" data-toggle="modal"
                    data-target="#searchUserModal" title="Búsqueda avanzada" >...
            </button>
        </div>
    </div>

    @error('user')
        <div class="form-row">
            <div class="alert alert-warning" role="alert">
                {{$message}}
                <button type="button" class="btn btn-primary btn-sm" wire:click="createPatient({{$interconsultationId}})"> <span data-feather="users"> </span> Ingresar paciente</button>
            </div>
        </div>
    @enderror

    <div class="form-row mt-3">
        <div class="form-group col-md-12">
            <div class="table-responsive">
                <table class="table table-sm table-hover">
                    <thead class="table-info">
                    <tr>
                        <th scope="col">Nombre:</th>
                        <th scope="col">{{ ($user) ? $user->officialFullName : '' }}</th>

                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Identificación</th>
                        <td>{{($user) ? $user->identifierRun->value . '-' . $user->identifierRun->dv : ''}}</td>
                        <input type="hidden" value="{{($user) ? $user->id : ''}}" name="pacient">
                    </tr>

                    <tr>
                        <th scope="row">Edad</th>
                        <td>{{($user) ? \Carbon\Carbon::parse($user->birthday)->age .' años' : ''}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Sexo</th>
                        <td colspan="2"> {{($user) ? $user->sex : '' }} </td>
                    </tr>

                    <tr>
                        <th scope="row">Dirección</th>
                        <td colspan="2"> {{($user) ? $user->officialFullAddress : ''}}  </td>
                    </tr>

                    <tr>
                        <th scope="row">Teléfono</th>
                        <td colspan="2">{{($user) ? $user->officialPhone : ''}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Correo</th>
                        <td colspan="2">{{($user && $user->officialEmail) ? $user->officialEmail : ''}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <h6>Staff</h6>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="for_type">Tipo</label>
            <select id="for_type" name="type" class="form-control" wire:model.lazy="type"
                    wire:change="getPractitioners()">
                <option></option>
                <option>Médico</option>
                <option>No médico</option>
            </select>
        </div>

        <div class="form-group col-md-3">
            @if($specialties != null)
                <label for="for_specialty_id">Especialidad</label>
                <select id="for_specialty_id" name="specialty_id" class="form-control" wire:model.lazy="specialty_id"
                        wire:change="getPractitioners()"
                        >
                    <option></option>
                    @foreach($specialties as $specialty)
                        <option value="{{$specialty->id}}">{{$specialty->specialty_name}}</option>
                    @endforeach
                </select>
            @endif

            @if($professions != null)
                <label for="for_profession_id">Profesión</label>
                <select id="for_profession_id" name="profession_id" class="form-control" wire:model.lazy="profession_id"
                        wire:change="getPractitioners">
                    <option></option>
                    @foreach($professions as $profession)
                        <option value="{{$profession->id}}">{{$profession->profession_name}}</option>
                    @endforeach
                </select>
            @endif

            @if($specialties == null && $professions == null)
                <label for="for_profession_id">&nbsp;</label>
                <select class="form-control">
                    <option></option>
                </select>
            @endif

        </div>

        <div class="form-group col-md-4">
            <label for="for_practitioner_id">Especialista</label>
            <select id="for_practitioner_id" name="practitioner_id" class="form-control"
                    wire:model.lazy="practitioner_id">
                <option></option>
                @if($practitioners != null)
                    @foreach($practitioners as $practitioner)
                        <option value="{{$practitioner->id}}">{{$practitioner->user->OfficialFullName}}</option>
                    @endforeach
                @endif
            </select>
        </div>

        <div class="form-group col-md-1">
            <label>&nbsp;</label><br>
            <button type="button" class="btn btn-success" wire:click.prevent="add()"><i class="fas fa-plus"></i>  </button>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger col-md-12">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="form-row {{ $showList }}">
        <fieldset class="form-group col-12 col-md-12">
            <input type="hidden" value="{{ json_encode($personal) }}" name="personal[]">
            <table class="table">
                <tr>
                    <th>Tipo</th>
                    <th>Especialidad / Profesión</th>
                    <th>Nombre y Apellido</th>
                </tr>
                @forelse ($personal as $key => $item)
                    <tr>
                        <td>
                            {{ $item['type'] }}
                        </td>
                        <td>
                            <label class="form-check-label">
                                {{ \App\Models\MedicalProgrammer\Specialty::find($item['specialties'])->specialty_name }}
                            </label>
                        </td>
                        <td>
                            <label class="form-check-label">
                                {{ App\Models\Practitioner::find($item['practitioners'])->user->OfficialFullName }}
                            </label>
                        </td>
                        <td>
                            <fieldset class="form-group col-lg-2">
                                <button class="btn btn-danger"
                                    wire:click.prevent="remove({{ $key }})"><i class="fas fa-times"></i></button>
                            </fieldset>
                        </td>
                    </tr>
                    @empty
                    {{ 'Nada cargado' }}
                    @endforelse
            </table>
        </fieldset>
    </div>
    @livewire('some.search-user-modal')

    <hr class="mt-3">

    <div wire:loading>
        Cargando...
    </div>

</div>

