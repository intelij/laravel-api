<!--- Box Type Field --->
<div class="form-group col-sm-6">
    {!! Form::label('box_type', 'Box Type:') !!}
    {!! Form::text('box_type', null, ['class' => 'form-control']) !!}
</div>

<!--- Title Field --->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!--- Slug Field --->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!--- Short Title Field --->
<div class="form-group col-sm-6">
    {!! Form::label('short_title', 'Short Title:') !!}
    {!! Form::text('short_title', null, ['class' => 'form-control']) !!}
</div>

<!--- Marketing Description Field --->
<div class="form-group col-sm-6">
    {!! Form::label('marketing_description', 'Marketing Description:') !!}
    {!! Form::text('marketing_description', null, ['class' => 'form-control']) !!}
</div>

<!--- Calories Kcal Field --->
<div class="form-group col-sm-6">
    {!! Form::label('calories_kcal', 'Calories Kcal:') !!}
    {!! Form::text('calories_kcal', null, ['class' => 'form-control']) !!}
</div>

<!--- Protein Grams Field --->
<div class="form-group col-sm-6">
    {!! Form::label('protein_grams', 'Protein Grams:') !!}
    {!! Form::text('protein_grams', null, ['class' => 'form-control']) !!}
</div>

<!--- Fat Grams Field --->
<div class="form-group col-sm-6">
    {!! Form::label('fat_grams', 'Fat Grams:') !!}
    {!! Form::text('fat_grams', null, ['class' => 'form-control']) !!}
</div>

<!--- Carbs Grams Field --->
<div class="form-group col-sm-6">
    {!! Form::label('carbs_grams', 'Carbs Grams:') !!}
    {!! Form::text('carbs_grams', null, ['class' => 'form-control']) !!}
</div>

<!--- Bulletpoint1 Field --->
<div class="form-group col-sm-6">
    {!! Form::label('bulletpoint1', 'Bulletpoint1:') !!}
    {!! Form::text('bulletpoint1', null, ['class' => 'form-control']) !!}
</div>

<!--- Bulletpoint2 Field --->
<div class="form-group col-sm-6">
    {!! Form::label('bulletpoint2', 'Bulletpoint2:') !!}
    {!! Form::text('bulletpoint2', null, ['class' => 'form-control']) !!}
</div>

<!--- Bulletpoint3 Field --->
<div class="form-group col-sm-6">
    {!! Form::label('bulletpoint3', 'Bulletpoint3:') !!}
    {!! Form::text('bulletpoint3', null, ['class' => 'form-control']) !!}
</div>

<!--- Recipe Diet Type Id Field --->
<div class="form-group col-sm-6">
    {!! Form::label('recipe_diet_type_id', 'Recipe Diet Type Id:') !!}
    {!! Form::text('recipe_diet_type_id', null, ['class' => 'form-control']) !!}
</div>

<!--- Season Field --->
<div class="form-group col-sm-6">
    {!! Form::label('season', 'Season:') !!}
    {!! Form::text('season', null, ['class' => 'form-control']) !!}
</div>

<!--- Base Field --->
<div class="form-group col-sm-6">
    {!! Form::label('base', 'Base:') !!}
    {!! Form::text('base', null, ['class' => 'form-control']) !!}
</div>

<!--- Protein Source Field --->
<div class="form-group col-sm-6">
    {!! Form::label('protein_source', 'Protein Source:') !!}
    {!! Form::text('protein_source', null, ['class' => 'form-control']) !!}
</div>

<!--- Preperation Time Minutes Field --->
<div class="form-group col-sm-6">
    {!! Form::label('preperation_time_minutes', 'Preperation Time Minutes:') !!}
    {!! Form::text('preperation_time_minutes', null, ['class' => 'form-control']) !!}
</div>

<!--- Shelf Life Days Field --->
<div class="form-group col-sm-6">
    {!! Form::label('shelf_life_days', 'Shelf Life Days:') !!}
    {!! Form::text('shelf_life_days', null, ['class' => 'form-control']) !!}
</div>

<!--- Equipment Needed Field --->
<div class="form-group col-sm-6">
    {!! Form::label('equipment_needed', 'Equipment Needed:') !!}
    {!! Form::text('equipment_needed', null, ['class' => 'form-control']) !!}
</div>

<!--- Origin Country Field --->
<div class="form-group col-sm-6">
    {!! Form::label('origin_country', 'Origin Country:') !!}
    {!! Form::text('origin_country', null, ['class' => 'form-control']) !!}
</div>

<!--- Recipe Cuisine Field --->
<div class="form-group col-sm-6">
    {!! Form::label('recipe_cuisine', 'Recipe Cuisine:') !!}
    {!! Form::text('recipe_cuisine', null, ['class' => 'form-control']) !!}
</div>

<!--- In Your Box Field --->
<div class="form-group col-sm-6">
    {!! Form::label('in_your_box', 'In Your Box:') !!}
    {!! Form::text('in_your_box', null, ['class' => 'form-control']) !!}
</div>

<!--- Gousto Reference Field --->
<div class="form-group col-sm-6">
    {!! Form::label('gousto_reference', 'Gousto Reference:') !!}
    {!! Form::text('gousto_reference', null, ['class' => 'form-control']) !!}
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('boxes.index') !!}" class="btn btn-default">Cancel</a>
</div>
