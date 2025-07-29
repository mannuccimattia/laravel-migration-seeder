@php
    $trenitalia = Vite::asset('resources/img/trenitalia.png');
    $italo = Vite::asset('resources/img/italo.png');

    if ($train['company'] === 'Trenitalia') {
        echo "<img src='$trenitalia' alt='trenitalia logo'>";
    } elseif ($train['company'] === 'Italo') {
        echo "<img src='$italo' alt='italo logo'>";
    } else {
        echo $train['company'];
    }
@endphp
