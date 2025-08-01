<tr>
    <td>
        <div>
            <x-company-logo :train="$train" />
        </div>
        <div># {{ $train['train_number'] }}</div>
    </td>
    <td>
        {{ $train['departure_date'] }}
    </td>
    <td>
        <div>{{ $train['departure_station'] }} </div>
        <div> {{ $train['departure_time'] }}</div>
    </td>
    <td>
        <div>{{ $train['arrival_station'] }}</div>
        <div>{{ $train['arrival_time'] }}</div>
    </td>
    <td class="text-end {{ $train['on_time'] ? 'text-success' : 'text-danger' }}">
        {{ $train['on_time'] ? 'NO' : 'YES' }}
    </td>
    <td class="text-end {{ !$train['canceled'] ? 'text-success' : 'text-danger' }}">
        {{ !$train['canceled'] ? 'NO' : 'YES' }}
    </td>
</tr>
