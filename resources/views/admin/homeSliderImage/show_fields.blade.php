<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $homeSliderImage->id }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $homeSliderImage->title }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $homeSliderImage->description }}</p>
</div>

<div class="col-sm-12">
    
    <p><img src="{{ asset(config('fast.home_slider_image').'/'.$homeSliderImage->image);}}" alt="..." class="img-thumbnail">
</p>
</div>

