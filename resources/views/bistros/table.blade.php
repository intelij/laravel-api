<table class="table table-responsive">
    <thead>
    <th>Id</th>
			<th>Name</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($bistros as $bistro)
        <tr>
            <td>{!! $bistro->id !!}</td>
			<td>{!! $bistro->name !!}</td>
			<td>{!! $bistro->created_at !!}</td>
			<td>{!! $bistro->updated_at !!}</td>
            <td>
                <a href="{!! route('bistros.edit', [$bistro->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('bistros.delete', [$bistro->id]) !!}" onclick="return confirm('Are you sure wants to delete this Bistro?')">
                    <i class="glyphicon glyphicon-trash"></i>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>