<div class="col-sm-12 col-lg-10">
                    <div class="row">
                        <!-- Title Field -->
                        <div class="form-group col-sm-8">
                            {!! Form::label('title', 'Title:',['class' => 'required']) !!}
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Description Field -->
                        <div class="form-group col-sm-8 col-lg-8">
                            {!! Form::label('description', 'Description:') !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>5]) !!}
                        </div>

                        <!-- Guard Name Field -->
                        <div class="form-group col-sm-8">
                            {!! Form::label('image', 'Image:') !!}
                            {!! Form::file('image', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group col-sm-6">
                            {!! Form::label('status', 'Status:') !!}
                            {!! Form::checkbox('status', 1) !!}
                        </div>



                    </div>


                </div>