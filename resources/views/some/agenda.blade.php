@extends('layouts.app')

@section('title', 'Gestionar Agenda')

@section('content')

<h3 class="mb-3">Gestionar Agenda</h3>
<!-- form especialidad, funcionario, fecha,buscar-->
<form method="GET" id="form" class="form-horizontal" action="{{ route('some.agenda') }}">
  <!-- <div class="form-row mt-3"  >

          <div class="form-group col-md-4">
            <label for="for_specialty_id">Especialidad</label>
            <select id="for_specialty_id" name="specialty_id" class="form-control">
                <option selected>Traumatología</option>
                <option>Cardiología</option>
                <option>Ginecología</option>
                <option>Neurología</option>
            </select>
        </div>
          <div class="form-group col-md-4">
            <label for="for_user_id">Funcionario</label>
            <select id="for_user_id" name="user_id" class="form-control">
                <option selected>Macarena Lopez</option>
                <option>Daniel Suarez</option>
                <option>Jorge Miranda</option>
                <option>Maria Isabel Araya</option>
            </select>
        </div>
          <div class="form-group col-md-3">
            <label for="for_date">Fecha </label>
            <input type="date" name="date" class="form-control" id="for_date">
      </div>
          <div class="form-group col-md-1">
          <label for="inputEmail4">&nbsp;</label>
          <button type="submit" class="btn btn-primary form-control">Buscar</button>
        </div>

    </div> -->

    <div class="form-row">

      <div class="form-group col-md-9">
        @livewire('medical_programmer.select-med-prog-employee',['type'         => $request->type,
                                                                 'specialty_id' => $request->specialty_id,
                                                                 'profession_id'=> $request->profession_id,
                                                                 'user_id'      => $request->user_id,
                                                                 'required_enabled' => 0])
      </div>

      <div class="form-group col-md-3">
        <label for="inputEmail4">&nbsp;</label>
        <button type="submit" class="btn btn-primary form-control"> <i class="fa fa-search"></i> Buscar</button>
      </div>

    </div>

</form>
<!--  fin form especialidad, funcionario, fecha,buscar-->

<!-- <html lang='en'>
  <head>
    <meta charset='utf-8' />
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.7.0/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.7.0/main.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
            allDaySlot: false,
            firstDay: 1,

            slotMinTime: "08:00:00",
            slotDuration: "00:15:00",
            slotMaxTime: "17:30:00",

            timeFormat: 'HH:mm',
            locale: 'es',
            slotLabelFormat:
            {
              hour: 'numeric',
              minute: '2-digit',
              omitZeroMinute: false,
              hour12:false,
              meridiem: 'short'
            },

            editable: true,
            selectable: true,
            eventLimit: true, // allow "more" link when too many events
            displayEventEnd: true,

            events: [
                @foreach($appointments as $appointment)
                  @if($appointment->status == "booked")
                    @if($appointment->users->first())

                    {
                    id: '{{$appointment->id}}',
                    @if($appointment->cod_con_appointment_type_id == 4)
                      title: '{{$appointment->programmingProposalDetail->activity->activity_name}} <br> {{$appointment->users->first()->OfficialFullName}}',
                    @else
                      title: '{{$appointment->programmingProposalDetail->activity->activity_name}} <br> {{$appointment->users->first()->OfficialFullName}} (SC)',
                    @endif
                    start: '{{$appointment->start}}',
                    end: '{{$appointment->end}}',
                    @if($appointment->cod_con_appointment_type_id == 4)
                      color: 'gray',
                    @else
                      color: 'green',
                    @endif
                    },
                    @endif
                  @else
                    {
                    id: '{{$appointment->id}}',
                    title: '{{$appointment->programmingProposalDetail->activity->activity_name}}',
                    start: '{{$appointment->start}}',
                    end: '{{$appointment->end}}'
                    },
                  @endif
                @endforeach
            ],

            eventClick: function(info) {
              let id = info.event.id;
              window.open('appointment_detail/'+id,"_self");
            }
        });

        calendar.render();
      });



    </script>
  </head>
  <body>
    <div id='calendar'></div>
  </body>
</html> -->

@livewire('jcalendar',['specialty_id' => $request->specialty_id,
                       'profession_id'=> $request->profession_id,
                       'user_id'      => $request->user_id])
@livewireScripts
@stack('scripts')

@endsection

@section('custom_js')

@endsection
