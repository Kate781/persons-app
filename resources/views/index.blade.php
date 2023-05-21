@extends('layouts.app')

@section('content')

    <!-- Page content -->
    <div id="main">
        <div class="container">
            <div class="text-center">
                <h1>Naključno izbiranje imen</h1>
                <p>Program naključno izbira ime osebe iz polja, katerega definiraš sam/a</p>
            </div>

            <!-- Save random person -->
            <form id="storeForm" method="POST" action="{{ route('persons.store') }}">
                @csrf
                <label>Vpiši imena:</label>
                <textarea name="names" rows="8" required>@if(session('names')){{ session('names') }}@endif</textarea>
                <button type="submit" class="icon icon-dice">Izberi nakljucno osebo</button>
            </form>
            @if(session('random_name'))
                <div class="result icon icon-ok">Naključno izbrana oseba je <u>{{ session('random_name') }}</u></div>
            @endif

            <!-- Persons list -->
            @if(count($persons) > 0)
                <table id="personsTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ime</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($persons as $person)
                            <tr>
                                <td>{{ $person->id }}</td>
                                <td>{{ $person->name }}</td>
                                <td>
                                    <form method="POST" action="{{ route('persons.destroy', $person) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="names" value="{{ session('names') }}">
                                        <button type="submit" class="icon icon-cancel">Izbriši</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
