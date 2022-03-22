<div>
    <div class="form-row">
        <fieldset class="form-group col-md-4">
            <label for="daysOfWeek">Día*</label>
            <select id="daysOfWeek" class="form-control" wire:model='daysOfWeek'>
                <option value="">--Seleccione--</option>
                @foreach ($days as $key => $day)
                    <option value="{{ $key }}">{{ $day }}</option>
                @endforeach
            </select>
        </fieldset>
        <fieldset class="form-group col-md-3">
            <label for="openingTime">Hora de inicio*</label>
            <input type="time" class="form-control" name="openingTime" wire:model='openingTime'>
        </fieldset>

        <fieldset class="form-group col-md-3">
            <label for="closingTime">Hora de término*</label>
            <input type="time" class="form-control" name="closingTime" wire:model='closingTime'>
        </fieldset>
        <fieldset class="form-group col-md-2">
            <label for="">&nbsp;</label>
            <button class="btn text-white btn-info btn-block" wire:click.prevent="add()"> <i
                    class="fa fa-clock"></i> Agregar</button>
        </fieldset>
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
            <input type="hidden" value="{{ json_encode($list) }}" name="hours_of_operation[]">
            <table class="table">
                <tr>
                    <th></th>
                    <th>Día de la semana</th>
                    <th>Horario</th>
                </tr>
                @forelse ($hours as $key => $hour)
                    <tr>
                        <td>
                            <i class="fas fa-check-circle"></i>
                        </td>
                        <td>
                            <label class="form-check-label">
                                {{ $days[$hour['daysOfWeek']] }}
                            </label>
                        </td>
                        <td>
                            <label class="form-check-label">
                                {{ \Carbon\Carbon::parse($hour['openingTime'])->format('H:i').' - '.\Carbon\Carbon::parse($hour['closingTime'])->format('H:i') }}
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
</div>
