@extends('layout.recruitment')

@section('title', 'Resources > Applicant')


@section('content')
<div class="content">
    <div class="container">
        <div class="resources">
            <div class="sidenav card">
                <div><a class="link" href="/">Applicants</a></div>
                <div><a href="#">Employees</a></div>
            </div>
            <div class="card">
                <h3>Applicant List</h3>
                <div class="cta-col-2">
                    <div class="search">
                        <span>
                            <input type="text" name="search" id="search-applicant">
                        </span>
                    </div>
                    <a class="btn btn-add" href="{{route('persons.create')}}">+ New Applicant</a>
                </div>
                <div class="list">
                    <table>
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Mobile Number</th>
                                <th>Email Address</th>
                                <th>Application Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($applicants))
                                @foreach($applicants as $applicant)
                                    <tr>
                                        <td><a class="link" href="/applicants/{{$applicant->person->id}}">{{ $applicant->person->first_name }}</a></td>
                                        <td>{{ $applicant->person->middle_name }}</td>
                                        <td>{{ $applicant->person->last_name }}</td>
                                        <td>{{ $applicant->person->mobile_1 }}</td>
                                        <td>{{ $applicant->person->email }}</td>
                                        <td>Initial Screening</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3">No applicants applied</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
