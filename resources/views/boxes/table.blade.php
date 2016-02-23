<table class="table table-responsive">
    <thead>
    <th>Id</th>
			<th>Box Type</th>
			<th>Title</th>
			<th>Slug</th>
			<th>Short Title</th>
			<th>Marketing Description</th>
			<th>Calories Kcal</th>
			<th>Protein Grams</th>
			<th>Fat Grams</th>
			<th>Carbs Grams</th>
			<th>Bulletpoint1</th>
			<th>Bulletpoint2</th>
			<th>Bulletpoint3</th>
			<th>Recipe Diet Type Id</th>
			<th>Season</th>
			<th>Base</th>
			<th>Protein Source</th>
			<th>Preperation Time Minutes</th>
			<th>Shelf Life Days</th>
			<th>Equipment Needed</th>
			<th>Origin Country</th>
			<th>Recipe Cuisine</th>
			<th>In Your Box</th>
			<th>Gousto Reference</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($boxes as $box)
        <tr>
            <td>{!! $box->id !!}</td>
			<td>{!! $box->box_type !!}</td>
			<td>{!! $box->title !!}</td>
			<td>{!! $box->slug !!}</td>
			<td>{!! $box->short_title !!}</td>
			<td>{!! $box->marketing_description !!}</td>
			<td>{!! $box->calories_kcal !!}</td>
			<td>{!! $box->protein_grams !!}</td>
			<td>{!! $box->fat_grams !!}</td>
			<td>{!! $box->carbs_grams !!}</td>
			<td>{!! $box->bulletpoint1 !!}</td>
			<td>{!! $box->bulletpoint2 !!}</td>
			<td>{!! $box->bulletpoint3 !!}</td>
			<td>{!! $box->recipe_diet_type_id !!}</td>
			<td>{!! $box->season !!}</td>
			<td>{!! $box->base !!}</td>
			<td>{!! $box->protein_source !!}</td>
			<td>{!! $box->preperation_time_minutes !!}</td>
			<td>{!! $box->shelf_life_days !!}</td>
			<td>{!! $box->equipment_needed !!}</td>
			<td>{!! $box->origin_country !!}</td>
			<td>{!! $box->recipe_cuisine !!}</td>
			<td>{!! $box->in_your_box !!}</td>
			<td>{!! $box->gousto_reference !!}</td>
			<td>{!! $box->created_at !!}</td>
			<td>{!! $box->updated_at !!}</td>
            <td>
                <a href="{!! route('boxes.edit', [$box->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('boxes.delete', [$box->id]) !!}" onclick="return confirm('Are you sure wants to delete this Box?')">
                    <i class="glyphicon glyphicon-trash"></i>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>