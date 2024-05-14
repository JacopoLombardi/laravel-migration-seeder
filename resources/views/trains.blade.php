
@extends('layout.main')

@section('content')

    <div class="d-flex  justify-content-center  mt-5">
        <h1>Lista dei treni</h1>
    </div>

    <div class="container  mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Company</th>
                    <th scope="col">ticket_number</th>
                    <th scope="col">departure_station</th>
                    <th scope="col">arrival_station</th>
                    <th scope="col">departure_time</th>
                    <th scope="col">arrival_time</th>
                    <th scope="col">train_number</th>
                    <th scope="col">carriage_number</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($trains as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->company }}</td>
                        <td>{{ $item->ticket_number }}</td>
                        <td>{{ $item->departure_station }}</td>
                        <td>{{ $item->arrival_station }}</td>
                        <td>{{ $item->departure_time }}</td>
                        <td>{{ $item->arrival_time }}</td>
                        <td>{{ $item->train_number }}</td>
                        <td>{{ $item->carriage_number }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
