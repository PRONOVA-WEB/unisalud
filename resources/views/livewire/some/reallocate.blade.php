@section('title', 'Reasignar cita')
<div>
    <h3 class="mb-3">Reasignar cita</h3>
    <hr/>
    <div class="form-row mt-1">

        <div class="form-group col-6 col-md-3">
            <label for="for_type">Tipo</label>
            <select id="for_type" name="type" class="form-control"
                    wire:model.lazy="typeFrom" required
                    wire:change="getPractitionersFrom()">
                <option></option>
                <option>Médico</option>
                <option>No médico</option>
            </select>
        </div>

        <div class="form-group col-6 col-md-3">
            @if($specialtiesFrom != null)
                <label for="for_specialty_id">Especialidad</label>
                <select id="for_specialty_id" name="specialty_id" class="form-control"
                        wire:model.lazy="selectedSpecialtyIdFrom"
                        wire:change="getPractitionersFrom()"
                        required>
                    <option></option>
                    @foreach($specialtiesFrom as $specialty)
                        <option value="{{$specialty->id}}">{{$specialty->specialty_name}}</option>
                    @endforeach
                </select>
            @endif

            @if($professionsFrom != null)
                <label for="for_profession_id">Profesión</label>
                <select id="for_profession_id" name="profession_id" class="form-control"
                        wire:model.lazy="selectedProfessionIdFrom"
                        wire:change="getPractitionersFrom()"
                        required>
                    <option></option>
                    @foreach($professionsFrom as $profession)
                        <option value="{{$profession->id}}">{{$profession->profession_name}}</option>
                    @endforeach
                </select>
            @endif

            @if($specialtiesFrom == null && $professionsFrom == null)
                <label for="for_profession_id">&nbsp;</label>
                <select class="form-control">
                    <option></option>
                </select>
            @endif

        </div>

        <div class="form-group col-6 col-md-3">
            <label for="for_practitioner_id">Funcionario</label>
            <select id="for_practitioner_id" name="practitioner_id" class="form-control"
                    wire:model.lazy="selectedPractitionerIdFrom" required>
                <option></option>
                @if($practitionersFrom != null)
                    @foreach($practitionersFrom as $practitioner)
                        <option value="{{$practitioner->id}}">{{$practitioner->user->OfficialFullName}}</option>
                    @endforeach
                @endif
            </select>

            @error('selectedPractitionerIdFrom')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-4 col-md-2">
            <label for="inputEmail4">Fecha </label>
            <input type="date" class="form-control" id="inputEmail4" placeholder="Ingrese Fecha"
                   wire:model.lazy="selectedDateFrom">
        </div>
        <div class="form-group col-2 col-md-1">
            <label for="inputEmail4">&nbsp;</label>
            <button type="button" class="btn btn-primary form-control" wire:click="getAppointmentsFrom()">
                <i class="fa fa-search"></i> Buscar
            </button>
        </div>

    </div>
    <!--tabla doctor-->

    @error('selectedAppointmentIdsFrom')
    <span class="text-danger">{{ $message }}</span>
    @enderror

    <div class="table-responsive">
        <table class="table table-sm table-hover">
            <thead class="table-info">
            <tr>
                <th scope="col">Sel.</th>
                <th scope="col">Profesional</th>
                <th scope="col">Paciente</th>
                <th scope="col">Actividad</th>
                <th scope="col">Subactividad</th>
                <th scope="col">Hora</th>
                <th scope="col">Estado</th>
            </tr>
            </thead>
            <tbody>
            @if($appointments)
                @foreach($appointments as $key => $appointment)
                    @if($appointment->users->first())
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input " type="checkbox"
                                       value="{{$appointment->id}}"
                                       name="selectedAppointments[{{$key}}]"
                                       wire:model.defer="selectedAppointmentIdsFrom"
                                       id="for_selected_appointments_from[{{$key}}]"
                                >
                            </div>
                        </td>
                        <td>
                            <label class="label"
                                   for="for_selected_appointments_from[{{$key}}]">{{$appointment->practitioners->first()->user->officialFullName}}</label>
                        </td>

                        <td>
                            <label class="label"
                                   for="for_selected_appointments_from[{{$key}}]">{{$appointment->users->first()->officialFullName}}</label>

                        </td>

                        <td>{{$appointment->programmingProposalDetail->activity->activity_name}}</td>
                        <td>{{($appointment->programmingProposalDetail->subactivity) ? $appointment->programmingProposalDetail->subactivity->sub_activity_name : ''}}</td>
                        <td>{{$appointment->start}}</td>
                        {{--                        <td>3</td>--}}
                        {{--                        <td>2</td>--}}
                        <td>{{$appointment->status}}</td>
                    </tr>

                    @endif
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

<!--fin tabla doctor-->
    <div class="form-row">
        <div class="form-group col-12 col-md-2">
            <button type="button" class="btn btn-danger form-control" wire:click="suspend()"> <i class="fas fa-pause"></i> SUSPENDER</button>
        </div>
    </div>

    <div class="form-row">

        <div class="form-group col-6 col-md-3">
            <label for="for_type_to">Tipo</label>
            <select id="for_type_to" name="type_to" class="form-control" wire:model.lazy="typeTo" required
                    wire:change="getPractitionersTo()">
                <option></option>
                <option>Médico</option>
                <option>No médico</option>
            </select>
        </div>

        <div class="form-group col-6 col-md-3">
            @if($specialtiesTo != null)
                <label for="for_specialty_id_to">Especialidad</label>
                <select id="for_specialty_id_to" name="specialty_id_to" class="form-control"
                        wire:model.lazy="selectedSpecialtyIdTo"
                        wire:change="getPractitionersTo()"
                        required>
                    <option></option>
                    @foreach($specialtiesTo as $specialty)
                        <option value="{{$specialty->id}}">{{$specialty->specialty_name}}</option>
                    @endforeach
                </select>
            @endif


            @if($professionsTo != null)
                <label for="for_profession_id_to">Profesión</label>
                <select id="for_profession_id_to" name="profession_id_to" class="form-control"
                        wire:model.lazy="selectedProfessionIdTo"
                        wire:change="getPractitionersTo()"
                        required>
                    <option></option>
                    @foreach($professionsTo as $profession)
                        <option value="{{$profession->id}}">{{$profession->profession_name}}</option>
                    @endforeach
                </select>
            @endif


            @if($specialtiesTo == null && $professionsTo == null)
                <label for="for_profession_id_to">&nbsp;</label>
                <select class="form-control">
                    <option></option>
                </select>
            @endif
        </div>

        <div class="form-group col-6 col-md-3">
            <label for="for_practitioner_id_to">Funcionario</label>
            <select id="for_practitioner_id_to" name="practitioner_id_to" class="form-control"
                    wire:model.lazy="selectedPractitionerIdTo" required>
                <option></option>
                @if($practitionersTo != null)
                    @foreach($practitionersTo as $practitioner)
                        <option value="{{$practitioner->id}}">{{$practitioner->user->OfficialFullName}}</option>
                    @endforeach
                @endif
            </select>

            @error('selectedPractitionerIdTo')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-4 col-md-2">
            <label for="inputEmail4">Fecha </label>
            <input type="date" class="form-control" id="inputEmail4" placeholder="Ingrese Fecha">
        </div>
        <div class="form-group col-2 col-md-1">
            <label for="inputEmail4">&nbsp;</label>
            <button type="button" class="btn btn-primary form-control" wire:click="getAppointmentsTo()"> <i class="fa fa-search"></i> Buscar</button>
        </div>

        <!--CHECK-->
        <div class="form-group col-md-1 mt-1 ml-4">

            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Proxima</label>
        </div>
        <!--CHECK-->
    </div>
    <!--anterior,siguiente,traspasar-->
    <div class="form-row">

        <div class="form-group col-6 col-md-2">
            <button type="button" class="btn btn-outline-primary">ANTERIOR <<</button>
        </div>
        <div class="form-group col-6 col-md-2">
            <button type="button" class="btn btn-outline-primary">SIGUIENTE >></button>
        </div>
        <div class="form-group col-md-2">
            <button type="button" class="btn btn-primary form-control" wire:click="reallocate()"> <i class="fas fa-angle-double-down"></i>  TRASPASAR</button>
            @error('selectedAppointmentIdsFromCant')
                <span class="text-danger">{{ $message }}</span>
            @enderror


        </div>


    </div>
    <!-- fin anterior,siguiente,traspasar-->


    @error('selectedAppointmentIdsTo')
    <span class="text-danger">{{ $message }}</span>
    @enderror
<!--tabla agenda-->
    <div class="table-responsive mb-5">
        <table class="table table-sm table-hover">
            <thead class="table-info">
            <tr>
                <th scope="col">Sel.</th>
                <th scope="col">Sobrecupo</th>
                <th scope="col">Profesional</th>
                <th scope="col">Actividad</th>
                <th scope="col">Subactividad</th>
                <th scope="col">Hora</th>
                {{--                <th scope="col">Cupo</th>--}}
                {{--                <th scope="col">Sobre Cupo</th>--}}
                <th scope="col">Estado</th>
            </tr>
            </thead>
            <tbody>


            @if($appointmentsTo)

                @foreach($appointmentsTo as $key => $appointmentTo)
                    <tr class="{{($appointmentTo->status == 'booked') ? 'table-danger' : '' }}">
                        <td>
                            <div class="form-check">
                                <input class="form-check-input " type="checkbox"
                                       value="{{$appointmentTo->id}}"
                                       name="selectedappointmentsTo[{{$key}}]"
                                       wire:model.defer="selectedAppointmentIdsTo"
                                       id="for_selected_appointmentsTo[{{$key}}]"
                                    {{$appointmentTo->status == 'booked' ? 'disabled' : ''}}>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       value="{{$appointmentTo->id}}"
                                       name="selectedOverbooking[{{$key}}]"
                                       wire:model.defer="selectedOverbookingappointmentsTo">
                            </div>
                        </td>
                        <td>
                            {{--                            {{$appointment->theoreticalProgramming->user->officialFullName}}--}}
                            <label class="label"
                                   for="for_selected_appointmentsTo[{{$key}}]">{{$appointmentTo->practitioners->first()->user->officialFullName}}</label>
                        </td>

                        <td>{{$appointmentTo->programmingProposalDetail->activity->activity_name}}</td>
                        <td>{{($appointmentTo->programmingProposalDetail->subactivity) ? $appointmentTo->programmingProposalDetail->subactivity->sub_activity_name : ''}}</td>
                        <td>{{$appointmentTo->start}}</td>
                        {{--                        <td>3</td>--}}
                        {{--                        <td>2</td>--}}
                        <td>{{$appointmentTo->status}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>


</div>
