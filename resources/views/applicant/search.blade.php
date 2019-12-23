@if (count($persons))
    @foreach($persons as $person)
        <tr>
            <td><a class="link" href="/applicants/{{$person->id}}">{{ $person->first_name }}</a></td>
            <td>{{ $person->middle_name }}</td>
            <td>{{ $person->last_name }}</td>
            <td>{{ $person->mobile_1 }}</td>
            <td>{{ $person->email }}</td>
            <td>Initial Screening</td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="3">No results found</td>
    </tr>
@endif