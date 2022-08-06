<div class="col-sm-12 col-lg-10">
                    <div class="row">
                        <!-- Name Field -->
                        <div class="form-group col-sm-8">
                            {!! Form::label('name', 'Post Name:',['class' => 'required']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Title Field -->
                        <div class="form-group col-sm-8">
                            {!! Form::label('slug', 'Slug:',['class' => 'required']) !!}
                            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Description Field -->
                        <div class="form-group col-sm-8 col-lg-8">
                            {!! Form::label('description', 'Description:',['class' => 'required']) !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>5]) !!}
                        </div>

                        <div class="form-group col-sm-8">
                            {!! Form::label('yt_iframe', 'Video Link:') !!}
                            {!! Form::text('yt_iframe', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Guard Name Field -->
                        <div class="form-group col-sm-8">
                            {!! Form::label('image', 'Image:') !!}
                            {!! Form::file('image', null, ['class' => 'form-control']) !!}
                        </div>

                        <h6 class="col-sm-8">SEO Tags </h6>

                        <div class="form-group col-sm-8">
                            {!! Form::label('meta_title', 'Meta Title:') !!}
                            {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Description Field -->
                        <div class="form-group col-sm-8 col-lg-8">
                            {!! Form::label('meta_description', 'Meta Description:',) !!}
                            {!! Form::textarea('meta_description', null, ['class' => 'form-control','rows'=>5]) !!}
                        </div>

                        <!-- Description Field -->
                        <div class="form-group col-sm-8 col-lg-8">
                            {!! Form::label('meta_keyword', 'Meta Keywords:') !!}
                            {!! Form::textarea('meta_keyword', null, ['class' => 'form-control','rows'=>5]) !!}
                        </div>
                        
                        <div class="form-group col-sm-6">
                            {!! Form::label('status', 'Status:') !!}
                            {!! Form::checkbox('status', 1) !!}
                        </div>



                    </div>


                </div>