<table class="table table-striped">
    <thead>
    <tr>
        @foreach($displayName as $display)
            <th>{{ $display }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($data as $table)
        <tr>
            @foreach($names as $name)
                <td>{{ $table->$name }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
@if(property_exists($data,'pageName'))
    {!! $data->links() !!}
@endif
